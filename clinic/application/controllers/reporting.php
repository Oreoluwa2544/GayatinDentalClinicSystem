<?php 
class Reporting extends CI_Controller{
	 function __construct(){
		parent::__construct();
	$this->load->model("reporting_model");
	}
public function customer_ratio(){
$this->load->view("reports/customerratio");
}

public function clientsreport(){
$points=$this->input->post("points");
$data=array();
$data= $this->reporting_model->get_clientdata($points);
$size=$data["size"];
$patients=$data["patients"];
$points1=explode('-',$points[0]);
$points2=explode('-',$points[1]);
if($points1[0]==$points2[0]){
	$months=$this->getArray();
for($y=0,$x=((int)$points1[1])-1;$y<$size;$x++,$y++)
	echo $months[$x]." ".$patients[$y]."<br>";
}
else{
	for($x=0;$x<$size;$x++){
		echo $points1[0]." ".$patients[$x]."<br>";
				$points1[0]+=1;
	}
}
}
public function getArray(){
	return array("January","February","March","April","May","June","July","August","September","Octover","November","December");
}
public function gender_age(){
$this->load->view("reports/genderandage");
}

public function services_rendered(){
$this->load->view("reports/servicelist");
}

public function gender_agereport(){
	$points=$this->input->post("points");
	$gender=$this->input->post("gender");
$reports=$this->reporting_model->get_patientgender($points);
$age=$reports["age"];
$agedex=$reports["agedex"];
$gender=$reports["gender"];
$size=$reports["size"];
$mstrng="";
$fstrng="";
$data=array();
$points1=explode('-',$points[0]);
$points2=explode('-',$points[1]);
if($points1[0]==$points2[0]){
	$months=$this->getArray();
		for($x=0,$y=((int)$points1[1])-1;$x<$size;$x++,$y++){
			$mage="";
			$fage="";
				$mstrng=$months[$y].'-'.$gender[$x]->patient["Male"].':';
						$fstrng=$gender[$x]->patient["Female"].':';
				for($i=0;$i<$agedex[$x]->index["Male"];$i++)
					$mage=$mage.$age[$x]->gender["Male"][$i].',';
				for($i=0;$i<$agedex[$x]->index ["Female"];$i++)
					$fage=$fage.$age[$x]->gender["Female"][$i].',';
					$data[$x]=$mstrng.$mage.'-'.$fstrng.$fage;
				}
}
else{
	for($x=0;$x<$size;$x++){
				$mage="";
				$fage="";
				for($i=0;$i<$agedex[$x]->index["Male"];$i++)
					$mage=$mage.$age[$x]->gender["Male"][$i].',';
				for($i=0;$i<$agedex[$x]->index["Female"];$i++)
					$fage=$fage.$age[$x]->gender["Female"][$i].',';
		$data[$x]=$points1[0].'-'.$gender[$x]->patient["Male"].':'.$mage.'-'.$gender[$x]->patient["Female"].':'.$fage;
		$points1[0]+=1;
	}
}
for($x=0;$x<$size;$x++)
	echo $data[$x]."<br>";
}
public function services(){
	$points=$this->input->post("points");
	$data=$this->reporting_model-> ret_services($points);
	$size=$data["size"];
	$services=$data["services"];
	$servicesize=$data["servicesize"];
	$points1=explode('-',$points[0]);
	$points2=explode('-',$points[1]);
	$servicestrng="";
	$retserv=array();
	if($points1[0]==$points2[0]){
	$months=$this->getArray();
		for($x=0,$y=((int)$points1[1])-1;$x<$size;$x++,$y++){
			$servicestrng=$months[$y].'-';
				for($i=0;$i<$servicesize[$x];$i++)
					$servicestrng=$servicestrng.$services[$x]->services[$i].',';
			$retserv[$x]=$servicestrng;
		}		
}
else{
	for($x=0;$x<$size;$x++){
		$servicestrng=$points1[0].'-';
				for($i=0;$i<$servicesize[$x];$i++)
						$servicestrng=$servicestrng.$services[$x]->services[$i].',';
		$retserv[$x]=$servicestrng;
		$points1[0]+=1;
	}
}
for($x=0;$x<$size;$x++)
	echo $retserv[$x]."<br>";
}

public function app_statuses(){
	$this->load->view("reports/app_statuses");
}
public function app_status(){
	$points=$this->input->post("points");
	$app=$this->reporting_model->get_app($points);
	echo "Appointments Created:".$app["Created"]."-Served:".$app["Served"]."-Cancelled:".$app["Cancelled"]."-No Show:".$app["Confirmed"];
}

}
?>