<?php $this->load->view('header', array('num' => 6, 'title' => "Reports")); ?>
<body>
<div class="col-xs-2 columns">
<div class="element-container">
<span><b style="color:green">Gender And Age</b></span>
<br><br>
<span><b style="color:green">Select Time Span</b></span><br>
<select id="span" class="form-control" onchange="SelectSpan(this)">
<option value="non"></option>
<option value="0">Yearly</option>
<option value="1">Monthly</option>
</select>
<input placeholder="Select Year" id="year" class="form-control" style="display:none;" onclick="displayYear()"></input>
<div id="ScrollCB1" style="height:160px;width:100%;display:none;color:#555;background-color:#fff;border:1px solid #ccc;border-radius:4px;overflow-y: scroll" class="form-control">
</div>
<input placeholder="Select Month" id="months" class="form-control" style="display:none" onclick="displayMonths()"></input>
<div id="ScrollCB" style="height:160px;width:100%;display:none;color:#555;background-color:#fff;border:1px solid #ccc;border-radius:4px;overflow-y: scroll" class="form-control">
</div>
<span><b style="color:red;">Gender</b></span>
<select class="form-control" id="gender">
<option value="Male">Male</option>
<option value="Female">Female</option>
<option value="Both">Both</option>
</select>
<span><b style="color:red;">Display Chart As</b></span>
<select class="form-control" id="chartop">
<option value="0">Barchart</option>
<option value="1">Linechart</option>
</select>
<!----<span><b style="color:red;">Display By</b></span>
<select class="form-control" id="displaytype" onchange="getDays(this)">
<option value="0"></option>
<option value="1">Months</option>
<option value="2">Days</option>
</select-->
<br>
<button class="btn btn-success" onclick="generateReport()">Generate Report</button>
</div>
<div class="element-container" id="results" style="display:none">
<span><b style="color:green;">Legend</b></span><br>
<b id="female-log" style="display:none;"/>Female</b><br>
<div id="female" style="display:none; background-color:rgba(220,220,220,0.75);width:10px;height:10px;position:absolute;left:5px;right:5px"></div>
<b id="male-log" style="display:none"/>Male</b><br>
<div  id="male" style="display:none; background-color:rgb(203, 221, 230);width:10px;height:10px;position:absolute;left:5px;right:5px"></div>
<button class="btn btn-success" id="mresult" style="display:none;width:100%;" onclick="showresult(this)">Male Data</button><br>
<div id="maleresult" style="height:100px;width:100%;display:none;color:#555;background-color:#fff;border:1px solid #ccc;border-radius:4px;overflow-y: scroll" class="form-control">
</div>
<button class="btn btn-success" id="mage" style="display:none;width:100%;" onclick="getAge(this)">Filter Age</button>
<button class="btn btn-success" id="fresult" style="display:none;width:100%;" onclick="showresult(this)">Female Data</button><br>
<div id="femaleresult" style="height:100px;width:100%;display:none;color:#555;background-color:#fff;border:1px solid #ccc;border-radius:4px;overflow-y: scroll" class="form-control">
</div>
<button class="btn btn-success" id="fage" style="display:none;width:100%;" onclick="getAge(this)">Filter Age</button>
</div>
<ul id="maleagelist" style="display:none;"></ul>
<ul id="femaleagelist" style="display:none;"></ul>
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
function generateReport(){
var spantype=(document.getElementById("span").value);
var data=checkinputs(spantype);
if(data[0]<0 || spantype=="non")
	alert("Please Fill In Lacking Input");
else{
	spantype=parseInt(spantype);
var points=new Array();
data[1][spantype]=data[1][spantype].split("to");
data[1][spantype][0]=data[1][spantype][0].replace(/\s+/g, '');
data[1][spantype][data[1][spantype].length-1]=data[1][spantype][data[1][spantype].length-1].replace(/\s+/g, '');
if(spantype==0){
	if(data[1][spantype][0]>data[1][spantype][data[1][spantype].length-1]){
	temp=data[1][spantype][0];
		data[1][spantype][0]=data[1][spantype][data[1][spantype].length-1];
		data[1][spantype][data[1][spantype].length-1]=temp;
}

var date=new Date();
var month=date.getMonth()-1;
var mdaynum=new Array (31,28,31,30,31,30,31,31,30,31,30,31);
var day=mdaynum[month];
month+=1;
if(month<10)
month='-0'+month;
if((parseInt(data[1][spantype][data[1][spantype].length-1])) %4==0)
	mdaynum[1]+=1;
	points[0]=data[1][spantype][0]+"-01-01";
	points[1]=data[1][spantype][data[1][spantype].length-1]+month+'-'+day;
	
	}
if(spantype==1){
	points[0]=data[1][0]+'-'+getMonthNum(data[1][spantype][0])+'-'+"01";
		points[1]=data[1][0]+'-'+getMonthNum(data[1][spantype][data[1][spantype].length-1])+'-'+getMonthDayNum(parseInt(data[1][0]),data[1][spantype][data[1][spantype].length-1]);
	
}
$.post("http://localhost/clinic/reporting/gender_agereport",{
	points:points
	},
	function (data){
		var option=document.getElementById("gender").value;
data=data.split("<br>");
var index=1;
var dataset={
		labels : [],
				datasets:[{
				fillColor : "rgba(220,220,220,0.5)",
				strokeColor : "rgba(220,220,220,0.8)",
				highlightFill: "rgba(220,220,220,0.75)",
				highlightStroke: "rgba(220,220,220,1)",
				data:[]
				},
				{
				fillColor : "rgba(151,187,205,0.5)",
				strokeColor : "rgba(151,187,205,0.8)",
				highlightFill : "rgba(151,187,205,0.75)",
				highlightStroke : "rgba(151,187,205,1)",
				data :[]
				}]
	}
	var agelist="";
	var age;
	var maleagelist="";
	var femaleagelist="";
	var getdata;
	var gender;
	var mlist="";
	var flist="";
	var style="'color:red;'";
	var secstyle="'color:green;float:right'";
	for(var x=0;x<data.length-1;x++){
		getdata=data[x].split('-');
		dataset.labels.push(getdata[0]);
		gender=getdata[2].split(':');
		dataset.datasets[0].data[x]=parseInt(gender[0]);
		if(parseInt(gender[0])>0){
		flist+="<span><b style="+style+">"+getdata[0]+"</b><b style="+secstyle+">"+gender[0]+"</b></span><br>";
		age=gender[1].split(',');
		for(var i=0;i<age.length-1;i++)
			femaleagelist+="<li>"+age[i]+"</li>"
		}
		gender=getdata[1].split(':');
		dataset.datasets[1].data[x]=parseInt(gender[0]);
		if(parseInt(gender[0])>0){
		mlist+="<span><b style="+style+">"+getdata[0]+"</b><b style="+secstyle+">"+gender[0]+"</b></span><br>";
	age=gender[1].split(',');
			for(var i=0;i<age.length-1;i++)
					maleagelist+="<li>"+age[i]+"</li>";
		}
	}
	$("#maleresult").html(mlist);
	$("#femaleresult").html(flist);
	$("#maleagelist").html(maleagelist);
	$("#femaleagelist").html(femaleagelist);
		if(option=="Female")
			index=0;
		
		var barchart={
					labels : [],
					datasets : [{
					}]
				};
				if(option=="Both")
					barchart=dataset;
					else{
		barchart.labels=dataset.labels;
		barchart.datasets[0]=dataset.datasets[index];
	}
	$("#myChart").html("");
		var ctx=document.getElementById("myChart").getContext("2d");
		var choice=document.getElementById("chartop").value;
		var chart;
		if(choice==0)
		 chart= new Chart(ctx).Bar( barchart, {responsive : true});
		else
		chart=new Chart(ctx).Line(barchart,{responsive:true});	
		$("#myChart").html(chart);
		chart.clear();
		$("#results").slideDown();
		if(option=="Both"){
			$("#female-log").show();
			$("#male-log").show();
			$("#male").show();
			$("#female").show();
			$("#mresult").show();
			$("#fresult").show();
			$("#fage").show();
			$("#mage").show();
		}
		else if(option=="Male"){
		$("#male-log").show();	
		$("#male").show();
		$("#mresult").show();
		$("#mage").show();
		$("#female-log").hide();
		$("#female").hide();
		$("#fresult").hide();
		$("#femaleresult").hide();
		$("#fage").hide();
		}
		else{
			$("#female-log").show();
			$("#female").show();
			$("#fresult").show();
			$("#fage").show();
			$("#male-log").hide();
			$("#male").hide();
			$("#mresult").hide();
			$("#maleresult").hide();
			$("#mage").hide();
			}
			});
}

}
function checkinputs(spantype){
	var check=-1;
	var inputs=new Array();
	if(spantype!="non"){
		check=0;
	var size=parseInt(spantype)+1;
	var checks=new Array("year","months");
			for(var x=0;x<size && document.getElementById(checks[x]).value!="";x++,check+=1)
					inputs[x]=document.getElementById(checks[x]).value;			
		check=check-size;
		
	}
	return (new Array(check,inputs));
}

/*function getDays(elem){
	if(elem.value<2)
		$("#days").slideUp();
				else
					$("#days").slideDown();
}*/

function populate(){
	var year=document.getElementById("year");
	var div=document.getElementById("span").value;
	var size=(div==1 && div!="non")?1:2;
	var values=limit("years",size);
	var years=values[0];
	if(div==1){
		year.value=years;
	getMonths(years);
	}
	
	else if(div==0){
			if(values[1]!="")
				years=years+" to "+values[1];
		}
		year.value=years;
	
}

function limit(id,size){
		var slots=document.getElementsByName(id);
		var temp=new Array();
		var ctr;
		var values=new Array("","");
		var x;
		for(x=0,ctr=0;x<slots.length && ctr<size;x++){
			if(slots[x].checked==true){
				temp[ctr]=x;
				values[ctr]=slots[x].value;
				ctr+=1;	
			}
		}
			if(ctr>=0){
			var toggle=(ctr<size)?false:true;
			for(var x=0,ctr=0;x<slots.length;x++){
				if(x!=temp[ctr])
						slots[x].disabled=toggle;
						else{
							if(ctr<temp.length)
									ctr+=1;
					}
			}
	}
	return values;
	}



function displayYear(){
var div=document.getElementById("ScrollCB1");
if(div.style.display=="none")
		$("#ScrollCB1").slideDown();
			else
				$("#ScrollCB1").slideUp();
}
function displayMonths(){
 var div=document.getElementById("ScrollCB");
if(div.style.display=="none")
	$("#ScrollCB").slideDown();
		else
			$("#ScrollCB").slideUp();
}
function getYear(){
	var date= new Date()
	var func="'populate()'";
	var text="Select Year";
	var value="non";
	var list="";
	var checkbox="'checkbox'";
	var name="years"
	for(date=date.getFullYear();date>2006;date--)
		list+="<input type="+checkbox+" "+"onclick="+func+" "+"name="+name+" "+"value="+date+">"+date+"<br>";
	$("#ScrollCB1").html(list);
}

function getMonths(years){
	var list="";
	if(years!=""){
	 var months=getArraymonths(-1);
	var date=new Date();
		var size=12;
		var func="'populatemonth()'"
		var checkbox="'checkbox'";
		var name="month"
		if(years==date.getFullYear())
			size=date.getMonth();
				for(var x=0;x<size;x++)
					list+="<input type="+checkbox+" "+"name="+name+" "+"onclick="+func+" "+"value="+(x+1)+">"+months[x]+"<br>";
	}
		$("#ScrollCB").html(list);
}

function SelectSpan(elem){
	getYear();
	
	if(elem.value<=1){
		if(elem.value==1)
			$("#months").slideDown();
		
				else{
					$("#months").slideUp();
					$("#ScrollCB").slideUp();
				}
				$("#year").slideDown();
	
	}
		else if(elem.value=="non"){
			$("#months").slideUp();
			$("#year").slideUp();
			$("#ScrollCB").slideUp();
			$("#ScrollCB1").slideUp();
		}
}

function populatemonth(){
	var div=document.getElementById("months");
	var values=limit("month",2);
		var temp="";
					if(values[0]!=""){
						temp=getArraymonths(values[0])
		if(values[1]!=""){
				if(values[0]<values[1])
					temp=temp+" to "+getArraymonths(values[1]);
						else	
							temp=getArraymonths(values[1])+" to "+temp;
			}
					}
			div.value=temp;
}
function getArraymonths(elem){
	var months=new Array("January","Febuary","March","April","May","June","July","August","September","October","November","December");	
	var temp;
	if(!isNaN(elem) && elem<1)
		temp=months;
	else if(elem=="")
		temp=elem;
	else
		temp=months[elem-1];
	
	return temp;
}

function getMonthNum(month){
var ret="01";
switch(month){
case "Febuary":ret="02";
break;
case "March":ret="03";
break;
case "April":ret="04";
break;
case "May":ret="05";
break;
case "June":ret="06";
break;
case "July":ret="07";
break;
case "August":ret="08";
break;
case "September":ret="09";
break;
case "October":ret="10";
break;
case "November":ret="11";
break;
case "December":ret="12";
break;
}
return ret;	
}
function getMonthDayNum(year,month){
var ret=31;
switch(month){
	case "Febuary":
	if(year%4==0)
		ret=29;
	else 
		ret=28;
	break;
	case "March":ret=31;
	break;
	case "April":ret=30;
	break;
	case "May":ret=31;
	break;
	case "June":ret=30;
	break;
	case "July":ret=31;
	break;
	case "August":ret=31;
	break;
	case "September":ret=30;
	break;
	case "October":ret=31;
	break;
	case "November":ret=30;
	break;
	case "December":ret=31;
	break;
}
return ret;
}
function showresult(elem){
	var div="maleresult";
	if(elem.id=="fresult")
	div="femaleresult";
	var id='#'+div;
	var gdiv=document.getElementById(div);
	if(gdiv.style.display=="none")
	$(id).slideDown();
		else
			$(id).slideUp();
}
function getAge(elem){
	var id="maleagelist";
	var myChart="myChartageM";
		if(elem.id!="mage"){
		id="femaleagelist";
		myChart="myChartageF";
		}
		var age=[0,0,0];
		var list=document.getElementById(id).getElementsByTagName("li");
		for(var x=0;x<list.length;x++){
			var i=parseInt(list[x].innerText);
				if(i<18)
					age[0]+=1;
				else if(i<60 && i>=18)
					age[1]+=1;
				else
					age[2]+=1;
		}
		var pieData = [
				{
					value: age[0],
					color:"#F7464A",
					highlight: "#FF5A5E",
					label: "Child"
				},
				{
					value: age[1],
					color: "#46BFBD",
					highlight: "#5AD3D1",
					label: "Adult"
				},
				{
					value: age[2],
					color: "#FDB45C",
					highlight: "#FFC870",
					label: "Senior Citizen"
				}
			]
			var ctx = document.getElementById("myChart").getContext("2d");
			var chart=new Chart(ctx).Pie(pieData);
			$("#myChart").html(chart);
}
</script>
