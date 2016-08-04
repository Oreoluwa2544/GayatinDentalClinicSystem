<?php
class Main_model extends CI_Model{

	public function get_general_services(){
		$this->db->where('type','General');
		$query = $this->db->get('services');
		return $query->result();
	}

	public function get_restorative_services(){
		$this->db->where('type','Restorative Dentistry');
		$query = $this->db->get('services');
		return $query->result();
	}

	public function get_endodontic_services(){
		$this->db->where('type','Endodontic Dentistry');
		$query = $this->db->get('services');
		return $query->result();
	}

	public function get_orthodontic_services(){
		$this->db->where('type','Orthodontic Dentistry');
		$query = $this->db->get('services');
		return $query->result();
	}

	public function get_prostodontic_services(){
		$this->db->where('type','Prostodontic Dentistry');
		$query = $this->db->get('services');
		return $query->result();
	}

	public function login_check($user,$pass){
		$this->db->where('username',$user);
		$this->db->where('password',$pass);
		$res=$this->db->get('users');
		return $res->row_array();
	}

	public function check_login($user,$pass){
		$this->db->where('username',$user);
		$this->db->where('password',md5($pass));
		$res=$this->db->get('users');
		if($res->num_rows()>0){
			return 1;
		}
		else{
			return 0;
		}
	}

	public function check_password($pass,$uid){
		$this->db->where('user_id',$uid);
		$this->db->where('password',md5($pass));
		$res=$this->db->get('users');
		if($res->num_rows()>0){
			return 1;
		}
		else{
			return 0;
		}
	}

	public function update_password($data,$id){
		$this->db->where('user_id',$id);
		$this->db->update('users',$data);
	}

	public function get_accounts($id){
		$res = $this->db->query("SELECT * FROM (`users`) WHERE `user_id` != $id");
		return $res->result();
	}

	public function get_dentists(){
		$this->db->where('type',0);
		$query = $this->db->get('users');
		return $query->result();
	}

	public function check_username($username){
		$this->db->where('username',$username);
		$res=$this->db->get('users');
		if($res->num_rows()>0){
			return 1;
		}
		else{
			return 0;
		}
	}

	public function check_staff($fname,$mname,$lname){
		$this->db->where(array('firstname'=>$fname, 'middlename'=>$mname, 'lastname'=>$lname));
		$query = $this->db->get('users');
		if($query->num_rows()>0){
			return 1;
		}
		else{
			return 0;
		}
	}

	public function add_user($data){
		$this->db->insert('users',$data);
	}

	public function delete_staff($id){
		$this->db->where('user_id',$id);
		$this->db->delete('users');
	}

}
?>