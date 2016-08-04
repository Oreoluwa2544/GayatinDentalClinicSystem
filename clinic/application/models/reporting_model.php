<?php
class Reporting_model extends CI_Model{
public function get_clientdata($points){
	$patients=array();
	$query=$this->appointment_data($points,"no");
	$point1=explode('-',$points[0]);
	$point2=explode('-',$points[1]);
	$index=0;
			if($point1[0]==$point2[0])
				$index=1;
			$size=((int)$point2[$index])-((int)$point1[$index])+1;
			for($x=0;$x<$size;$x++)
			$patients[$x]=0;
			foreach($query->result() as $row){
				$point2=explode('-',$row->date);
				$innerindex=((int)$point2[$index])-((int)$point1[$index]);
				$patients[$innerindex]+=1;
			}
				return array("patients"=>$patients,"size"=>$size);
	}

	public function get_patientgender($points){
		$query=$this->appointment_data($points,"yes");
		$gender=array("patient"=>array("Male"=>0,"Female"=>0));
		$age=array("gender"=>array("Male"=>array(),"Female"=>array()));
		$agedex=array("index"=>array ("Female"=>0,"Male"=>0));
		$usernameque=array("patient_id"=>array());
		$usernamesize=array();
		$last=0;
		$index=0;
		$point1=explode('-',$points[0]);
		$point2=explode('-',$points[1]);
		if($point1[0]==$point2[0])
				$index=1;
			$size1=((int)$point2[$index])-((int)$point1[$index])+1;
				for($x=0;$x<$size1;$x++){
				$gender[$x]->patient["Male"]=$gender[$x]->patient["Female"]=0;
				$age[$x]->gender["Male"][0]=$age[$x]->gender["Female"][0]=0;
				$agedex[$x]->index["Female"]=$agedex[$x]->index["Male"]=0;
				$usernamesize[$x]=0;
				$usernameque[$x]->patient_id[0]=0;
		}

		foreach($query->result() as $row){
			$point2=explode('-',$row->date);
			$innerindex=((int)$point2[$index])-((int)$point1[$index]);
			for($x=0;$x<$usernamesize[$innerindex] && $row->patient_id!=$usernameque[$innerindex]->patient_id[$x];$x++);
			if($x==$usernamesize[$innerindex]){
				$usernameque[$innerindex]->patient_id[$usernamesize[$innerindex]]=$row->patient_id;
					$qry=$this->db->where("patient_id",$row->patient_id)->select("gender,age")->get("patients");
						foreach($qry->result() as $inerow){
								$ndex=$inerow->gender;
								$gender[$innerindex]->patient[$ndex]+=1;
								$age[$innerindex]->gender[$ndex][$agedex[$innerindex]->index[$ndex]]=$inerow->age;
								$agedex[$innerindex]->index[$ndex]+=1;
						}
						$usernamesize[$innerindex]+=1;
			}
		}		/*for($x=0;$x<$last && $row->username!=$usernameque[$x];$x++);
				if($x==$last){
					$usernameque[$last]=$row->username;
					$point2=explode('-',$row->date);
					$innerindex=((int)$point2[$index])-((int)$point1[$index]);
					$qry=$this->db->where("username",$usernameque[$x])->select("gender,age,")->get("patients");		
						foreach($qry->result() as $inerow){
								$ndex=$inerow->gender;
								$gender[$innerindex]->patient[$ndex]+=1;
								$age[$innerindex]->gender[$ndex][$agedex[$innerindex]->index[$ndex]]=$inerow->age;
								$agedex[$innerindex]->index[$ndex]+=1;
						}
			$last+=1;
			}*/
			
		return array("age"=>$age,"agedex"=>$agedex,"gender"=>$gender,"size"=>$size1);
	}
	
	public function appointment_data($points,$status){
		$this->db->where("date >=",$points[0]);
	$this->db->where("date <=",$points[1]);
	if($status=="no")
	$this->db->select("date");
else
	$this->db->select("date,patient_id");
	$query=$this->db->get("treatment");
		return $query;
	}
	public function servicelist($points){
			$this->db->where("date >=",$points[0]);
			$this->db->where("date <=",$points[1]);
			$this->db->select("id,date");
			return $this->db->get("treatment");
	}
	
	public function ret_services($points){
		$query=$this->servicelist($points);
			$point1=explode('-',$points[0]);
			$point2=explode('-',$points[1]);
				$index=0;
					if($point1[0]==$point2[0])
						$index=1;
						$size=((int)$point2[$index])-((int)$point1[$index])+1;
					$services=array("services"=>array());
					$servicesize=array();
					for($x=0;$x<$size;$x++){
							$servicesize[$x]=0;
							$services[$x]->services[0]=0;
					}
				foreach($query->result() as $row){
						$point2=explode('-',$row->date);
						$innerindex=((int)$point2[$index])-((int)$point1[$index]);
						$qry=$this->db->where("treatment_id",$row->id)->select("treatment")->get("treatment_record");
						foreach($qry->result() as $row){
						$services[$innerindex]->services[$servicesize[$innerindex]]=$row->treatment;
						$servicesize[$innerindex]+=1;
						}
				}
				return array("services"=>$services,"size"=>$size,"servicesize"=>$servicesize);
	}
	
	public function get_app($points){
		$app=array("Created"=>0,"Served"=>0,"Cancelled"=>0,"Confirmed"=>0);
		$this->db->where("date >=",$points[0]);
		$this->db->where("date <=",$points[1]);
		$this->db->select("status");
		$query=$this->db->get("appointment");
		foreach($query->result() as $row){
			$app[$row->status]+=1;
			$app["Created"]+=1;
		}
		return $app;
	}
}

?>