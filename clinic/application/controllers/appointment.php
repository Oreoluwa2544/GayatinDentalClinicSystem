<?php
class Appointment extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('calendar_model');
		$this->load->model('appointment_model');
		$this->load->model('patient_model');
		date_default_timezone_set('Asia/Manila');
		$firstparam = "";
		$secondparam = "";
		$thirdparam = "";
	}

	public function issue_appointment($day,$date){
		if(date('l', strtotime($date)) == $day){
			if(date('l', strtotime($date)) != 'Sunday'){
				$today = strtotime(date("Y-m-d", strtotime("tomorrow")));
				$rday = strtotime($date);
				if($rday>=$today){
					$data['time'] = $this->calendar_model->get_sched($date);
					$data['reserved'] = $this->appointment_model->get_reserved($date);
					$data['date'] = $date;
					$data['val']=0;
					$this->load->view('appointment/issue_appointment',$data);
				}
				else{
					echo "<script>alert('Scheduled appointment should be at least 1 day after the current date.');</script>";
					echo "<script>window.location='".base_url()."calendar/display'</script>";
				}
			}else{
				echo "<script>alert('Clinic is closed on Sundays.');</script>";
				echo "<script>window.location='".base_url()."calendar/display'</script>";
			}
		}else{
			echo "<script>alert('Invalid date.');</script>";
			echo "<script>window.location='".base_url()."calendar/display'</script>";
		}
		
	}

	public function view_appointment_by_date(){
		if($this->session->userdata('username')){
			$data['dates'] = $this->appointment_model->get_appointment_dates();
			$ctr = -1;
			$nop = NULL;
			foreach($data['dates'] as $dates){
				$ctr+=1;

				$nop[$ctr]=$this->appointment_model->get_no_reserved($dates->date);
			}
			$data['nop'] = $nop;
			$this->load->view('appointment/list_appointment',$data);
		}
		else{
			echo "<script>alert('Login is required.');</script>";
			echo "<meta http-equiv=Refresh content=0;url='".base_url()."admin>";
		}
	}

	public function view_appointment_by_appno(){
		if($this->session->userdata('username')){
			$data['appno'] = $this->appointment_model->get_appointment_appno();
			$this->load->view('appointment/list_appointment_appno',$data);
		}
		else{
			echo "<script>alert('Login is required.');</script>";
			echo "<meta http-equiv=Refresh content=0;url='".base_url()."admin>";
		}
	}

	public function view_appointment_time($date){
		if($this->session->userdata('username')){
			$data['time_reservations'] = $this->appointment_model->get_appointment_time($date);
			$data['date']=$date;
			if(date('l',strtotime($date))!='Saturday')
				$this->load->view('appointment/weekday_appointment',$data);
			else
				$this->load->view('appointment/weekend_appointment',$data);
		}
		else{
			echo "<script>alert('Login is required.');</script>";
			echo "<meta http-equiv=Refresh content=0;url='".base_url()."admin/>";
		}
	}

	public function arrived_appointment($id){
		if($this->session->userdata('username')){
			$res = $this->appointment_model->arrived_appointment($id);
			echo "<script>alert('Appointment status successfully updated.');</script>";
			echo "<meta http-equiv=Refresh content=0;url='".base_url()."patient/view_patient_profile/".$res->patient_id."'>";
		}
		else{
			echo "<script>alert('Login is required.');</script>";
			echo "<meta http-equiv=Refresh content=0;url='".base_url()."admin/>";
		}
	}

	public function move_appointment(){
		$data = array('date' => $this->input->post('date'),
					  'time' => $this->input->post('time')
					  );
		$this->appointment_model->move_appointment($data,$this->input->post('appointmentnumber'));
		$adate = $this->input->post('adate');
		if($this->session->userdata('username')){
			echo "<script>alert('Appointment booking successfully rescheduled.');</script>";
			echo "<meta http-equiv=Refresh content=0;url='".base_url()."appointment/view_appointment_by_date>";
		}
		else{
			echo "<script>alert('Appointment booking successfully rescheduled.');</script>";
			echo "<meta http-equiv=Refresh content=0;url='".base_url()."calendar/display>";
		}
	}

	public function cancel_appointment($date,$id){
		if($this->session->userdata('username')){
			$this->appointment_model->cancel_appointment($id);
			echo "<script>alert('Appointment booking successfully removed.');</script>";
			if($date == 0)
				echo "<meta http-equiv=Refresh content=0;url='".base_url()."appointment/view_appointment_by_appno/>";
			else
				echo "<meta http-equiv=Refresh content=0;url='".base_url()."appointment/view_appointment_by_date>";
		}
		else{
			echo "<script>alert('Login is required.');</script>";
			echo "<meta http-equiv=Refresh content=0;url='".base_url()."admin>";
		}
	}

	public function cancel_appointment_byappno(){
		
		$this->appointment_model->cancel_appointment_byappno($this->input->post('appointmentnumber'));
		echo "<script>alert('Appointment booking successfully removed.');</script>";	
		echo "<meta http-equiv=Refresh content=0;url='".base_url()."calendar/display>";
		
	}

	public function appointment_info(){
	        $data['info']=$this->appointment_model->get_appointment_details($this->input->post('appointmentno',TRUE));
	        
	       $output = null;
	        foreach ($data['info'] as $info){
	            $output .= "<input id='atime' type='hidden' name='atime' value='".$info->time."'/><input id='adate' type='hidden' name='adate' value=".$info->date." />";
	        }
	        echo  $output;
	}

	public function reschedule_appointment($id=NULL){
		if(isset($id)){
			$data['info'] = $this->appointment_model->get_appointment_info($id);
			$data['check'] = 1;
			$this->load->view('appointment/reschedule_appointment',$data);
		}
		else{
			$data['check'] = 0;
			$this->load->view('appointment/reschedule_appointment',$data);
		}
	}

	public function confirm_appointment(){
			$code = "";			
			$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";	

			$size = strlen($chars);
			for($i = 0; $i<5; $i++) {
				$code .= $chars[ rand( 0, $size - 1 ) ];
			}

			if($this->input->post('opatient-usrname')=='' && $this->input->post('uname')==''){
				echo "<script>window.onload=function goBack()  {  window.history.back()  }</script>";
			}
			else{
				$data = array('oldusername' => mysql_real_escape_string($this->input->post('opatient-usrname')),
							  'newusername' => mysql_real_escape_string($this->input->post('uname')),
							  'firstname' =>  ucwords(mysql_real_escape_string($this->input->post('fname'))),
							  'lastname' => ucwords(mysql_real_escape_string($this->input->post('lname'))),
							  'middlename' => ucwords(mysql_real_escape_string($this->input->post('mname'))),
							  'birthdate' => mysql_real_escape_string($this->input->post('bdate')),
							  'gender' => mysql_real_escape_string($this->input->post('gender')),
							  'age' => mysql_real_escape_string($this->input->post('age')),
							  'email' => $this->input->post('email'),
							  'mobileno' => mysql_real_escape_string($this->input->post('cnum')),
						      'date' => mysql_real_escape_string($this->input->post('date')),
							  'time' => mysql_real_escape_string($this->input->post('time')),
							  'nreason' => mysql_real_escape_string($this->input->post('nreason')),
							  'oreason' => mysql_real_escape_string($this->input->post('oreason')),
							  'code' => md5($code),
							  'testcode' => $code
							);
				$message = "Gayatin Dental Clinic: This is your appointment code for confirming your appointment: ".$code.", enter the code to continue. Thank you.";
				$this->load->view('appointment/confirm_appointment',$data);
				if(!$this->session->userdata('username')){
					if($data['newusername']==''){
						$pinfo= $this->patient_model->get_patient_emailbyuname($data['oldusername']);
							$this->appointment_model->send_email($pinfo->email,$message);
							$dump=$this->appointment_model->send_sms("APINVD2126X89","APINVD2126X89NVD21","msun",$pinfo->mobileno,$message);
					}
					else{
						$this->appointment_model->send_email($data['email'],$message);
						$dump=$this->appointment_model->send_sms("APINVD2126X89","APINVD2126X89NVD21","msun",$data['mobileno'],$message);
					}
				}
			}

	}

	public function add_appointment(){

		$appointmentno="";
		$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
		$size = strlen($chars);
		$trap=1;
		while($trap == 1){
			for($i = 0; $i<8; $i++) 
				$appointmentno .= $chars[ rand( 0, $size - 1 ) ];
			$trap = $this->appointment_model->check_appointmentno($appointmentno);
		}

		if($this->input->post('firstname')==''){
			$chk = $this->patient_model->check_username($this->input->post('oldusername'));

			if($chk==1){
				$chck = $this->appointment_model->check_duplicate_appointment($this->input->post('oldusername'),$this->input->post('date'));
				if($chck!=1){
					$data = array('username' => mysql_real_escape_string($this->input->post('oldusername')),
								  'appointmentno' => $appointmentno,
								  'reason' => mysql_real_escape_string($this->input->post('oreason')),
								  'date' => mysql_real_escape_string($this->input->post('date')),
								  'time' => mysql_real_escape_string($this->input->post('time')),
								 'status' => 'Confirmed'
							);
					$pinfo= $this->patient_model->get_patient_emailbyuname($data['username']);
					$this->appointment_model->add_appointment($data);
					$message = "Gayatin Dental Clinic: Your appointment booking on ".date('j F Y',strtotime($data['date']))." at ".$data['time']." is successful, your appointment code is: ".$appointmentno.". You will use this code to reschedule or cancel your appointment. Please come on time. Thank you.";
					$this->appointment_model->send_email($pinfo->email,$message);
					$dump=$this->appointment_model->send_sms("APINVD2126X89","APINVD2126X89NVD21","msun",$pinfo->mobileno,$message);
					echo "<script>alert('Your appointment booking is successful, please check your phone or email for your appointment code. Please save the code because it will be used to reschedule or cancel your appointment. Thank you.');</script>";
					if($this->session->userdata('username')){
						echo "<meta http-equiv=Refresh content=0;url=../appointment/view_appointment_by_date>";
					}
					else{
						echo "<meta http-equiv=Refresh content=0;url=../calendar/display>";
					}
				}
				else{
					echo "<script>alert('You can only book an appointment once per day.');</script>";
					echo "<meta http-equiv=Refresh content=0;url=../calendar/display>";
				}
			}
			else{
				echo "<script>alert('Username does not exist.');</script>";
				echo "<script>window.onload=function goBack()  {  window.history.back()  }</script>";
			}

			
		}else{

			$data = array('username' =>  mysql_real_escape_string($this->input->post('newusername')),
						  'appointmentno' => $appointmentno,
						  'reason' => mysql_real_escape_string($this->input->post('nreason')),
						  'date' => mysql_real_escape_string($this->input->post('date')),
						  'time' => mysql_real_escape_string($this->input->post('time')),
						  'status' => 'Confirmed'
					);
			$b = new DateTime($this->input->post('birthdate'));
			$t = new DateTime('today');
			$pdata = array('username' => mysql_real_escape_string($this->input->post('newusername')),
						  'firstname' => ucwords(mysql_real_escape_string($this->input->post('firstname'))),
						  'lastname' => ucwords(mysql_real_escape_string($this->input->post('lastname'))),
						  'middlename' => ucwords(mysql_real_escape_string($this->input->post('middlename'))),
						  'birthdate' => mysql_real_escape_string($this->input->post('birthdate')),
						  'gender' => mysql_real_escape_string($this->input->post('gender')),
						  'age' => $b->diff($t)->y,
						  'email' => $this->input->post('email'),
						  'mobileno' => mysql_real_escape_string($this->input->post('mobileno')),
						  'datecreated' => date("Y-m-d H:i:s"),
						  'datemodified' => date("Y-m-d H:i:s")
					); 

			$chk = $this->patient_model->check_patient($pdata['firstname'],$pdata['lastname'],$pdata['middlename']);
			$chck = $this->patient_model->check_username($this->input->post('newusername'));
			$check = $this->appointment_model->check_duplicate_appointment($this->input->post('newusername'),$this->input->post('date'));

			if($chk == 0 && $chck == 0){
				if($check == 0){
					$this->patient_model->add_patient($pdata);
					$this->appointment_model->add_appointment($data);
					$message = "Gayatin Dental Clinic: Your appointment booking on ".date('j F Y',strtotime($data['date']))." at ".$data['time']." is successful, your appointment code is: ".$appointmentno.". You will use this code to reschedule or cancel your appointment. Please come on time. Thank you.";
					$this->appointment_model->send_email($this->input->post('email'),$message);
					$dump=$this->appointment_model->send_sms("APINVD2126X89","APINVD2126X89NVD21","msun",$this->input->post('mobileno'),$message);
					echo "<script>alert('Your appointment booking is successful, please check your phone or email for your appointment code. Please save the code because it will be used to reschedule or cancel your appointment. Thank you.');</script>";
					if($this->session->userdata('username')){
						echo "<meta http-equiv=Refresh content=0;url=../appointment/view_appointment_by_date>";
					}
					else{
						echo "<meta http-equiv=Refresh content=0;url=../calendar/display>";
					}
				}else{
					echo "<script>alert('You can only book an appointment once per day.');</script>";
					echo "<meta http-equiv=Refresh content=0;url=../calendar/display>";
				}
			}else{
				echo "<script>alert('Sorry, username/patient already exists.');</script>";
				echo "<script>window.onload=function goBack()  {  window.history.back()  }</script>";
			}

			
		}
	}

	public function check_duplicate_appointment(){
		$d=$this->appointment_model->check_duplicate_appointment($this->input->get("username",true),$this->input->get("date",true));
		echo json_encode($d);
	}

	public function check_duplicate_appointmentno(){
		$d=$this->appointment_model->check_duplicate_appointmentno($this->input->get("appointmentno",true));
		echo json_encode($d);
	}

	public function check_appointmentno(){
		$d=$this->appointment_model->check_appointmentno($this->input->get("appointmentno",true));
		echo json_encode($d);
	}

}
?>