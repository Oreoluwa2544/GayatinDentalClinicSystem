<?php
class Appointment_model extends CI_Model{

	public function send_email($email,$message){
	/*	$config = array(
	        'protocol' => 'smtp',
	        'smtp_host' => 'ssl://smtp.googlemail.com',
	        'smtp_port' => 465,
	        'smtp_user' => 'gayatindc@gmail.com',
	        'smtp_pass' => 'gayatin123'
    	);
    	$this->load->library('email',$config);
    	$this->email->set_newline("\r\n");
		$this->email->from('gayatindc@gmail.com','GAYATIN DENTAL CLINIC');
		$this->email->to($email);
		$this->email->subject('Appointment Notification');
		$this->email->message($message);
		$this->email->send();*/
	}

	public function send_sms($user,$pass,$sms_from,$sms_to,$sms_msg){           
    //     $query_string = "api.aspx?apiusername=".$user."&apipassword=".$pass;
    //     $query_string .= "&senderid=".rawurlencode($sms_from)."&mobileno=".rawurlencode($sms_to);
    //     $query_string .= "&message=".rawurlencode(stripslashes($sms_msg)) . "&languagetype=1";        
    //     $url = "http://gateway.onewaysms.com.au:10001/".$query_string; 
    //     $fd =  @implode ('', file ($url));
    //     if ($fd){                       
    // 		if ($fd > 0){
				// $ok = "1";
		  //   }        
		  //   else {
				// $ok = "0";
		  //   }
    //     }           
    //     else{                                           
    //         $ok = "0";       
    //     }           
    //     return $ok;  
    } 
	
	public function get_reserved($date){
		$this->db->where('date',$date);
		$this->db->where('status !=','Cancelled');
		$query = $this->db->get('appointment');
		return $query->result();
	}

	public function get_appointment_dates(){
		$q = $this->db->query('SELECT DISTINCT `date` from `appointment` where `status` != "Cancelled"');
		// $this->db->distinct();
		// $this->db->select('date');
		// $this->db->where('status!=','Cancelled');
		// $q = $this->db->get('appointment');
		return $q->result();
	}

	public function get_appointment_appno(){
		$q = $this->db->query('SELECT * from `appointment` where `status` != "Cancelled"');
		// $this->db->where('status!=','Cancelled');
		// $q = $this->db->get('appointment');
		return $q->result();
	}

	public function get_appointment_info($id){
		$this->db->where('id',$id);
		$query = $this->db->get('appointment');
		return $query->row();
	}

	public function get_name($uname){
		$this->db->where('username',$uname);
		$q = $this->db->get('patients');
		return $q->row();
	}

	public function get_appointment_details($appointmentno){
		$this->db->where('appointmentno',$appointmentno);
		$query = $this->db->get('appointment');
		return $query->result();
	}

	public function get_no_reserved($date){
		//$q = $this->db->query('SELECT * from `appointment` where `date` = $date and `status` != "Cancelled"');
    	$this->db->where('date',$date);
		$this->db->where('status !=','Cancelled');
    	$q = $this->db->get('appointment');
    	return $q->num_rows();
    }

    public function get_appointment_time($date){
		//$q = $this->db->query('SELECT * from `appointment` where `date` = $date and `status` != "Cancelled"');
		$this->db->where('date',$date);
		$this->db->where('status !=','Cancelled');
		$q = $this->db->get('appointment');
		return $q->result();
	}

	public function check_appointmentno($appointmentno){
		$this->db->where('appointmentno',$appointmentno);
		$query = $this->db->get('appointment');
		if($query->num_rows()>0)
			return 1;
		else
			return 0;
	}

	public function check_duplicate_appointment($uname,$date){
		$this->db->where(array('date'=>$date,'username'=>$uname));
		$query = $this->db->get('appointment');
		if($query->num_rows()>0)
			return 1;
		else
			return 0;
	}

	public function add_appointment($data){
		$this->db->insert('appointment',$data);
	}

	public function move_appointment($data,$appointmentno){
		$this->db->where('appointmentno',$appointmentno);
		$this->db->update('appointment',$data);
	}

	public function arrived_appointment($id){
		$data['status'] = 'Served';
		$this->db->where('id',$id);
		$this->db->update('appointment',$data);

		$this->db->where('id',$id);
		$q = $this->db->get('appointment');

		$this->db->where('username',$q->row()->username);
		$query = $this->db->get('patients');
		return $query->row();
	}

	public function cancel_appointment($id){
		$this->db->where('id',$id);
		$this->db->update('appointment',array('status'=>'Cancelled'));
	}

	public function cancel_appointment_byappno($appointmentno){
		$this->db->where('appointmentno',$appointmentno);
		$this->db->update('appointment',array('status'=>'Cancelled'));
	}

}
?>