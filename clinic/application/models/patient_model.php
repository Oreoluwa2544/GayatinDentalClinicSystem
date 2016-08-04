<?php
class Patient_model extends CI_Model{

	public function get_profile(){
		$res = $this->db->get('patients');
		return $res->result();
	}	

	public function get_profile_info($id){
		$this->db->select('*');
		$this->db->from('patients');
		$this->db->where('patient_id',$id);
		$res = $this->db->get();
		return $res->result();
	}

	public function get_patient_emailbyuname($uname){
		$this->db->where('username',$uname);
		$query=$this->db->get('patients');
		return $query->row();
	}

	public function get_patient_infobyid($id){
		$this->db->where('patient_id',$id);
		$query=$this->db->get('patients');
		return $query->result();
	}

	public function get_teeth_info($id){
		$this->db->where('patient_id',$id);
		$q = $this->db->get('teethprofile');
		return $q->result();
	}

	public function get_allergy_info($id){
		$this->db->select('*');
		$this->db->from('allergies');
		$this->db->where('patient_id',$id);
		$res = $this->db->get();
		return $res->result();
	}

	public function get_drugstaken_info($id){
		$this->db->select('*');
		$this->db->from('drugstaken');
		$this->db->where('patient_id',$id);
		$res = $this->db->get();
		return $res->result();
	}

	public function get_chronicailments_info($id){
		$this->db->select('*');
		$this->db->from('chronicailments');
		$this->db->where('patient_id',$id);
		$res = $this->db->get();
		return $res->result();
	}

	public function get_findings($pid,$tno,$surface){
		$this->db->where(array('patient_id'=>$pid,'toothno'=>$tno,'toothsurface'=>$surface));
		$q = $this->db->get('teethprofile');
		return $q->result();
	}

	public function check_patient($firstname,$lastname,$middlename){
		$this->db->where(array('firstname'=>$firstname, 'lastname'=>$lastname, 'middlename'=>$middlename));
		$query = $this->db->get('patients');
		if($query->num_rows()>0){
			return 1;
		}
		else{
			return 0;
		}
	}

	public function check_username($username){
		$this->db->where('username',$username);
		$query = $this->db->get('patients');
		if($query->num_rows()>0){
			return 1;
		}
		else{
			return 0;
		}
	}

	public function check_new_username($username,$pid){
		$query = $this->db->query("SELECT * FROM (`patients`) WHERE `patient_id` != $pid AND `username` = '$username'");
		if($query->num_rows()>0){
			return 1;
		}
		else{
			return 0;
		}
	}

	public function add_teeth_info($data){
		$this->db->insert('teethprofile',$data);
	}

	public function add_patient($data){
		$this->db->insert('patients',$data);
		return $this->db->insert_id();
	}

	public function add_allergies($data){
		$this->db->insert('allergies',$data);
	}

	public function add_drugstaken($data){
		$this->db->insert('drugstaken',$data);
	}

	public function add_chronicailment($data){
		$this->db->insert('chronicailments',$data);
	}

	public function update_patient($data,$id){
		$this->db->where("patient_id",$id);
		$this->db->update("patients",$data);
	}

	public function update_allergy($data,$id){
		$this->db->where("id",$id);
		$this->db->update("allergies",$data);
	}

	public function update_drugstaken($data,$id){
		$this->db->where("id",$id);
		$this->db->update("drugstaken",$data);
	}

	public function update_chronicailment($data,$id){
		$this->db->where("id",$id);
		$this->db->update("chronicailments",$data);
	}

	public function remove_allergy($id){
		$this->db->where("id",$id);
		$this->db->delete("allergies");
	}

	public function remove_chronicailment($id){
		$this->db->where("id",$id);
		$this->db->delete("chronicailments");
	}

	public function remove_drugstaken($id){
		$this->db->where("id",$id);
		$this->db->delete("drugstaken");
	}

}
?>