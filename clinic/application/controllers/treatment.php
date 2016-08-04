<?php  
	Class Treatment extends CI_Controller {

		public function __construct(){
			parent::__construct();
			$this->load->model('calendar_model');
			$this->load->model('appointment_model');
			$this->load->model('patient_model');
			$this->load->model('treatment_model');
			$this->load->model('payment_model');
			date_default_timezone_set('Asia/Manila');
		}

		public function new_treatment($id){
			if($this->session->userdata('username')){
				$this->load->model('main_model');
				$data['date'] = date('Y-m-d');
				$data['prof'] = $this->patient_model->get_patient_infobyid($id);
				$data['dentists'] = $this->main_model->get_dentists();
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
	        	if($finding->toothsurface=='')
	        		$surf = 'N/A';
	        	else
	        		$surf = $finding->toothsurface;
	        	
	            $output .="<tr class='text-center'><td>".$finding->treatment."</td><td>".$surf."</td></tr>";
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

	    public function add_treatment()
	    {
	    	if($this->session->userdata('username') && $this->input->post("dentist")!=""){
	    		$tctr=$this->input->post('tctr');
	    		$uctr=$this->input->post('uctr');
	    		$qctr=$this->input->post('qctr');
	    		$apctr=$this->input->post('apctr');
	    		$pctr=$this->input->post('pctr');
	    		$cctr=$this->input->post('cctr');
	    		$arctr=$this->input->post('arctr');

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
							for(;$tctr>=0&&$this->input->post('ttoothno'.$tctr)=='';$tctr--);
								if($this->input->post('ttoothno'.$tctr)){
									foreach($this->input->post('ttoothno'.$tctr) as $tcnt => $actr){
										$data = array('treatment_id'=>$rid,
											'type'=>$this->input->post('type')[$ccnt],
											'treatment'=>$this->input->post('ttype')[$ccnt],
											'toothno'=>$this->input->post('ttoothno'.$tctr)[$tcnt],
											'toothsurface'=>$this->input->post('tttype'.$tctr)[$tcnt],
											'price'=>$this->input->post('price')[$ccnt]);
										$this->treatment_model->insert_treatment_record($data);
									} 
								}
								$tctr--;
						}

						else if($this->input->post('type')[$ccnt] == 'Unit'){
							for(;$uctr>=0&&$this->input->post('utoothno'.$uctr)=='';$uctr--);
								if($this->input->post('utoothno'.$uctr)){
									foreach($this->input->post('utoothno'.$uctr) as $ucnt => $fctr){
										$data = array('treatment_id'=>$rid,
											'type'=>$this->input->post('type')[$ccnt],
											'treatment'=>$this->input->post('ttype')[$ccnt],
											'toothno'=>$this->input->post('utoothno'.$uctr)[$ucnt],
											'price'=>$this->input->post('price')[$ccnt]);
										$this->treatment_model->insert_treatment_record($data);
									}
								}
								$uctr--;
						}

						else if($this->input->post('type')[$ccnt] == 'Unclassified'){
							$data = array('treatment_id'=>$rid,
								'type'=>$this->input->post('type')[$ccnt],
								'treatment'=>$this->input->post('ttype')[$ccnt],
								'price'=>$this->input->post('price')[$ccnt]);
							$this->treatment_model->insert_treatment_record($data);
						}

						else if($this->input->post('type')[$ccnt] == 'Quadrant'){
							for(;$qctr>=0&&$this->input->post('qtype'.$qctr)=='';$qctr--);
								if($this->input->post('qtype'.$qctr)){
									foreach($this->input->post('qtype'.$qctr) as $qcnt => $bctr){
										$data = array('treatment_id'=>$rid,
											'type'=>$this->input->post('type')[$ccnt],
											'treatment'=>$this->input->post('ttype')[$ccnt],
											'toothsurface'=>$this->input->post('qtype'.$qctr)[$qcnt],
											'price'=>$this->input->post('price')[$ccnt]);
										$this->treatment_model->insert_treatment_record($data);
									}
								}
								$qctr--;
						}

						else if($this->input->post('type')[$ccnt] == 'Appliance'){
							for(;$apctr>=0&&$this->input->post('atype'.$apctr)=='';$apctr--);
								if($this->input->post('atype'.$apctr)){
									foreach($this->input->post('atype'.$apctr) as $apcnt => $cctr){
										$data = array('treatment_id'=>$rid,
											'type'=>$this->input->post('type')[$ccnt],
											'treatment'=>$this->input->post('ttype')[$ccnt],
											'toothsurface'=>$this->input->post('atype'.$apctr)[$apcnt],
											'price'=>$this->input->post('price')[$ccnt]);
										$this->treatment_model->insert_treatment_record($data);
									}
								}
								$apctr--;
						}

						else if($this->input->post('type')[$ccnt] == 'Post'){
							for(;$pctr>=0&&$this->input->post('ptoothno'.$pctr)=='';$pctr--);
								if($this->input->post('ptoothno'.$pctr)){
									foreach($this->input->post('ptoothno'.$pctr) as $pcnt => $dctr){
										$data = array('treatment_id'=>$rid,
											'type'=>$this->input->post('type')[$ccnt],
											'treatment'=>$this->input->post('ttype')[$ccnt],
											'toothno'=>$this->input->post('ptoothno'.$pctr)[$pcnt],
											'price'=>$this->input->post('price')[$ccnt]);
										$this->treatment_model->insert_treatment_record($data);
									}
								}
								$pctr--;
						}

						else if($this->input->post('type')[$ccnt] == 'Canal'){
							for(;$cctr>=0&&$this->input->post('ctoothno'.$cctr)=='';$cctr--);
								if($this->input->post('ctoothno'.$cctr)){
									foreach($this->input->post('ctoothno'.$cctr) as $cccnt => $ectr){
										$data = array('treatment_id'=>$rid,
											'type'=>$this->input->post('type')[$ccnt],
											'treatment'=>$this->input->post('ttype')[$ccnt],
											'toothno'=>$this->input->post('ctoothno'.$cctr)[$cccnt],
											'price'=>$this->input->post('price')[$ccnt]);
										$this->treatment_model->insert_treatment_record($data);
									}
								}
								$cctr--;
						}

						else if($this->input->post('type')[$ccnt] == 'Arch'){
							for(;$arctr>=0&&$this->input->post('atoothno'.$arctr)=='';$arctr--);
								if($this->input->post('atoothno'.$arctr)){
									foreach($this->input->post('atoothno'.$arctr) as $arcnt => $fctr){
										$data = array('treatment_id'=>$rid,
											'type'=>$this->input->post('type')[$ccnt],
											'treatment'=>$this->input->post('ttype')[$ccnt],
											'toothno'=>$this->input->post('atoothno'.$arctr)[$arcnt],
											'price'=>$this->input->post('price')[$ccnt]);
										$this->treatment_model->insert_treatment_record($data);
									}
								}
								$arctr--;
						}

					}

						if($this->input->post('override_total_amount')!=""){
							$tamount = $this->input->post('override_total_amount');
							$bal = $this->input->post('override_total_amount') - $this->input->post('amount_paid');
						}
						else{
							$tamount = $this->input->post('total_amount');
							$bal = $this->input->post('total_amount') - $this->input->post('amount_paid');
						}
						$od = $this->treatment_model->get_old_data($this->input->post('patient_id'));
						$totbal = $bal + $od->total_balance;
						$paymentdata = array('patient_id'=>$od->patient_id,
											 'type'=>'Treatment Payment',
											 'treatment_fee'=>$tamount,
											 'old_balance'=>$od->total_balance,
											 'date'=>date("Y-m-d"),
											 'paid_to'=>$this->session->userdata('firstname'),
											 'payment'=>$this->input->post('amount_paid'),
											 'new_balance'=>$totbal);
						$this->payment_model->add_payment($paymentdata);
						$ndata = array('total_balance'=>$totbal);
						$this->treatment_model->update_patient($od->patient_id,$ndata);
						$transac = array('treatment_id'=>$rid,
									 'totalamount'=>$tamount,
									 'amountpaid'=>$this->input->post('amount_paid'),
									 'balance'=>$bal);

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