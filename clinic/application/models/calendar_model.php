<?php
class calendar_model extends CI_Model{
	var $conf;
	function __construct(){
		parent::__construct();
			$this->conf=array(
			'start_day'=>'monday',
			'show_next_prev'=>TRUE,
			'next_prev_url'=>base_url().'calendar/display'
			);
			
			$this->conf['template'] = '

			   {table_open}<table border="0" cellpadding="0" cellspacing="0" class="calendar" >{/table_open}

			   {heading_row_start}<tr>{/heading_row_start}

			   {heading_previous_cell}<th><a href="{previous_url}"><button id="prev-button"class ="leftarrow" >&lt;&lt;</button></a></th>{/heading_previous_cell}
			   {heading_title_cell}<th class="date text-center" style="font-size:20px" id="tempdate" colspan="{colspan}">{heading}</th>{/heading_title_cell}
			   {heading_next_cell}<th><a href="{next_url}"><button class ="rightarrow pull-right">&gt;&gt;</button></a></th>{/heading_next_cell}
				
			   {heading_row_end}</tr>{/heading_row_end}

			   {week_row_start}<tr class="elem" style="height:50px">{/week_row_start}
			   {week_day_cell}<td><div class="bold text-center" style="font-size:18px">{week_day}</td></div>{/week_day_cell}
			   {week_row_end}</tr>{/week_row_end}

			   {cal_row_start}<tr class ="days">{/cal_row_start}
			   {cal_cell_start}<td  id="div-day" class ="day">{/cal_cell_start}
				
			   {cal_cell_content}
			   <div class ="day_num">{day}</div>
			   <div class="content hidden" 	>{content}</div>
			   {/cal_cell_content}
			   
			   {cal_cell_content_today}
			   <div class="day_num highlight" >{day}</div>
			   <div class="content hidden"  >{content}</div>
			   {/cal_cell_content_today}

			   {cal_cell_no_content}<div class="day_num">{day}</div>{/cal_cell_no_content}
			   {cal_cell_no_content_today}<div class="day_num highlight">{day}</div>{/cal_cell_no_content_today}

			   {cal_cell_blank}&nbsp;{/cal_cell_blank}

			   {cal_cell_end}</td>{/cal_cell_end}
			   {cal_row_end}</tr>{/cal_row_end}

			   {table_close}</table>{/table_close}
			';
	}

	public function getdays(){
		$query=$this->db->select('date')->from('closeddates')->get();
		$ctr=0;
		$closed=array();
		$closed[$ctr]="garbage";

		foreach($query->result() as $row){
			for($x=0;$x<$ctr && strcmp($closed[$x],$row->date)!=0;$x++);
				if($x==$ctr){
					$closed[$ctr]=$row->date;
					$ctr+=1;
				}
		}
		return array("closed"=>$closed,"ctr"=>$ctr);
	}

	public function get_calendar_data($year,$month){
			$check=0;
			$m=(int)date('m');
			$y=(int)date('Y');

			if(( $month>=$m && $year==$y) || $year >$y){
				$query=$this->db->select('date,reason')->from('closeddates')->like('date',"$year-$month",'after')->get();
				$ctr=0;
				$check=1;
				$closed=array();
				$closed[$ctr]=0;
				$reason=array();
				$reason[$ctr]="";
				foreach($query->result() as $row){
					$type='e';
					$ins=(int)substr($row->date,8,2);
					$dt=date_format(date_create((string)$year.'-'.(string)$month.'-'.(string)$ins), 'l');
					if(strcmp($dt,"Saturday")!=0)
						$type='d';
					if(($this->db->where("date",(string)$year.'-'.(string)$month.'-'.(string)$ins)->count_all_results("closeddates"))==($this->db->where("type",$type)->count_all_results("timeslot"))){
						for($x=0;$x<$ctr && $closed[$x]<$ins;$x++);
							if(($x<$ctr && $closed[$x]!=$ins) || $x==$ctr){	
								for($i=$ctr-1;$i>=$x;$i--){
									$closed[$i+1]=$closed[$i];
									$reason[$i+1]=$reason[$i];
							
								}
								$closed[$x]=$ins;
								$reason[$x]=$row->reason;
								$ctr+=1;
							}
					}
				}
			}

			$max=days_in_month($month,$year);
			$cal_data=array();
			$close="Closed";
			$passed="Passed";
			$sunday="Sunday";
			$active="Active";
			$max=days_in_month($month,$year);
			
			if($check!=0){	
				for($day=1,$itr=0;$day<=$max;$day++){
					$dt=date_format(date_create((string)$year.'-'.(string)$month.'-'.(string)$day), 'l');
					$nowdate=$year.'-'.$month.'-'.$day;
					
					$redirect=base_url()."appointment/issue_appointment/$dt/".$nowdate;
					
					if(strcmp($dt,$sunday)==0){
						if($month==$m && $year==$y && $day<(int)date('d'))
							$cal_data[$day]=$redirect.'/'.$sunday;			
						else if($month>$m && $year==$y)
							$cal_data[$day]=$redirect.'/'.$sunday;	
						else if($month>=$m || $month<$m && $year>$y)
							$cal_data[$day]=$redirect.'/'.$sunday;	
					}
					else if($month == $m && $year==$y && $day<=(int)date('d'))
						$cal_data[$day]=$redirect.'/'.$passed;
					else if( $closed[$itr]==$day){
						$cal_data[$day]=$redirect.'/'.$close.'/'.$reason[$itr];
						if($itr<$ctr-1 && $closed[$itr]==$day)
							$itr=$itr+1;
					}
					else
						$cal_data[$day]=$redirect.'/'.$active;
				}
			}					 
			else {
				for($day=1;$day<=$max;$day++){
					$dt=date_format(date_create((string)$year.'-'.(string)$month.'-'.(string)$day), 'l');
					$nowdate=$year.'-'.$month.'-'.$day;
					$redirect=base_url()."appointment/issue_appointment/$dt/".$nowdate;
					$cal_data[$day]=$redirect.'/'.$passed;
				}
			}			
							
		return $cal_data;
	}

	public function get_timeslots($type){
		return $this->db->select('time')->from("timeslot")->where("type",$type)->get();			
	}

	public function get_closed_date($date){
		return $this->db->select('time')->from('closeddates')->where('date',$date)->get();
	}

	public function close_sched($date,$time,$reason){
		 if(strcmp($time,"CLOSE ALL SCHEDULE")==0){
		 	$type='e';
		 	$dt=date_format(date_create($date), 'l');
		 	if(strcmp($dt,"Saturday")!=0)
				$type='d';
			$query=$this->get_timeslots($type);
			$q = $this->get_closed_date($date);
			foreach($query->result() as $row){
				$i=0;
				foreach($q->result() as $comp){
					if($row->time == $comp->time){
						$this->db->where(array('date'=>$date,'time'=>$row->time));
						$this->db->update('closeddates',array('date'=>$date,'time'=>$row->time,'reason'=>$reason));
						$i+=1;
					}
				}
				if($i==0)
					$this->db->insert("closeddates",array('date'=>$date,'time'=>$row->time,'reason'=>$reason));
			}

			$this->db->where('date',$date);
			$q=$this->db->get('appointment');
			foreach($q->result() as $aq){
				$aqid = $aq->id;
				$aquname = $aq->username;
				$aqdate = $aq->date;
				$this->load->model('patient_model');
				$pinfo = $this->patient_model->get_patient_emailbyuname($aquname);
				$message1 = "Gayatin Dental Clinic: Your appointment booking on ".date('j F Y',strtotime($aqdate))." has been cancelled because the clinic will be closed on the said date. You may reschedule your appointment to another date. Thank you.";
				$this->load->model('appointment_model');
				$this->appointment_model->send_email($pinfo->email,$message1);
				$dump=$this->appointment_model->send_sms("APINVD2126X89","APINVD2126X89NVD21","msun",$pinfo->mobileno,$message1);
				$this->db->where('id',$aqid);
				$this->db->delete('appointment');
			}
	}
	else{
		$this->db->insert("closeddates",array('date'=>$date,'time'=>$time,'reason'=>$reason));

		//GET DATA FROM APPOINTMENT QUEUE
			$this->db->where(array('date'=>$date,'time'=>$time));
			$q=$this->db->get('appointment');
			foreach($q->result() as $aq){
				$aqid = $aq->id;
				$aquname = $aq->username;
				$aqdate = $aq->date;
				$this->load->model('patient_model');
				$pinfo = $this->patient_model->get_patient_emailbyuname($aquname);
				$message1 = "Gayatin Dental Clinic: Your appointment booking on ".date('j F Y',strtotime($aqdate))." has been cancelled because the clinic will be closed on the said date. You may reschedule your appointment to another date. Thank you.";	
				$this->load->model('appointment_model');
				$this->appointment_model->send_email($pinfo->email,$message1);
				$dump=$this->appointment_model->send_sms("APINVD2126X89","APINVD2126X89NVD21","msun",$pinfo->mobileno,$message1);
				$this->db->where('id',$aqid);
				$this->db->delete('appointment');
			}
	}

}

public function open_sched($date,$time){
	if(strcmp($time,"OPEN ALL SCHEDULE")!=0)
	$this->db->delete('closeddates',array('date'=>$date,'time'=>$time));
	else
	$this->db->delete('closeddates',array('date'=>$date));	
}


public function generate($year,$month){
	$this->load->library('calendar',$this->conf);
	/*echo $this->calendar->generate($year,$month);*/;
	$cal_data= $this->get_calendar_data($year,$month); 
	return $this->calendar->generate($year,$month,$cal_data);
}

public function get_closed_sched($date){
	$query=$this->db->select('time')->from("closeddates")->where("date",$date)->get();
	$sched=array();
	$ctr=0;
	foreach($query->result() as $row){
		$sched[$ctr]=$row->time;
		$ctr+=1;
	}

	return array("sched"=>$sched,"ctr"=>$ctr);
}

public function get_duplicate_sched($date,$adate,$atime){
	$query=$this->db->select('time')->from("closeddates")->where("date",$date)->get();
	$sched=array();
	$ctr=0;
	foreach($query->result() as $row){
		$sched[$ctr]=$row->time;
		$ctr+=1;
	}

	$q = $this->db->select('time')->from('appointment')->where('date',$date)->get();
	foreach($q->result() as $res){
		if($date==$adate){
			if($res->time!=$atime){
				$sched[$ctr]=$res->time;
				$ctr+=1;
			}
		}
		else{
			$sched[$ctr]=$res->time;
				$ctr+=1;
		}
	}

	return array("sched"=>$sched,"ctr"=>$ctr);
}


public function get_sched($date){
	 $ctr=0;
	 $norm=0;
	 $ret=0;
	 $closed=array();
	 $normal=array();
	 $match=array();
	 $match[$ret]="Clinic is not open during Sunday's";
	 $ret+=1;
	 $dt=date_format(date_create($date), 'l');
	if(strcmp($dt,"Sunday")!=0){
		$ret-=1;
	
	$day='d';	
	$array=$this->get_closed_sched($date);
	$closed=$array["sched"];
	$ctr=$array["ctr"];
	if(strcmp($dt,"Saturday")==0)
		$day='e';
	$query=$this->get_timeslots($day);
	foreach($query->result() as $row){
		$normal[$norm]=$row->time;	
		$norm+=1;
	}	
	for($x=0;$x<$norm;$x++){
		for($i=0;$i<$ctr && strcmp($normal[$x],$closed[$i])!=0;$i++);
			if($i==$ctr){
				$match[$ret]=$normal[$x];
				$ret+=1;
			}
				
	}
	
	}

return array("match"=>$match,"ret"=>$ret);
}

public function get_move_sched($date,$adate,$atime){
	 $ctr=0;
	 $norm=0;
	 $ret=0;
	 $closed=array();
	 $normal=array();
	 $match=array();
	 $match[$ret]="Clinic is not open during Sunday's";
	 $ret+=1;
	 $dt=date_format(date_create($date), 'l');
	if(strcmp($dt,"Sunday")!=0){
		$ret-=1;
	
	$day='d';	
	$array=$this->get_duplicate_sched($date,$adate,$atime);
	$closed=$array["sched"];
	$ctr=$array["ctr"];
	if(strcmp($dt,"Saturday")==0)
		$day='e';
	$query=$this->get_timeslots($day);
	foreach($query->result() as $row){
		$normal[$norm]=$row->time;	
		$norm+=1;
	}	
	for($x=0;$x<$norm;$x++){
		for($i=0;$i<$ctr && strcmp($normal[$x],$closed[$i])!=0;$i++);
			if($i==$ctr){
				$match[$ret]=$normal[$x];
				$ret+=1;
			}
				
	}
	
}

return array("match"=>$match,"ret"=>$ret);
}

}
?>