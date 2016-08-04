<?php $this->load->view('header', array('num' => 6, 'title' => "Reports")); ?>
<body>
<div style="float:left;text-align: left" class="col-xs-2 columns">
<span><b style="color:red">Select Time Span</b></span><br>
<select  id="start-year" onchange="getmonths1()"></select><select id="start-month" onchange="getDays1()"  style="height:20px;width:97px;"></select><select id="startday" style="height:20px;width:43px;"></select><br><b style="color:red">to</b><br><select id="end-year" onchange="getmonths2()"></select><select id="end-month" onchange="getDays2()"  style="height:20px;width:97px;"></select><select id="endday" style="height:20px;width:43px;"></select>
<br><br>
<br><br>
<select id="report-selector" onclick="selectReport()" >
<option></option>
<option value="0">Customer Ratio</option>
<option value="1">Gender and Age Classification</option>
<option value="2">List of Services Rendered</option>
<option value="3">Appointment Status</option>
</select>
<br><br>
<div id="div-0" class="element-container" style="border:1px solid #ccc;display:none;background-color:#fff;">
<span><b style="color:Red">Legend</b></span><br>
<span><b style="color:green">Customer Ratio</b></span><br><br>
<span><b style="color:green">Patient Type</b></span><br>
<select id="patient">
<option value="0">Old</option>
<option value="1">New</option>
<option value="2">Both</option>
</select><br><br>
<span><b style="color:green">Generate By:</b></span><br>
<select id="timespan" onchange="geTimeslots()">
<option></option>
<option value="0">Months</option>
<option value="1">Days</option>
<option value="2">Time Slots</option>
<option value="3">Person</option>
</select>
<select id="schedtype" style="display:none;width:94px;height:20px;">
<option value="0">Weekdays</option>
<option value="1">Saturdays</option>
</select><br><br>
<button id="submit0" onclick="generate0()">Generate Report</button>
</div>
<div id="div-1" class="element-container" style="border:1px solid #ccc;display:none;background-color:#fff;">
<span><b style="color:Red">Legend</b></span><br>
<span><b style="color:green">Gender and Age Classification</b></span><br><br>
<span><b  style="color:Green">Age</b></span><br>
<input id="age-calsification" onchange="checkAge()" style="width:107px;height:20px"></input><br>
<b  id="error" style="color:red;display:none;">Invalid Input</b><br>
<span><b style="color:green">Generate By:</b></span><br>
<select id="timespan2" onchange="geTimeslots1()">
<option></option>
<option value="0">Months</option>
<option value="1">Days</option>
<option value="2">Time Slots</option>
<option value="3">Patient Type</option>
</select>
<select id="timeslots2" style="display:none;">
<option value="0">Weekdays</option>
<option value="1">Saturdays</option>
</select>
<select id="patient-type" style="display:none;">
<option value="0">Old</option>
<option value="1">New</option>
<option value="2">Old and New</option>
</select><br><br>
<button id="submit1" onclick="generate1()">Generate Report</button>
</div>
<div id="div-2" class="element-container" style="border:1px solid #ccc;display:none;background-color:#fff;">
<span><b style="color:Red">Legend</b></span><br>
<span><b style="color:green">List of Services Rendered</b></span><br>
<select id="services-selector"></select><br>
<span><b style="color:green">Generate By:</b></span><br>
<select id="timespan3" onchange="getTimeslots2()">
<option></option>
<option value="0">Months</option>
<option value="1">Days</option>
<option value="2">Time Slots</option>
</select>
<select id="timeslots3" style="display:none;">
<option value="0">Weekdays</option>
<option value="1">Saturdays</option>
</select><br><br>
<button id="submit2" onclick="generate2()">Generate Report</button>
</div>
<div id="div-3" class="element-container" style="border:1px solid #ccc;display:none;background-color:#fff;">
<span><b style="color:Red">Legend</b></span><br>
<span><b style="color:green">Appointment Statuses</b></span><br><br>
<span><b style="color:green">Statuse</b></span><br>
<select id="statuses-selector">
<option value="0">Created</option>
<option value="1">Confirmed</option>
<option value="2">Cancelled</option>
<option value="3">All three</option>
</select><br>
<select id="timespan4" onchange="getTimeslots3()">
<option></option>
<option value="0">Months</option>
<option value="1">Days</option>
<option value="2">Time Slots</option>
</select>
<select id="timeslots4" style="display:none;">
<option value="0">Weekdays</option>
<option value="1">Saturdays</option>
</select><br><br>
<button id="submit3" onclick="generate3()">Generate Report</button>
</div>
</div>
<!---
<button style="width:100%; font-size:12" id="monthlyreport" class="btn btn-info" onclick="clientsreport()">
<span class="glyphicon glyphicon-share-alt"></span>
Generate Clients Report
</button>-->
<div class="col-xs-10 columns">
<div style class="element-container">
<div style="width:80%">
<canvas id="myChart" height="500" width="667" style="width:667px; height:500px;"></canvas>
</div>
</div>
</div>


<script type="text/javascript">
$(document).ready(function(){
var date=new Date();
var list="";
list+="<option></option>"
for(var x=date.getFullYear();x>=2000;x=x-1)
	list+="<option value="+x+">"+x+"</option>";
 $("#start-year").html(list);
 $("#end-year").html(list);
 });
 

  function getmonths1(){
	 var year=document.getElementById("start-year").value;
	 var date=new Date();
	 var months=new Array("January","Febuary","March","April","May","June","July","August","September","October","November","December");
	 var list="";
	 var size=months.length-1;
			if(year==date.getFullYear())
				size=date.getMonth();
			list+="<option></option>";
		for(x=0;x<=size;x++)
			list+="<option value="+(x+1)+">"+months[x]+"</option>";
		$("#start-month").html(list);
 }
   function getmonths2(){
	 var year=document.getElementById("end-year").value;
	 var date=new Date();
	 var months=new Array("January","Febuary","March","April","May","June","July","August","September","October","November","December");
	 var list="";
	 var size=months.length-1;
			if(year==date.getFullYear())
				size=date.getMonth();
			list+="<option></option>";
		for(x=0;x<=size;x++)
			list+="<option value="+(x+1)+">"+months[x]+"</option>";
		$("#end-month").html(list);
 }
 
 
 function getDays1(){
	var month=document.getElementById("start-month").value;
	var year=document.getElementById("start-year").value;
	var size=getMnum(year,month);
	var list="";
		for(var x=1;x<=size;x++)
			list+="<option value="+x+">"+x+"</option>";
		$("#startday").html(list);
 }
 
  function getDays2(){
	 var month=document.getElementById("end-month").value;
	var year=document.getElementById("end-year").value;
	var size=getMnum(year,month);
	var list="";
		for(var x=1;x<=size;x++)
			list+="<option value="+x+">"+x+"</option>";
		$("#endday").html(list);
  }
  
  function selectReport(){
	  var report=document.getElementById("report-selector").value;
		var div=document.getElementById("div-"+report);
			if(div.style.display=="none")
				$("#div-"+report).slideDown();
					else
						$("#div-"+report).slideUp();
  }
  
  function geTimeslots(){
	  var choice=document.getElementById("timespan");
					if(choice.value==2)
						$("#schedtype").slideDown();
							else
									$("#schedtype").slideUp();
  }
  
  function geTimeslots1(){
	  var choice=document.getElementById("timespan2");
					if(choice.value<3){
						if(choice.value==2)
								$("#timeslots2").show();
						else
							$("#timeslots2").hide();
							$("#patient-type").hide();
						}
					
					else{
						$("#timeslots2").hide();
						$("#patient-type").show();
					}
				}
  
  function getTimeslots2(){
	  var choice=document.getElementById("timespan3");
		if(choice.value==2)
			$("#timeslots3").slideDown();
					else
						$("#timeslots3").slideUp();
  }
 function getTimeslots3(){
	 var choice=document.getElementById("timespan4");
		if(choice.value==2)
			$("#timeslots4").slideDown();
				else
					$("#timeslots4").slideUp();
 }
 
  /*function checkSpan(){
	  var select=new Array("-year","-month","day");
	  var type=new Array("start","end");
		var value=new Array();
		for(var x=0,check=0;x<type.length && check<0;){
			for(var i=0;i<select.length && document.getElementById(type[x]+select[i]).value!="";i++);
				if(i!=select.length)
					check+=1;
						x+=1;
		}
		var selectrec=document.getElementById("report-selector");
			if(check>0)
				selectrec.select.disabled=true;
			
			else 
				selectrec.select.disabled=false;
  }*/
  function checkAge(){
	  var age=document.getElementById("age-calsification").value;
			if(isNaN(age) || age<=0)
				$("#error").slideDown();
						else
							$("#error").slideUp();
				
  }
  function generate0(){
	  var points=duration();
	  var 	temp;
		if(points[0]>points[1]){
			temp=points[0];
				points[0]=points[1];
					points[1]=temp;
		}
	  var patient=document.getElementById("patient").value;
	  var generate=document.getElementById("timespan").value;
	  alert(points[0]+" "+points[1]);
			if(generate==2)
				generate=document.getElementById("schedtype").value;
					$.post("http://localhost/clinic/reporting/clientsreport",{
						points:points,
						patient:patient,
						generate:generate,
					},
					function(data){
						alert(data);
					});
  
  }

  function duration(){
		var type=new Array("start","end")
		var date=new Array("-year","-month","day")
		var points=new Array();	
		var point=new Array();
		var x;
		var i;
	for(var x=0;x < type.length;x++){
		points[x]=new Array();
		for(var i=0; i<date.length && document.getElementById(type[x]+date[i]).value!="";i++){
			points[x][i]=document.getElementById(type[x]+date[i]).value;
			if(points[x][i]<10)
				points[x][i]="0"+points[x][i];
	}
	
	}
	point[0]=points[0][0]+'-'+points[0][1]+'-'+points[0][2];
	point[1]=points[1][0]+'-'+points[1][1]+'-'+points[1][2];
	return point;
  
  }
  
   function getMnum(year,month){
	  var date=new Date();
	var months= new Array(31,28,31,30,31,30,31,31,30,31,30,31);
		if(year%2==0)
			months[1]+=1;
				var size=months[month-1];
					if(year==date.getFullYear() && month-1==date.getMonth())
							size=date.getDate();
						return size;
 }
  
 </script>
 </body>
 <?php $this->load->view("footer");?>