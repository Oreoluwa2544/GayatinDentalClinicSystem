<?php
class Admin extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('main_model');
		date_default_timezone_set('Asia/Manila');
	}
	// LOGIN VIEW
	public function index(){
		if(!$this->session->userdata('username')){
		$data['message']='';
		$this->load->view('main/login',$data);
		}
		else{
			redirect('main');
		}
	}
	// LOGIN FUNCTION
	public function login(){
		if($this->session->userdata('username')){
			redirect('main');
		}
		else if(!$this->session->userdata('username') && $this->input->post('user')){
		$user=$this->input->post('user');
		$pass=md5($this->input->post('pass'));
		$result=$this->main_model->login_check($user,$pass);
			if(!empty($result)){
				$this->session->set_userdata('username',$user);
				$this->session->set_userdata('firstname',$result['firstname']);
				$this->session->set_userdata('id',$result['user_id']);
				if($result['type']==2)
					$this->session->set_userdata('handler',$result['type']);
				redirect('appointment/view_appointment_by_date');
			}
			else{
				$data['message']='Invalid username or password.';
				$this->load->view('main/login',$data);
			}
		}
		else{
			redirect('admin');
		}
	}
	// CHECK IF USERNAME AND PASSWORD MATCH
	public function check_login(){
		$d=$this->main_model->check_login($this->input->get("username",true),$this->input->get("password",true));
		echo json_encode($d);
	}
	// LOGOUT FUNTION
	public function logout(){
		$this->session->sess_destroy();
		redirect('main');
	}
	// CHANGE PASSWORD VIEW
	public function change_password($id){
		if($this->session->userdata('username')){
			$data['id']=$id;
			$this->load->view('user/change_password',$data);
		}
		else{
			echo "<script>alert('Login is required.');</script>";
			echo "<meta http-equiv=Refresh content=0;url=../admin>";
		}
	}
	// CHECK IF INPUTTED PASSWORD IS CORRECT
	public function check_password(){
		$d=$this->main_model->check_password($this->input->get("password",true),$this->input->get("userid",true));
		echo json_encode($d);
	}
	// CHANGE PASSWORD FUNCTION
	public function update_password(){
		if($this->session->userdata('username')){
				$uid = $this->input->post('staffid');
				$op = $this->input->post('old_password');
				$chk = $this->main_model->check_password($op,$uid);
				if($chk == 1){ 
								$pass = mysql_real_escape_string($this->input->post('password'));
								$cpass = mysql_real_escape_string($this->input->post('confirm_password'));
								if($pass == $cpass){
									$data = array('password'=>md5($pass));
									$this->main_model->update_password($data,$uid);
									echo "<script>alert('Successfully updated password.');</script>";
									echo "<script>window.onload=function goBack()  {  window.history.back()  }</script>";
								}else{
									echo "<script>alert('Password/confirm password does not match.');</script>";
									echo "<script>window.onload=function goBack()  {  window.history.back()  }</script>";
								}
				}
				else{
					echo "<script>alert('Please input your correct password .');</script>";
					echo "<script>window.onload=function goBack()  {  window.history.back()  }</script>";
				}
			
		}
		else{
			echo "<script>alert('Login is required.');</script>";
			echo "<meta http-equiv=Refresh content=0;url=../admin>";
		}
	}
	// DASHBOARD VIEW
	public function dashboard(){
		if($this->session->userdata('username')){
			$this->load->view('user/dashboard');
		}
		else{
			echo "<meta http-equiv=Refresh content=0;url=../main>";
		}

	}
	// STAFF LIST VIEW
	public function view_staffs(){
		if($this->session->userdata('username')){
			if($this->session->userdata('handler')){
				$data['staff'] = $this->main_model->get_accounts($this->session->userdata('id'));
				$this->load->view('user/view_accounts',$data);
			}else{
				echo "<script>alert('Forbidden access.');</script>";
				echo "<script>window.onload=function goBack()  {  window.history.back()  }</script>";
			}
		}else{
			echo "<script>alert('Login is required.');</script>";
			echo "<meta http-equiv=Refresh content=0;url=../admin>";
		}
	}
	// ADD STAFF VIEW
	public function add_staff()
	{
		if($this->session->userdata('username')){
			if($this->session->userdata('handler')){
				$this->load->view('user/create_account');
			}else{
				echo "<script>alert('Forbidden access.');</script>";
				echo "<script>window.onload=function goBack()  {  window.history.back()  }</script>";
			}
		}else{
			echo "<script>alert('Login is required.');</script>";
			echo "<meta http-equiv=Refresh content=0;url=../admin>";
		}
	}
	// CHECK IF USERNAME ALREADY EXISTS
	public function check_username(){
		$d=$this->main_model->check_username($this->input->get("username",true));
		echo json_encode($d);
	}
	// CHECK IF STAFF ALREADY HAVE AN ACCOUNT
	public function check_staff(){
		$d=$this->main_model->check_staff($this->input->get("firstname",true), $this->input->get("middlename",true), $this->input->get("lastname",true));
		echo json_encode($d);
	}
	// CREATE ACCOUNT FUNCTION
	public function create_account(){
		if($this->session->userdata('username')){
			if($this->session->userdata('handler') && $this->input->post("fname")!=""){
					$data =  array('firstname' => ucwords(mysql_real_escape_string($this->input->post("fname"))),
							'middlename' => ucwords(mysql_real_escape_string($this->input->post("mname"))), 
							'lastname' => ucwords(mysql_real_escape_string($this->input->post("lname"))),
							'username' => mysql_real_escape_string($this->input->post("username")),
							'password' => md5("password"),
							'type' => mysql_real_escape_string($this->input->post("type"))
							); 
					$chk = $this->main_model->check_staff(ucwords(mysql_real_escape_string($this->input->post("fname"))), ucwords(mysql_real_escape_string($this->input->post("mname"))), ucwords(mysql_real_escape_string($this->input->post("lname"))));
					$chck = $this->main_model->check_username($this->input->post('username'));
					if($chk == 0){ 
						if($chck==0){
							$id = $this->main_model->add_user($data);
							echo "<script>alert('Successfully added user.');</script>";
							echo "<meta http-equiv=Refresh content=0;url=../admin/view_staffs>";
						}else{
							echo "<script>alert('Username already exists.');</script>";
							echo "<script>window.onload=function goBack()  {  window.history.back()  }</script>";		
						}
					}else{
						echo "<script>alert('Duplicate data.');</script>";
						echo "<script>window.onload=function goBack()  {  window.history.back()  }</script>";
					}
			}else if($this->session->userdata('handler') && $this->input->post("fname")==""){
				redirect('admin/add_staff');
			}else{
				echo "<script>alert('Forbidden access.');</script>";
				echo "<script>window.onload=function goBack()  {  window.history.back()  }</script>";
			}
		}else{
			echo "<script>alert('Login is required.');</script>";
			echo "<meta http-equiv=Refresh content=0;url=../admin>";
		}
	}
	// RESET PASSWORD FUNCTION
	public function reset_password($id){
		if($this->session->userdata('username')){
			if($this->session->userdata('handler')){
				$data = array('password'=>md5("password"));
				$this->main_model->update_password($data,$id);
				echo "<script>alert('Reset password successful.');</script>";
				echo "<script>window.location='".base_url()."admin/view_staffs'</script>";
			}
			else{
				echo "<script>alert('Forbidden access.');</script>";
				echo "<script>window.onload=function goBack()  {  window.history.back()  }</script>";
			}	
		}
		else{
			echo "<script>alert('Login is required.');</script>";
			echo "<meta http-equiv=Refresh content=0;url='".base_url()."admin>";
		}
	}
	// DELETE STAFF FUNCTION
	public function delete_staff($id){
		if($this->session->userdata('username')){
			if($this->session->userdata('handler')){
				$this->main_model->delete_staff($id);
				echo "<script>alert('Successfully deleted user.');</script>";
				echo "<script>window.location='".base_url()."admin/view_staffs'</script>";
			}
			else{
				echo "<script>alert('Forbidden access.');</script>";
				echo "<script>window.onload=function goBack()  {  window.history.back()  }</script>";
			}	
		}
		else{
			echo "<script>alert('Login is required.');</script>";
			echo "<meta http-equiv=Refresh content=0;url='".base_url()."admin>";
		}
   	}

}
?>