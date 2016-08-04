<?php  
	Class Payment extends CI_Controller {

		public function __construct(){
			parent::__construct();
			$this->load->model('calendar_model');
			$this->load->model('appointment_model');
			$this->load->model('patient_model');
			$this->load->model('treatment_model');
			$this->load->model('payment_model');
			date_default_timezone_set('Asia/Manila');
		}

		public function add_payment(){
			$totbal = $this->input->post('totalbalance') - $this->input->post('amount');
			$paymentdata = array('patient_id'=>mysql_real_escape_string($this->input->post('pid')),
						  'type'=>'Balance Payment',
						  'date'=>date("Y-m-d"),
						  'paid_to'=>$this->session->userdata('firstname'),
						  'old_balance'=>mysql_real_escape_string($this->input->post('totalbalance')),
						  'payment'=>mysql_real_escape_string($this->input->post('amount')),
						  'new_balance'=>$totbal);
			$this->payment_model->add_payment($paymentdata);
			$ndata = array('total_balance'=>$totbal);
			$this->treatment_model->update_patient($this->input->post('pid'),$ndata);
			echo "<meta http-equiv=Refresh content=0;url=../patient/view_patient_profile/".$this->input->post('pid').">";
		}

		public function payment_history($id){
			if($this->session->userdata('username')){
				$data['paymentdata'] = $this->payment_model->get_payment_data($id);
				$data['prof'] = $this->patient_model->get_patient_infobyid($id);
				$this->load->view('payment/payment_history',$data);
			}
			else{
				echo "<script>alert('Login is required.');</script>";
				echo "<meta http-equiv=Refresh content=0;url='".base_url()."admin>";
			}
		}

	}
?>