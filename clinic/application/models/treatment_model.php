<?php
class Treatment_model extends CI_Model{

	public function get_services($type){
		$this->db->where('procedure_type',$type);
		$q = $this->db->get('services');
		return $q->result();
	}

	public function get_price($name){
		$this->db->where('dental_procedure',$name);
		$q = $this->db->get('services');
		return $q->row();
	}

	public function get_old_data($pid){
		$this->db->where('patient_id',$pid);
		$q = $this->db->get('patients');
		return $q->row();
	}

	public function get_patient_treatment($id){
		$this->db->where('patient_id',$id);
		$q=$this->db->get('treatment');
		return $q->result();
	}

	public function get_treatment($id){
		$this->db->where('id',$id);
		$q = $this->db->get('treatment');
		return $q->row();
	}

	public function get_tooth_treatment($tid,$tno){
		$this->db->where(array('treatment_id'=>$tid,'toothno'=>$tno));
		$q = $this->db->get('treatment_record');
		return $q->result();
	}

	public function get_treatment_record($id){
		$this->db->where('treatment_id',$id);
		$q = $this->db->get('treatment_record');
		return $q->result();
	}

	public function get_transaction($id){
		$this->db->where('treatment_id',$id);
		$q = $this->db->get('transaction');
		return $q->row();
	}

	public function add_treatment($data){
		$this->db->where('patient_id',$data['patient_id']);
		$arr = array('datemodified'=>date('Y-m-d'),
					 'lastmodifiedby'=>$this->session->userdata('firstname'));
		$this->db->update('patients',$arr);
		$this->db->insert('treatment',$data);
		return $this->db->insert_id();
	}

	public function insert_treatment_record($data){
		$this->db->insert('treatment_record',$data);
	}

	public function insert_transaction($data){
		$this->db->insert('transaction',$data);
	}

	public function update_patient($id,$data){
		$this->db->where('patient_id',$id);
		$this->db->update('patients',$data);		
	}

}
?>