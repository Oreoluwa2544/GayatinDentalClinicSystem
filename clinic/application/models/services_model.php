<?php
class Services_model extends CI_Model{
	// getting the list of clinic services
	public function get_services(){
		$res = $this->db->get('services');
		return $res->result();
	}

	// adding a new service
	public function add_service($servicedetails){
		$this->db->insert('services',$servicedetails);
	}

	// update service
	public function update_service($servicedetails,$ser_id){
		$this->db->where("id",$ser_id);
		$this->db->update("services",$servicedetails);
	}
}
?>