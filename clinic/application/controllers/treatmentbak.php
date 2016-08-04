<?php  
	Class Treatment extends CI_Controller {

		public function __construct(){
			parent::__construct();
			$this->load->model('calendar_model');
			$this->load->model('appointment_model');
			$this->load->model('patient_model');
			$this->load->model('treatment_model');
			date_default_timezone_set('Asia/Manila');
		}

		public function new_treatment($id){
			if($this->session->userdata('username')){
				$data['date'] = date('Y-m-d');
				$data['prof'] = $this->patient_model->get_patient_infobyid($id);
				$this->load->view('treatment/add_treatment',$data);
			}
			else{
				echo "<script>alert('Login is required.');</script>";
				echo "<meta http-equiv=Refresh content=0;url='".base_url()."admin>";
			}
		}

		public function treatment_history($id){
			if($this->session->userdata('username')){
				$data['record'] = $this->treatment_model->get_patient_treatment($id);
				$data['prof'] = $this->patient_model->get_patient_infobyid($id);
				$this->load->view('treatment/treatment_history',$data);
			}
			else{
				echo "<script>alert('Login is required.');</script>";
				echo "<meta http-equiv=Refresh content=0;url='".base_url()."admin>";
			}
		}	

		public function treatment_record_history($id){
			if($this->session->userdata('username')){
				$data['record'] = $this->treatment_model->get_treatment($id);
				$data['treatment'] = $this->treatment_model->get_treatment_record($id);
				$data['transaction'] = $this->treatment_model->get_transaction($id);
				$this->load->view('treatment/view_treatment',$data);
			}
			else{
				echo "<script>alert('Login is required.');</script>";
				echo "<meta http-equiv=Refresh content=0;url='".base_url()."admin>";
			}
		}

		public function tooth_treatment(){
	        $data['finding']=$this->treatment_model->get_tooth_treatment($this->input->post('tid',TRUE),$this->input->post('tno',TRUE));
	        
	       $output = null;
	        foreach ($data['finding'] as $finding){
	            $output .="<tr class='text-center'><td>".$finding->treatment."</td><td>".$finding->toothsurface."</td></tr>";
	        }
	        echo  $output;
	}

		public function view_teethprofile($pid,$rid){
			if($this->session->userdata('username')){
				$data['info'] = $this->patient_model->get_patient_infobyid($pid);
				$data['teeth'] = $this->treatment_model->get_treatment_record($rid);
				$this->load->view('treatment/treatment_teethprofile',$data);
			}else{
				echo "<script>alert('Login is required.');</script>";
				echo "<meta http-equiv=Refresh content=0;url='".base_url()."cadmin>";
			}
		}

		public function get_services()	
	    {
	        $type = $this->input->post('type',TRUE);
	        $data['type']=$this->treatment_model->get_services($type);
	        
	       $output = null;
	       $output .= "<option value='' disabled default selected style='display:none'>Select Type</option>";
	        foreach ($data['type'] as $type)
	        {
	            $output .= "<option value='".$type->dental_procedure."'>".$type->dental_procedure."</option>";
	        }

	        echo  $output;
	    }

	    public function get_price()	
	    {
	        $name = $this->input->post('name',TRUE);
	        $price=$this->treatment_model->get_price($name);
	        
	       $output = null;
	       $output = $price->service_fee;

	        echo  $output;
	    }

	    public function add_treatment(){
	    	if($this->session->userdata('username') && $this->input->post("dentist")!=""){
	    		$to = $qu = $ap = $po = $ca = $ar = 0;
	    		$data = array('patient_id'=> $this->input->post("patient_id"),
	    					  'date'=> $this->input->post('date'),
	    					  'dentistincharge'=> $this->input->post('dentist'),
	    					  'chiefcomplaint'=> $this->input->post('complaint'),
	    					  'otherfindings'=> $this->input->post('finding') );

	    		if($this->input->post('type')){
	    			$rid = $this->treatment_model->add_treatment($data);
	    			foreach($this->input->post('type') as $ccnt => $ctr) 
					{

						if($this->input->post('type')[$ccnt] == 'Tooth'){
							$data = array('treatment_id'=>$rid,
											'type'=>$this->input->post('type')[$ccnt],
											'treatment'=>$this->input->post('ttype')[$ccnt],
											'toothno'=>$this->input->post('ttoothno')[$to],
											'toothsurface'=>$this->input->post('tttype')[$to],
											'price'=>$this->input->post('price')[$ccnt]);
							$this->treatment_model->insert_treatment_record($data);
							$to++;
						}
						else if($this->input->post('type')[$ccnt] == 'Quadrant'){
							$data = array('treatment_id'=>$rid,
											'type'=>$this->input->post('type')[$ccnt],
											'treatment'=>$this->input->post('ttype')[$ccnt],
											'toothsurface'=>$this->input->post('qtype')[$qu],
											'price'=>$this->input->post('price')[$ccnt]);
							$this->treatment_model->insert_treatment_record($data);
							$qu++;
						}
						else if($this->input->post('type')[$ccnt] == 'Appliance'){
							$data = array('treatment_id'=>$rid,
											'type'=>$this->input->post('type')[$ccnt],
											'treatment'=>$this->input->post('ttype')[$ccnt],
											'toothsurface'=>$this->input->post('atype')[$ap],
											'price'=>$this->input->post('price')[$ccnt]);
							$this->treatment_model->insert_treatment_record($data);
							$ap++;
						}
						else if($this->input->post('type')[$ccnt] == 'Post'){
							$data = array('treatment_id'=>$rid,
											'type'=>$this->input->post('type')[$ccnt],
											'treatment'=>$this->input->post('ttype')[$ccnt],
											'toothno'=>$this->input->post('ptoothno')[$po],
											'price'=>$this->input->post('price')[$ccnt]);
							$this->treatment_model->insert_treatment_record($data);
							$po++;
						}
						else if($this->input->post('type')[$ccnt] == 'Canal'){
							$data = array('treatment_id'=>$rid,
											'type'=>$this->input->post('type')[$ccnt],
											'treatment'=>$this->input->post('ttype')[$ccnt],
											'toothno'=>$this->input->post('ctoothno')[$ca],
											'price'=>$this->input->post('price')[$ccnt]);
							$this->treatment_model->insert_treatment_record($data);
							$ca++;
						}
						else if($this->input->post('type')[$ccnt] == 'Arch'){
							$data = array('treatment_id'=>$rid,
											'type'=>$this->input->post('type')[$ccnt],
											'treatment'=>$this->input->post('ttype')[$ccnt],
											'toothno'=>$this->input->post('atoothno')[$ar],
											'price'=>$this->input->post('price')[$ccnt]);
							$this->treatment_model->insert_treatment_record($data);
							$ar++;
						}
						// $aca = array(
						// 			'patientid' => $id,
						// 			'chronicailmentname' => $this->input->post("aca")[$ccnt]);
						// $this->gayatin_model->add_chronicailment($aca);
					}
						$bal = $this->input->post('total_amount') - $this->input->post('amount_paid');
						$od = $this->treatment_model->get_old_data($this->input->post('patient_id'));
						$bal = $bal + $od->total_balance;
						$ndata = array('total_balance'=>$bal);
						$this->treatment_model->update_patient($od->patient_id,$ndata);
						$transac = array('treatment_id'=>$rid,
									 'totalamount'=>$this->input->post('total_amount'),
									 'amountpaid'=>$this->input->post('amount_paid'),
									 'balance'=>$bal);
					// $transac = array('treatment_id'=>$rid,
					// 				 'totalamount'=>$this->input->post('total_amount'),
					// 				 'amountpaid'=>$this->input->post('amount_paid'),
					// 				 'balance'=>$bal);



					$this->treatment_model->insert_transaction($transac);
					echo "<script>alert('Successfully added treatment.');</script>";
					echo "<script>window.location='".base_url()."patient/view_patient_profile/'".$this->input->post('patient_id')."</script>";
	    		}


	    		redirect('patient/view_patient_profile/'.$this->input->post('patient_id'));
	    	}else if($this->session->userdata('username') && $this->input->post("dentist")==""){
			redirect('treatment/new_treatment');
			}
			else{
				echo "<script>alert('Login is required.');</script>";
				echo "<meta http-equiv=Refresh content=0;url='".base_url()."admin>";
			}
	    }

	}
?>