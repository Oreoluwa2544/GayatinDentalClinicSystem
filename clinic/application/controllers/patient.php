<?php
class Patient extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('main_model');
		$this->load->model('patient_model');
		date_default_timezone_set('Asia/Manila');

	}
	// PATIENT LIST VIEW
	public function view_patients(){
		if($this->session->userdata('username')){
		$data['profile']=$this->patient_model->get_profile();
		$this->load->view('patient/patient_list',$data);
		}
		else{
			echo "<script>alert('Login is required.');</script>";
			echo "<meta http-equiv=Refresh content=0;url=../admin>";
		}
		
	}
	// PATIENT PROFILE VIEW
	public function view_patient_profile($id){
		if($this->session->userdata('username')){
		$data['profile']=$this->patient_model->get_profile_info($id);
		$data['allergies']=$this->patient_model->get_allergy_info($id);
		$data['chronicailment']=$this->patient_model->get_chronicailments_info($id);
		$data['drugstaken']=$this->patient_model->get_drugstaken_info($id);
		$this->load->view('patient/patient_profile',$data);
		}
		else{
			echo "<script>alert('Login is required.');</script>";
			echo "<meta http-equiv=Refresh content=0;url='".base_url()."admin>";
		}
	}
	// PATIENT'S TEETH PROFILE VIEW
	public function view_teethprofile($id){
		if($this->session->userdata('username')){
			$data['info'] = $this->patient_model->get_patient_infobyid($id);
			$data['teeth'] = $this->patient_model->get_teeth_info($id);
			$this->load->view('patient/teeth_profile',$data);
		}else{
			echo "<script>alert('Login is required.');</script>";
			echo "<meta http-equiv=Refresh content=0;url='".base_url()."admin>";
		}
	}
	// CHECKS THE FINDINGS OF THE TOOTH
	public function teeth_findings(){
	        $data['finding']=$this->patient_model->get_findings($this->input->post('pid',TRUE),$this->input->post('tno',TRUE),$this->input->post('surface',TRUE));
	        
	       $output = null;
	        foreach ($data['finding'] as $finding){
	            $output .="<tr class='text-center'><td>".$finding->note."</td><td>".date('F j, Y || h:m:s a',strtotime($finding->dateupdated))."</td></tr>";
	        }
	        echo  $output;
	}
	// ADD FINDINGS OF THE TOOTH
	public function add_teeth_info(){
		if($this->session->userdata('username')){
			$data = array('dateupdated'=>date("Y-m-d H:i:s"),
						  'dentistincharge'=>$this->session->userdata('firstname'),
						  'patient_id'=>$this->input->post('pid'),
						  'toothno'=>$this->input->post('no'),
						  'toothsurface'=>$this->input->post('surface'),
						  'note'=>$this->input->post('note'));
			$this->patient_model->add_teeth_info($data);
			echo "<meta http-equiv=Refresh content=0;url=../patient/view_teethprofile/".$this->input->post('pid').">";
		}else{
			echo "<script>alert('Login is required.');</script>";
			echo "<meta http-equiv=Refresh content=0;url=../admin>";
		}
	}
	// ADD PATIENT VIEW
	public function add_patient(){
		if($this->session->userdata('username')){
		$data['message']='';
		$this->load->view('patient/add_patient',$data);
		}
		else{
			echo "<script>alert('Login is required.');</script>";
			echo "<meta http-equiv=Refresh content=0;url=../admin>";
		}
	}
	// EDIT PATIENT VIEW
	public function edit_patient($id){
		if($this->session->userdata('username')){
		$data['message']='';
		$data['profile']=$this->patient_model->get_profile_info($id);
		$data['allergies']=$this->patient_model->get_allergy_info($id);
		$data['chronicailment']=$this->patient_model->get_chronicailments_info($id);
		$data['drugstaken']=$this->patient_model->get_drugstaken_info($id);
		$this->load->view('patient/edit_patient',$data);
		}
		else{
			echo "<script>alert('Login is required.');</script>";
			echo "<meta http-equiv=Refresh content=0;url='".base_url()."admin>";
		}
	}
	// CHECKS IF USERNAME ALREADY EXISTS
	public function check_username(){
		$d=$this->patient_model->check_username($this->input->get("username",true));
		echo json_encode($d);
	}
	// CHECKS IF USERNAME ALREADY EXISTS
	public function check_new_username(){
		$d=$this->patient_model->check_new_username($this->input->get("username",true),$this->input->get("pid",true));
		echo json_encode($d);
	}
	// CHECK IF PATIENT ALREADY EXISTS
	public function check_patient(){
		$d=$this->patient_model->check_patient($this->input->get("firstname",true),$this->input->get("lastname",true),$this->input->get("middlename",true));
		echo json_encode($d);
	}
	// CREATE PATIENT FUNCTION
	public function create_patient(){
		if($this->session->userdata('username') && $this->input->post("fname")!=""){	
			$b = new DateTime($this->input->post('bdate'));
			$t = new DateTime('today');

			$data =  array('username' => mysql_real_escape_string($this->input->post("uname")),
			'firstname' => ucwords(mysql_real_escape_string($this->input->post("fname"))), 
			'lastname' => ucwords(mysql_real_escape_string($this->input->post("lname"))),
			'middlename' => ucwords(mysql_real_escape_string($this->input->post("mname"))),
			'birthdate' => mysql_real_escape_string($this->input->post("bdate")),
			'age' => $b->diff($t)->y,
			'email' => mysql_real_escape_string($this->input->post("email")),
			'gender' => mysql_real_escape_string($this->input->post("gender")),
			'address' => ucwords(mysql_real_escape_string($this->input->post("hadd"))),
			'telno' => mysql_real_escape_string($this->input->post("htno")),
			'mobileno' => mysql_real_escape_string($this->input->post("mno")),
			'maritalstatus' => mysql_real_escape_string($this->input->post("mstat")),
			'officeaddress' => ucwords(mysql_real_escape_string($this->input->post("oadd"))),
			'officetelno' => mysql_real_escape_string($this->input->post("otno")),
			'occlusion' => mysql_real_escape_string($this->input->post("occ")),
			'periodontalcondition' => mysql_real_escape_string($this->input->post("perdon")),
			'oralhygiene' => mysql_real_escape_string($this->input->post("orhy")),
			'prevhistoryofbleeding' => mysql_real_escape_string($this->input->post("phb")),
			'bloodpressure' => mysql_real_escape_string($this->input->post("bp")),
			'createdby' => $this->session->userdata('firstname'),
			'lastmodifiedby' => $this->session->userdata('firstname'),
			'datecreated' => date("Y-m-d H:i:s"),
			'datemodified' => date("Y-m-d H:i:s")
			);
			if($this->input->post('usince')!=''){
				$data['upper_denture'] = 'Yes';
				$data['upper_since'] = mysql_real_escape_string($this->input->post('usince'));
			}
			if($this->input->post('lsince')!=''){
				$data['lower_denture'] = 'Yes';
				$data['lower_since'] = mysql_real_escape_string($this->input->post('lsince'));
			}

			$chk = $this->patient_model->check_patient($data['firstname'],$data['lastname'],$data['middlename']);
			$chck = $this->patient_model->check_username($data['username']);
			if($chk == 0 && $chck == 0){
				$id = $this->patient_model->add_patient($data);

				if($this->input->post('aal'))
				{
					foreach($this->input->post('aal') as $ccnt => $ctr) 
					{
						$aal = array(
									'patient_id' => $id,
									'allergyname' => $this->input->post("aal")[$ccnt],
									'dateadded' => date("Y-m-d H:i:s")
									);
						$this->patient_model->add_allergies($aal);
					}
				}

				if($this->input->post('aca'))
				{
					foreach($this->input->post('aca') as $ccnt => $ctr) 
					{
						$aca = array(
									'patient_id' => $id,
									'chronicailmentname' => $this->input->post("aca")[$ccnt],
									'dateadded' => date("Y-m-d H:i:s")
									);
						$this->patient_model->add_chronicailment($aca);
					}
				}

				if($this->input->post('adt'))
				{
					foreach($this->input->post('adt') as $ccnt => $ctr) 
					{
						$adt = array(
									'patient_id' => $id,
									'drugname' => $this->input->post("adt")[$ccnt],
									'dateadded' => date("Y-m-d H:i:s")
									);
						$this->patient_model->add_drugstaken($adt);
					}
				}
				echo "<script>alert('Successfully added.');</script>";
				redirect('patient/view_patients');
			}
			else{
				echo "<script>alert('Duplicate data / username already exists.');</script>";
				echo "<script>window.onload=function goBack()  {  window.history.back()  }</script>";
			}
		}
		else if($this->session->userdata('username') && $this->input->post("fname")==""){
			redirect('patient/add_patient');
		}
		else{
			echo "<script>alert('Login is required.');</script>";
			echo "<meta http-equiv=Refresh content=0;url=../admin>";
		}
		
	}
	// UPDATE PATIENT PROFILE FUNCTION
	public function update_patient(){
		if($this->session->userdata('username')){
			$pid = $this->input->post("profid");
			$cctr = $this->input->post("cctr");
			$rctr = $this->input->post("rctr");
			$actr = $this->input->post("actr");
			$data =  array('username' => mysql_real_escape_string($this->input->post("uname")),
			'email' => mysql_real_escape_string($this->input->post("email")),
			'address' => ucwords(mysql_real_escape_string($this->input->post("hadd"))),
			'telno' => mysql_real_escape_string($this->input->post("htno")),
			'mobileno' => mysql_real_escape_string($this->input->post("mno")),
			'maritalstatus' => mysql_real_escape_string($this->input->post("mstat")),
			'officeaddress' => ucwords(mysql_real_escape_string($this->input->post("oadd"))),
			'officetelno' => mysql_real_escape_string($this->input->post("otno")),
			'occlusion' => mysql_real_escape_string($this->input->post("occ")),
			'periodontalcondition' => mysql_real_escape_string($this->input->post("perdon")),
			'oralhygiene' => mysql_real_escape_string($this->input->post("orhy")),
			'prevhistoryofbleeding' => mysql_real_escape_string($this->input->post("phb")),
			'bloodpressure' => mysql_real_escape_string($this->input->post("bp")),
			'lastmodifiedby' => $this->session->userdata('firstname'),
			'datemodified' => date("Y-m-d H:i:s")
			);
			if($this->input->post('usince')!=''){
				$data['upper_denture'] = 'Yes';
				$data['upper_since'] = mysql_real_escape_string($this->input->post('usince'));
			}else{
				$data['upper_denture'] = '';
				$data['upper_since'] = '';
			}

			if($this->input->post('lsince')!=''){
				$data['lower_denture'] = 'Yes';
				$data['lower_since'] = mysql_real_escape_string($this->input->post('lsince'));
			}else{
				$data['lower_denture'] = '';
				$data['lower_since'] = '';
			}
				$this->patient_model->update_patient($data,$pid);

				for($i=1;$i<=$actr;$i++){
					$aid = $this->input->post("allergyid".$i);
					if($this->input->post("al".$i)!=""){
						$al = array('allergyname' => $this->input->post("al".$i));
						$this->patient_model->update_allergy($al,$aid);
					}else
						$this->patient_model->remove_allergy($aid);
				}

				for($i=1;$i<=$rctr;$i++){
					$rid = $this->input->post("caid".$i);
					if($this->input->post("ca".$i)!=""){
						$ca = array('chronicailmentname' => $this->input->post("ca".$i));
						$this->patient_model->update_chronicailment($ca,$rid);
					}else
						$this->patient_model->remove_chronicailment($rid);
				}

				for($i=1;$i<=$cctr;$i++){
					$did = $this->input->post("drugid".$i);
					if($this->input->post("dt".$i)!=""){
						$dt = array('drugname' => $this->input->post("dt".$i));
						$this->patient_model->update_drugstaken($dt,$did);
					}else
						$this->patient_model->remove_drugstaken($did);
				}

				if($this->input->post('aal'))
				{
					foreach($this->input->post('aal') as $ccnt => $ctr) 
					{
						$aal = array(
									'patient_id' => $pid,
									'allergyname' => $this->input->post("aal")[$ccnt],
									'dateadded' => date("Y-m-d H:i:s")
									);
						$this->patient_model->add_allergies($aal);
					}
				}

				if($this->input->post('aca'))
				{
					foreach($this->input->post('aca') as $ccnt => $ctr) 
					{
						$aca = array(
									'patient_id' => $pid,
									'chronicailmentname' => $this->input->post("aca")[$ccnt],
									'dateadded' => date("Y-m-d H:i:s")
									);
						$this->patient_model->add_chronicailment($aca);
					}
				}

				if($this->input->post('adt'))
				{
					foreach($this->input->post('adt') as $ccnt => $ctr) 
					{
						$adt = array(
									'patient_id' => $pid,
									'drugname' => $this->input->post("adt")[$ccnt],
									'dateadded' => date("Y-m-d H:i:s")
									);
						$this->patient_model->add_drugstaken($adt);
					}
				}
				echo "<script>alert('Successfully updated profile.');</script>";
				redirect('patient/view_patients');
		}
		else{
			echo "<script>alert('Login is required.');</script>";
			echo "<meta http-equiv=Refresh content=0;url=../admin>";
		}
		
	}

}
?>