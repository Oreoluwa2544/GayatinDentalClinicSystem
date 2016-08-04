<?php	
class Calendar extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('calendar_model');
		date_default_timezone_set('Asia/Manila');
	}
	
	public function display($year=NULL,$month=NULL){
		if($year==NULL){
			$year=date('Y');
		}
		
		if($month==NULL){
			$month=date('m');
		}
		
		if($this->input->post('date')){
			$year=(int)substr($this->input->post('date'),1);
			$month=(int)substr($this->input->post('date'),5);
			
		}
		
		if(($year==date('Y') && $month <date('m')) || ($year<date('Y'))){
			$month=date('m');
			$year=date('Y');
		}
		
		$data["calendar"]=$this->calendar_model->generate($year,$month);
		$data["date"]=$this->calendar_model->getdays();
		$this->load->view("calendar/clinic_calendar",$data);

	}

	public function closeday(){
		if($this->input->post('date')){
			$this->calendar_model->close_sched($this->input->post('date'),$this->input->post('time'),$this->input->post('reason'));
		}
		redirect(base_url()."calendar/display");
	}

	public function openday(){
		if($this->input->post('date')){	
			$this->calendar_model->open_sched($this->input->post('date'),$this->input->post('time'));
		}
		redirect(base_url()."calendar/display");
	}

	public function openSched(){
		if($this->input->post('date')){
			$array=$this->calendar_model->get_closed_sched($this->input->post('date'));
			$sched=$array["sched"];	

			for($ctr=0;$ctr<$array["ctr"];$ctr++)
				echo $sched[$ctr]."space";
		}
		else
			echo"empty";
	}

	public function retdays($year,$month){
		$arr=$this->calendar_model->getdays($year,$month);
	}

	public function gitSched(){
		$date=$this->input->post("date");
		$adate=$this->input->post("adate");
		$atime=$this->input->post("atime");
		$array=$this->calendar_model->get_move_sched($date,$adate,$atime);
		$match=$array["match"];
		
		if($array["ret"]!=0){
			for($ctr=0;$ctr<$array["ret"];$ctr++)
				echo $match[$ctr]."space";
		}
		else
			echo "empty";
	}

	public function get_sched(){
		$date=$this->input->post("date");
		$array=$this->calendar_model->get_sched($date);
		$match=$array["match"];
		
		if($array["ret"]!=0){
			for($ctr=0;$ctr<$array["ret"];$ctr++)
				echo $match[$ctr]."space";
		}
		else
			echo "empty";
	}

	public function weekday(){
		$this->load->view("calendar/clinic_calendar");
	}

	public function weekends(){
		$this->load->view("calendar/clinic_calendar");
	}
}
?>