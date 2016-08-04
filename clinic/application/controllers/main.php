<?php
class Main extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('main_model');
		date_default_timezone_set('Asia/Manila');
	}
	// LANDING PAGE VIEW
	public function index(){
		//$this->gayatin_appointment_model->reset_pending();
		$this->load->view('main/home');
	}
	// ABOUT US VIEW
	public function aboutus(){
		$data['general'] = $this->main_model->get_general_services();
		$data['restorative'] = $this->main_model->get_restorative_services();
		$data['endodontic'] = $this->main_model->get_endodontic_services();
		$data['orthodontic'] = $this->main_model->get_orthodontic_services();
		$data['prostodontic'] = $this->main_model->get_prostodontic_services();
		$this->load->view('main/aboutus',$data);
	}
	
	public function appointment(){
		$this->load->view('appointment');
	}

	public function clinic_sched(){
		$this->load->view('schedule/schedule_clinic');
	}

	public function clinic_timeslots(){
		$this->load->view('schedule/schedule_timeslots');
	}

	public function add_appointment(){
		$this->load->view('appointment/appointment_add');
	}

	public function services(){
		$this->load->view('services');
	}

}?>