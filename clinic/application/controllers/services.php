<?php  
Class Services extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('services_model');
		date_default_timezone_set('Asia/Manila');
	}

	// view list of clinic services
	public function view_services(){
	  	if($this->session->userdata('username')){
	  		$data['service'] = $this->services_model->get_services();
	  		$this->load->view('services/services', $data);
	  	}
	  	else{
			echo "<script>alert('Login is required.');</script>";
			echo "<meta http-equiv=Refresh content=0;url='".base_url()."admin>";
		}
	}

	// adding a service
	public function add_service(){
		if($this->session->userdata('username')){
			
			$service_details = array();
			$ctr = 0;
			foreach ($this->input->post("service_details") as $data) {
				$service_details[$ctr] = $data;
				$ctr += 1;				
			}
			
			$servicedetails = array('procedure_type' => mysql_real_escape_string($service_details[0]),
								'type' => mysql_real_escape_string($service_details[1]), 
								'dental_procedure' => ucwords(mysql_real_escape_string($service_details[2])), 
								'service_fee' => mysql_real_escape_string($service_details[3]),
								'createdby' => $this->session->userdata("username"),
								'datecreated' => date("Y-m-d H:i:s"),
								'lastmodifiedby' => $this->session->userdata("username"),
								'datemodified' => date("Y-m-d H:i:s"),
								'status' => 1
							);

			$this->services_model->add_service($servicedetails);
			echo "Successfully added service.";
		}
		else{
			echo "<script>alert('Login is required.');</script>";
			echo "<meta http-equiv=Refresh content=0;url=../cadmin>";
		}
	}	

	// edit a service
	public function update_service(){
		if($this->session->userdata('username')){ 
			$ser_id = $this->input->post("ser-id");
			$servicedetails = array('procedure_type' => mysql_real_escape_string($this->input->post("edit-cat")),
								'type' => mysql_real_escape_string($this->input->post("edit-ct")),
								'dental_procedure' => ucwords(mysql_real_escape_string($this->input->post("edit-name"))), 
								'service_fee' => mysql_real_escape_string($this->input->post("edit-price")),
								'status' => mysql_real_escape_string($this->input->post("edit-stat")),
								'lastmodifiedby' => $this->session->userdata("username"),
								'datemodified' => date("Y-m-d H:i:s")							
						    );
			$this->services_model->update_service($servicedetails,$ser_id);
			echo "<script>alert('Successfully updated service.');</script>";
			redirect('services/view_services');
		}
		else{
			echo "<script>alert('Login is required.');</script>";
			echo "<meta http-equiv=Refresh content=0;url=../cadmin>";
		}
	}
}
?>