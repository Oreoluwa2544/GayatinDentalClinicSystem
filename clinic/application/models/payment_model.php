<?php
class Payment_model extends CI_Model{

	public function add_payment($paymentdata){
		$this->db->insert('payment_history',$paymentdata);
	}

	public function get_payment_data($pid){
		$this->db->where('patient_id',$pid);
		$q = $this->db->get('payment_history');
		return $q->result();
	}

}
?>