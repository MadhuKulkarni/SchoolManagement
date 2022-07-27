<?php
   if(!isset($_SERVER['HTTP_REFERER'])){
       // redirect them to your desired location
       header('location:../index.php');
       exit;
   }
   ?>
<?php include_once('head.php'); ?>
<?php include_once('header_teacher.php'); ?>
<?php include_once('sidebar2.php'); ?>
<?php include_once('alert.php'); ?>
<style>
   .form-control-feedback {
   pointer-events: auto;
<<<<<<< Updated upstream
   }
   .set-width-tooltip + .tooltip > .tooltip-inner { 
   min-width:180px;
   }
   .msk-fade {  
   -webkit-animation-name: animatetop;
   -webkit-animation-duration: 0.5s;
   animation-name: animatetop;
   animation-duration: 0.5s;
   }
   .modal-content1 {
   height: auto;
   min-height: 100%;
   border-radius: 0;
   position: absolute;
   left: 25%; 
   }
   /* Add Animation */
   @-webkit-keyframes animatetop {
   from {top:-300px; opacity:0} 
   to {top:0; opacity:1}
   }
   @keyframes animatetop {
   from {top:-300px; opacity:0}
   to {top:0; opacity:1}
   }
   .cal-table{
   width:100%;
   padding:0;
   margin:0;	
   }
   #calendar_dates{
   padding:10px;
   margin-left:10px;
   width:95%;	
   }
   .tHead{
   height:40px;
   background-color:#8e1c82;
   color:#FFF;
   text-align:center;
   border:1px solid #FFF;
   width:70px;
   }
   .cal-tr{
   height:50px;
   }
   .td_no_number{
   border:1px solid white;
   width:70px;
   background-color:#979045 ;
   padding:0;
   }
   .cal-number-td{
   border:1px solid white;
   width:70px;
   background-color:#677be2;
   color:white;
   }
   .h5{
   color:#FFF;
   display: inline-block;
   background:#636;
   width:15px;
   height:15px;	
   font-size:11px;
   font-weight:bold;
   font-family:Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif;
   text-align:center;
   float:right;
   padding-top:1px;
   margin-bottom:50%;
   }
   .div-event-c{
   margin-top:65%;
   height:17px;
   }
   #cal_month{
   width:20%;
   border-radius:5%;
   padding:0;
   }
   #cal_year{
   width:15%;
   border-radius:5%;
   margin-left:5px;
   padding:0;
   }
   #btnShow{
   margin-left:5px;
   }
=======
  
}

.set-width-tooltip + .tooltip > .tooltip-inner { 
     min-width:180px;
}

.msk-fade {  
      
    -webkit-animation-name: animatetop;
    -webkit-animation-duration: 0.5s;
    animation-name: animatetop;
    animation-duration: 0.5s;
	

}

.modal-content1 {
  height: auto;
  min-height: 100%;
  border-radius: 0;
  position: absolute;
  left: 25%; 
}

/* Add Animation */
@-webkit-keyframes animatetop {
    from {top:-300px; opacity:0} 
    to {top:0; opacity:1}
}

@keyframes animatetop {
    from {top:-300px; opacity:0}
    to {top:0; opacity:1}
}


.cal-table{
	
width:100%;
padding:0;
margin:0;	
}

#calendar_dates{
	padding:10px;
	margin-left:10px;
	width:95%;	
	
}

.tHead{
	
	height:40px;
	background-color:#8e1c82;
	color:#FFF;
	text-align:center;
	border:1px solid #FFF;
	width:70px;
}

.cal-tr{
	height:50px;
	
}

.td_no_number{
	border:1px solid white;
	width:70px;
	background-color:#979045 ;
	padding:0;
}



.cal-number-td{
	border:1px solid white;
	width:70px;
	background-color:#677be2;
	color:white;
	
		
}


.h5{
	color:#FFF;
	display: inline-block;
	background:#636;
	width:15px;
	height:15px;	
	font-size:11px;
	font-weight:bold;
	font-family:Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif;
	text-align:center;
	float:right;
	padding-top:1px;
	margin-bottom:50%;
	
}
.div-event-c{
	margin-top:65%;
	height:17px;
	
}

#cal_month{
	width:20%;
	border-radius:5%;
	
	padding:0;
}
#cal_year{
	width:15%;
	border-radius:5%;
	margin-left:5px;
	padding:0;
}

#btnShow{
	
	margin-left:5px;
	
}
@import url('https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@100;200;300;400;500;600;700&display=swap');

:root {
    --calendar-bg-color: #262829;
    --calendar-font-color: #FFF;
    --weekdays-border-bottom-color: #404040;
    --calendar-date-hover-color: #505050;
    --calendar-current-date-color: #1b1f21;
    --calendar-today-color: linear-gradient(to bottom, #03a9f4, #2196f3);
    --calendar-today-innerborder-color: transparent;
    --calendar-nextprev-bg-color: transparent;
    --next-prev-arrow-color : #000;
    --calendar-border-radius: 16px;
    --calendar-prevnext-date-color: #484848
}

* {
    padding: 0;
    margin: 0;
}

.calendar {
    font-family: 'IBM Plex Sans', sans-serif;
    position: relative;
    max-width: 400px; /*change as per your design need */
    min-width: 320px;
    background: #ffffff;
    color: #000;
    margin: 20px auto;
    box-sizing: border-box;
    overflow: hidden;
    font-weight: normal;
    border-radius: var(--calendar-border-radius);
    border-color: #828789;
    border: 1px solid;
}

.calendar-inner {
    padding: 10px 10px;
}

.calendar .calendar-inner .calendar-body {
    display: grid;
    grid-template-columns: repeat(7, 1fr);
    text-align: center;
}

.calendar .calendar-inner .calendar-body div {
    padding: 4px;
    min-height: 30px;
    line-height: 30px;
    border: 1px solid transparent;
    margin: 10px 2px 0px;
}

.calendar .calendar-inner .calendar-body div:nth-child(-n+7) {
    border: 1px solid transparent;
    border-bottom: 1px solid var(--weekdays-border-bottom-color);
}

.calendar .calendar-inner .calendar-body div:nth-child(-n+7):hover {
    border: 1px solid transparent;
    border-bottom: 1px solid var(--weekdays-border-bottom-color);
}

.calendar .calendar-inner .calendar-body div>a {
    color: black;
    text-decoration: none;
    display: flex;
    justify-content: center;
}

.calendar .calendar-inner .calendar-body div:hover {
    border: 1px solid var(--calendar-date-hover-color);
    border-radius: 4px;
}

.calendar .calendar-inner .calendar-body div.empty-dates:hover {
    border: 1px solid transparent;
}

.calendar .calendar-inner .calendar-controls {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
}

.calendar .calendar-inner .calendar-today-date {
    display: grid;
    text-align: center;
    cursor: pointer;
    margin: 3px 0px;
    background: #828789;
    padding: 8px 0px;
    border-radius: 10px;
    width: 80%;
    margin: auto;
    color: white;
}

.calendar .calendar-inner .calendar-controls .calendar-year-month {
    display: flex;
    min-width: 100px;
    justify-content: space-evenly;
    align-items: center;
}

.calendar .calendar-inner .calendar-controls .calendar-next {
    text-align: right;
}

.calendar .calendar-inner .calendar-controls .calendar-year-month .calendar-year-label,
.calendar .calendar-inner .calendar-controls .calendar-year-month .calendar-month-label {
    font-weight: 500;
    font-size: 20px;
}

.calendar .calendar-inner .calendar-body .calendar-today {
    background: var(--calendar-today-color);
    border-radius: 4px;
}

.calendar .calendar-inner .calendar-body .calendar-today:hover {
    border: 1px solid transparent;
}

.calendar .calendar-inner .calendar-body .calendar-today a {
    outline: 2px solid var(--calendar-today-innerborder-color);
}

.calendar .calendar-inner .calendar-controls .calendar-next a,
.calendar .calendar-inner .calendar-controls .calendar-prev a {
    color: var(--calendar-font-color);
    font-family: arial, consolas, sans-serif;
    font-size: 26px;
    text-decoration: none;
    padding: 4px 12px;
    display: inline-block;
    background: var(--calendar-nextprev-bg-color);
    margin: 10px 0 10px 0;
}

.calendar .calendar-inner .calendar-controls .calendar-next a svg,
.calendar .calendar-inner .calendar-controls .calendar-prev a svg {
    height: 20px;
    width: 20px;
}

.calendar .calendar-inner .calendar-controls .calendar-next a svg path,
.calendar .calendar-inner .calendar-controls .calendar-prev a svg path{
    fill: var(--next-prev-arrow-color);
}

.calendar .calendar-inner .calendar-body .prev-dates,
.calendar .calendar-inner .calendar-body .next-dates {
    color: var(--calendar-prevnext-date-color);
}

.calendar .calendar-inner .calendar-body .prev-dates:hover,
.calendar .calendar-inner .calendar-body .next-dates:hover {
  border: 1px solid transparent;
  pointer-events: none;
}
>>>>>>> Stashed changes
</style>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>
         Dashboard
         <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
         <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
         <li><a href="#">Dashboard</a></li>
      </ol>
   </section>
   <?php
      include_once('../controller/config.php');
      
      $my_index= $_SESSION["index_number"];
      
      $sql="SELECT * FROM teacher WHERE index_number='$my_index'";
      $result=mysqli_query($conn,$sql);
      $row=mysqli_fetch_assoc($result);
      $name=$row['i_name'];
      $id=$row['id'];
      
      ?>    
   <!-- Main content -->
   <section class="content">
   <!-- Info boxes -->
   <div class="row">
      <div class="col-md-3 col-sm-6 col-xs-12">
         <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="ion ion-ios-gear-outline"></i></span>
            <div class="info-box-content">
               <span class="info-box-text">My STUDENT</span>
               <?php
                  include_once('../controller/config.php');
                  
                  $sql1="SELECT * FROM subject_routing WHERE teacher_id='$id'";
                  $total_count2=0;
                  $my_student=0;
                  $current_year=date("Y");
                  
                  $result1=mysqli_query($conn,$sql1);
                  while($row1=mysqli_fetch_assoc($result1)){
                  	$sr_id=$row1['id'];
                  	
                  	$sql2="SELECT count(id) FROM student_subject WHERE sr_id='$sr_id' AND year='$current_year' AND _status=''";
                  	
                  	$result2=mysqli_query($conn,$sql2);
                  	$row2=mysqli_fetch_assoc($result2);
                  	$total_count2=$row2['count(id)'];
                  	$my_student+=$total_count2;
                  
                  }
                  
                  ?>   
               <span class="info-box-number"><?php echo $my_student; ?></span>
            </div>
            <!-- /.info-box-content -->
         </div>
         <!-- /.info-box -->
      </div>
      <!-- /.col -->
      <div class="col-md-3 col-sm-6 col-xs-12">
         <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-google-plus"></i></span>
            <div class="info-box-content">
               <span class="info-box-text">All Student</span>
               <?php
                  include_once('../controller/config.php');
                  
                  $sql1="SELECT count(id) FROM student WHERE _status=''";
                  $all_student=0;
                  
                  $result1=mysqli_query($conn,$sql1);
                  $row1=mysqli_fetch_assoc($result1);
                  $all_student=$row1['count(id)'];
                  
                  ?>             
               <span class="info-box-number"><?php echo $all_student; ?></span>
            </div>
            <!-- /.info-box-content -->
         </div>
         <!-- /.info-box -->
      </div>
      <!-- /.col -->
      <!-- fix for small devices only -->
      <div class="clearfix visible-sm-block"></div>
   </div>
   <!-- /.row -->
   <h5><?php echo $name; ?>,<strong><span style="color:#cf4ed4;"> Welcome back! </span></strong></h5>
   <div class="row" id="table1">
      <!--MSK-000132-1-->    
      <div class="col-md-8" >
         <!-- left column -->
         <center>
            <h4>Monthly Student Registration</h4>
         </center>
         <canvas id="lineChart" width="800" height="450"></canvas>
      </div>
      <script>
         function showLineChart(monthly_std_reg){	
          
         	var monthly_std_reg1 = JSON.parse("[" + monthly_std_reg + "]");
          
         	new Chart(document.getElementById("lineChart"), {
         		type: 'line',
         		data: {
         		  labels: ["January", "February", "March", "April", "May", "June","July", "August", "September", "October", "November", "December"],
         		  datasets: [
         			{
         			  label: "New Student Registration",
         			  borderColor: "#00c0ef",
         			  fill: false,
         			  data: monthly_std_reg1
         			 
         			}
         		  ]
         		},
         		options: {
         		  legend: { display: false },
         		  title: {
         			display: true,
         			text: ''
         		  },
         		  scales: {
         				yAxes: [{
         					ticks: {
         						beginAtZero:true
         					}
         				}]
         			}
         		}
         	});
         
         };
      </script>
      <?php
         include_once('../controller/config.php');
         $current_year=date("Y");
         $prefix="";
         $prefix1="";
         $monthly_std_reg="";
         $sr_id1="";
         $count5;
         
         for($j=0; $j<12; $j++){
         	$count5[$j]=0;
         }
         
         $month=array("January","February","March","April","May","June","July","August","September","October","November","December");
         
         $sql1="SELECT * FROM subject_routing WHERE teacher_id='$id'";
         $result1=mysqli_query($conn,$sql1);
         while($row1=mysqli_fetch_assoc($result1)){
         	
         	$sr_id=$row1['id'];
         	
         	for($i=0; $i<count($month); $i++){
         		
         		$sql="SELECT COUNT(id) FROM student_subject WHERE year='$current_year' AND reg_month='$month[$i]' AND _status='' AND sr_id='$sr_id'";
         		$result=mysqli_query($conn,$sql);
         		$row=mysqli_fetch_assoc($result);
         		$a=$row['COUNT(id)'];
         		$a=$a*1;
         		$count5[$i]+=$a;
         	
         	}
         	
         }
          
         	for($k=0; $k<count($month); $k++){
         		
         		$monthly_std_reg.=$prefix.'"'. $count5[$k].'"'; 
         		$prefix=',';
         		
         	}
         
         echo "<script>showLineChart('$monthly_std_reg');</script>";
         
         ?>
      <div class="col-md-4">
         <div id="calendar-container">
            <div id="calendar-header">
               <center>
                  <h4><span id="calendar_month_year"></span> <?php echo $current_year; ?> </h4>
               </center>
            </div>
            <input type="hidden" id="my_index" value="<?php echo $my_index; ?>">  
            <input type="hidden" id="my_type" value="<?php echo $my_type; ?>">                         
         </div>
         <div class="row1" id="row">
         </div>
      </div>
   </div>
   <div id="cEvent">
   </div>
   <script>
      var m2 = 0;
      
<<<<<<< Updated upstream
      function ShowEvents(status,my_index,my_type){
      	
      	var d = new Date();    //new Date('2017','08','25');
      	var month_name = ['January','February','March','April','May','June','July','August','September','Octomber','November','December'];	
      		
      	var m1 = d.getMonth(); //0-11
      	var y1 = d.getFullYear(); //2017
      		
      	if(status == 'K'){
      		var m3 = m1;
      	}
      		
      	if(status == 'N'){
      		m2++;
      		var m3 = m1 + m2;
      	}
      				
      	if(status == 'P'){
      		m2--;
      		var m3 = m1 + m2;
      	}
      				
      	if(m3 == 0){
      		$('#btn1').css('pointer-events', 'none');
      	}
      				
      	if(m3 == 11){
      		$('#btn2').css('pointer-events', 'none');
      	}
      	
      	var current_date = d.getDate();
      		
      	var xhttp = new XMLHttpRequest();//MSK-00105-Ajax Start  
      		xhttp.onreadystatechange = function() {
      				
      			if (this.readyState == 4 && this.status == 200){
      					//MSK-00107 
      				document.getElementById('row').innerHTML = this.responseText;//MSK-000132
      				
      				var start_date = $('#start_date').val().split(',');
      				var end_date = $('#end_date').val().split(',');
      				var color = $('#color').val().split(',');
      				var event_id = $('#event_id').val().split(',');
      			
      				var month = m3; //0-11
      				var year = y1; //2017 
      				var first_date = month_name[month] + " " + 1 + " " + year;
      				
      				var tmp = new Date(first_date).toDateString();
      				// Tue Aug 01 2017...
      				
      				var first_day = tmp.substring(0,3); //Thu
      				var day_name = ['Sun','Mon','Tue','Wed','Thu','Fri','Sat'];
      				var day_no = day_name.indexOf(first_day);  //4
      				var days = new Date(year, month+1, 0).getDate(); //31
      				// Thu Aug 31 2017...
      				
      				var calendar = get_calendar(day_no,days);
      				
      				document.getElementById("calendar_month_year").innerHTML = month_name[month];
      				document.getElementById("calendar_dates").appendChild(calendar);
      				$("#td_"+current_date).css("background-color", "#319a5b");
      				 
      				var count1 = start_date.length;
      				var k=0;
      				for(var i=0; i<count1; i++){
      					var s_date = parseInt(start_date[i], 10);
      					var e_date = parseInt(end_date[i], 10);
      					
      					var count = e_date - s_date;
      				
      					for(var j=0; j<=count; j++){
      					
      						k = s_date+j;
      						
      						$("#td_"+k).append('<div class="div-event-c" style="background-color:'+color[i]+'"><a id="event_"+'+[i]+' style="color:white;" href="#" onclick="showEvent('+event_id[i]+')"><i class="fa fa-calendar" aria-hidden="true"></i></a></div>');
      													
      					}
      					
      					
      				}
      
      			}
      				
      		};	
      		xhttp.open("GET", "all_events1.php?year=" + y1 + "&month="+m3 + "&my_type="+my_type + "&my_index="+my_index , true);	
      		xhttp.send();//MSK-00105-Ajax End
      		
      };
      
   </script>
   <div id="showEvent">
   </div>
   <script>
      function showEvent(event_id){
      	
      	var xhttp = new XMLHttpRequest();//MSK-00105-Ajax Start  
      		xhttp.onreadystatechange = function() {
      				
      			if (this.readyState == 4 && this.status == 200) {
      				document.getElementById('showEvent').innerHTML = this.responseText;//MSK-000132
      				$('#modalviewEvent').modal('show');
      			}
      				
      		};	
      		
      		xhttp.open("GET", "show_events1.php?event_id="+event_id , true);												
      		xhttp.send();//MSK-00105-Ajax End
      };
      
      function get_calendar(day_no,days){
      	
      	var table = document.createElement('table');
      	var tr = document.createElement('tr');
      	
      	table.className = 'cal-table';
      	
      	// row for the day letters
      	for(var c=0; c<=6; c++){
      		var th = document.createElement('th');
      		th.innerHTML =  ['S','M','T','W','T','F','S'][c];
      		tr.appendChild(th);
      		th.className = "tHead";
      		
      		
      	}
      	
      	table.appendChild(tr);
      	
      	//create 2nd row
      	
      	tr = document.createElement('tr');
      	
      	var c;
      	for(c=0; c<=6; c++){
      		
      		if(c== day_no){
      			break;
      		}
      		var td = document.createElement('td');
      		td.innerHTML = "";
      		tr.appendChild(td);
      		td.className = "td_no_number";
      		tr.className = 'cal-tr';
      	}
      	
      	var count = 1;
      	for(; c<=6; c++){
      		var td = document.createElement('td');
      		td.id = "td_"+count;
      		td.className = 'cal-number-td';
      		tr.appendChild(td);
      		tr.className = 'cal-tr';
      		
      		var h5 = document.createElement('h5');
      		h5.className = 'h5';
      		td.appendChild(h5);
      		h5.innerHTML = count;
      		count++;
      		
      		
      	}
      	table.appendChild(tr);
      	
      	//rest of the date rows
      	
      	for(var r=3; r<=7; r++){
      		tr = document.createElement('tr');
      		for(var c=0; c<=6; c++){
      			
      			if(count > days){
      				for(; c<=6; c++){
      		
      					var td = document.createElement('td');
      					td.innerHTML = "";
      					tr.appendChild(td);
      					td.className = "td_no_number";
      					tr.className = 'cal-tr';
      				}
      				table.appendChild(tr);
      				return table;
      			}
      			
      			var td = document.createElement('td');
      			//td.innerHTML = count;
      			td.id = "td_"+count;
      			//td.style.padding = 0;
      			td.className = 'cal-number-td';
      			
      			tr.appendChild(td);
      			
      			var h5 = document.createElement('h5');
      			h5.className = 'h5';
      			td.appendChild(h5);
      			h5.innerHTML = count;
      			count++;
      			tr.className = 'cal-tr';
      			
      		}
      		table.appendChild(tr);
      		
      	}
      	
      };	
   </script>
   <?php 
      $my_index=$_SESSION['index_number'];
      $my_type=$_SESSION['type'];
      
      echo '<script>','ShowEvents("K",'.$my_index.',"'.$my_type.'");','</script>';
      
      ?>   
   <!--redirect your own url when clicking browser back button -->
   <script>
      (function(window, location) {
      history.replaceState(null, document.title, location.pathname+"#!/history");
      history.pushState(null, document.title, location.pathname);
      
      window.addEventListener("popstate", function() {
        if(location.hash === "#!/history") {
          history.replaceState(null, document.title, location.pathname);
          setTimeout(function(){
            location.replace("../index.php");//path to when click back button
          },0);
        }
      }, false);
      }(window, location));
   </script>
</div>
<!-- /.content-wrapper -->  
<?php include_once('footer.php'); ?>
=======
      <div class="row" id="table1"><!--MSK-000132-1-->    
        	<div class="col-md-8">
           		<center><h4 class="box-title">Monthly Salary</h4></center>
                <canvas id="barChart" width="800" height="438"></canvas>
  			</div>

<script>

function showBarChart(monthly_salary){	
 
	var monthly_salary1 = JSON.parse("[" + monthly_salary + "]");

	new Chart(document.getElementById("barChart"), {
		type: 'bar',
		data: {
			
		   labels: ["January", "February", "March", "April", "May", "June","July", "August", "September", "October", "November", "December"],
		  datasets: [
			{
			  label: "Monthly Income($)",
			  backgroundColor: ["#e80a68", "#d74340","#8e3d87","#40b9d7","#26ab8d","#7e5c3e", "#3e447e","#638e3d","#766677","#f35df8","#e49e23","#f68b98"],
			  data: monthly_salary1 
				//data: [12, 19, 3, 5, 10, 3,12, 19, 10, 5, 10, 15],
			}
		  ]
		},
		options: {
		  legend: { display: false },
		  title: {
			display: true,
			text: ''
		  },
		  scales: {
				yAxes: [{
					ticks: {
						beginAtZero:true
					}
				}]
			}
		}
	});

};
</script>

<?php
include_once('../controller/config.php');
$current_year=date("Y");
$prefix="";
$monthly_salary1="";

$month=array("January","February","March","April","May","June","July","August","September","October","November","December");

for($i=0; $i<count($month); $i++){
	$sql="SELECT SUM(paid) FROM teacher_salary WHERE index_number='$my_index' AND year='$current_year' AND month='$month[$i]'";
	$result=mysqli_query($conn,$sql);
	$row=mysqli_fetch_assoc($result);
	$monthly_salary1.=$prefix.'"'.$row['SUM(paid)'].'"';
	$prefix=',';
	
}
echo "<script>showBarChart('$monthly_salary1');</script>";

?>   

			<div class="col-md-4">
                <!-- <div id="calendar-container">
                	<div id="calendar-header">
                    	<center><h4><span id="calendar_month_year"></span> <?php echo $current_year; ?> </h4></center>
        			</div>
                    <input type="hidden" id="my_index" value="<?php echo $my_index; ?>">  
                    <input type="hidden" id="my_type" value="<?php echo $my_type; ?>">                         
                 </div>
                 <div class="row1" id="row">
                        
                 </div> -->
				 <div class="calendar"></div>
       		</div>
        </div>  
	
    <div id="cEvent">
    
    </div>  
<script>
	function CalendarControl() {
    const calendar = new Date();
    const calendarControl = {
      localDate: new Date(),
      prevMonthLastDate: null,
      calWeekDays: ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
      calMonthName: [
        "Jan",
        "Feb",
        "Mar",
        "Apr",
        "May",
        "Jun",
        "Jul",
        "Aug",
        "Sep",
        "Oct",
        "Nov",
        "Dec"
      ],
      daysInMonth: function (month, year) {
        return new Date(year, month, 0).getDate();
      },
      firstDay: function () {
        return new Date(calendar.getFullYear(), calendar.getMonth(), 1);
      },
      lastDay: function () {
        return new Date(calendar.getFullYear(), calendar.getMonth() + 1, 0);
      },
      firstDayNumber: function () {
        return calendarControl.firstDay().getDay() + 1;
      },
      lastDayNumber: function () {
        return calendarControl.lastDay().getDay() + 1;
      },
      getPreviousMonthLastDate: function () {
        let lastDate = new Date(
          calendar.getFullYear(),
          calendar.getMonth(),
          0
        ).getDate();
        return lastDate;
      },
      navigateToPreviousMonth: function () {
        calendar.setMonth(calendar.getMonth() - 1);
        calendarControl.attachEventsOnNextPrev();
      },
      navigateToNextMonth: function () {
        calendar.setMonth(calendar.getMonth() + 1);
        calendarControl.attachEventsOnNextPrev();
      },
      navigateToCurrentMonth: function () {
        let currentMonth = calendarControl.localDate.getMonth();
        let currentYear = calendarControl.localDate.getFullYear();
        calendar.setMonth(currentMonth);
        calendar.setYear(currentYear);
        calendarControl.attachEventsOnNextPrev();
      },
      displayYear: function () {
        let yearLabel = document.querySelector(".calendar .calendar-year-label");
        yearLabel.innerHTML = calendar.getFullYear();
      },
      displayMonth: function () {
        let monthLabel = document.querySelector(
          ".calendar .calendar-month-label"
        );
        monthLabel.innerHTML = calendarControl.calMonthName[calendar.getMonth()];
      },
      selectDate: function (e) {
        console.log(
          `${e.target.textContent} ${
            calendarControl.calMonthName[calendar.getMonth()]
          } ${calendar.getFullYear()}`
        );
      },
      plotSelectors: function () {
        document.querySelector(
          ".calendar"
        ).innerHTML += `<div class="calendar-inner"><div class="calendar-controls">
          <div class="calendar-prev"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="128" height="128" viewBox="0 0 128 128"><path fill="#666" d="M88.2 3.8L35.8 56.23 28 64l7.8 7.78 52.4 52.4 9.78-7.76L45.58 64l52.4-52.4z"/></svg></a></div>
          <div class="calendar-year-month">
          <div class="calendar-month-label"></div>
          <div>-</div>
          <div class="calendar-year-label"></div>
          </div>
          <div class="calendar-next"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="128" height="128" viewBox="0 0 128 128"><path fill="#666" d="M38.8 124.2l52.4-52.42L99 64l-7.77-7.78-52.4-52.4-9.8 7.77L81.44 64 29 116.42z"/></svg></a></div>
          </div>
          <div class="calendar-today-date">Today: 
            ${calendarControl.calWeekDays[calendarControl.localDate.getDay()]}, 
            ${calendarControl.localDate.getDate()}, 
            ${calendarControl.calMonthName[calendarControl.localDate.getMonth()]} 
            ${calendarControl.localDate.getFullYear()}
          </div>
          <div class="calendar-body"></div></div>`;
      },
      plotDayNames: function () {
        for (let i = 0; i < calendarControl.calWeekDays.length; i++) {
          document.querySelector(
            ".calendar .calendar-body"
          ).innerHTML += `<div>${calendarControl.calWeekDays[i]}</div>`;
        }
      },
      plotDates: function () {
        document.querySelector(".calendar .calendar-body").innerHTML = "";
        calendarControl.plotDayNames();
        calendarControl.displayMonth();
        calendarControl.displayYear();
        let count = 1;
        let prevDateCount = 0;
  
        calendarControl.prevMonthLastDate = calendarControl.getPreviousMonthLastDate();
        let prevMonthDatesArray = [];
        let calendarDays = calendarControl.daysInMonth(
          calendar.getMonth() + 1,
          calendar.getFullYear()
        );
        // dates of current month
        for (let i = 1; i < calendarDays; i++) {
          if (i < calendarControl.firstDayNumber()) {
            prevDateCount += 1;
            document.querySelector(
              ".calendar .calendar-body"
            ).innerHTML += `<div class="prev-dates"></div>`;
            prevMonthDatesArray.push(calendarControl.prevMonthLastDate--);
          } else {
            document.querySelector(
              ".calendar .calendar-body"
            ).innerHTML += `<div class="number-item" data-num=${count}><a class="dateNumber" href="#">${count++}</a></div>`;
          }
        }
        //remaining dates after month dates
        for (let j = 0; j < prevDateCount + 1; j++) {
          document.querySelector(
            ".calendar .calendar-body"
          ).innerHTML += `<div class="number-item" data-num=${count}><a class="dateNumber" href="#">${count++}</a></div>`;
        }
        calendarControl.highlightToday();
        calendarControl.plotPrevMonthDates(prevMonthDatesArray);
        calendarControl.plotNextMonthDates();
      },
      attachEvents: function () {
        let prevBtn = document.querySelector(".calendar .calendar-prev a");
        let nextBtn = document.querySelector(".calendar .calendar-next a");
        let todayDate = document.querySelector(".calendar .calendar-today-date");
        let dateNumber = document.querySelectorAll(".calendar .dateNumber");
        prevBtn.addEventListener(
          "click",
          calendarControl.navigateToPreviousMonth
        );
        nextBtn.addEventListener("click", calendarControl.navigateToNextMonth);
        todayDate.addEventListener(
          "click",
          calendarControl.navigateToCurrentMonth
        );
        for (var i = 0; i < dateNumber.length; i++) {
            dateNumber[i].addEventListener(
              "click",
              calendarControl.selectDate,
              false
            );
        }
      },
      highlightToday: function () {
        let currentMonth = calendarControl.localDate.getMonth() + 1;
        let changedMonth = calendar.getMonth() + 1;
        let currentYear = calendarControl.localDate.getFullYear();
        let changedYear = calendar.getFullYear();
        if (
          currentYear === changedYear &&
          currentMonth === changedMonth &&
          document.querySelectorAll(".number-item")
        ) {
          document
            .querySelectorAll(".number-item")
            [calendar.getDate() - 1].classList.add("calendar-today");
        }
      },
      plotPrevMonthDates: function(dates){
        dates.reverse();
        for(let i=0;i<dates.length;i++) {
            if(document.querySelectorAll(".prev-dates")) {
                document.querySelectorAll(".prev-dates")[i].textContent = dates[i];
            }
        }
      },
      plotNextMonthDates: function(){
       let childElemCount = document.querySelector('.calendar-body').childElementCount;
       //7 lines
       if(childElemCount > 42 ) {
           let diff = 49 - childElemCount;
           calendarControl.loopThroughNextDays(diff);
       }

       //6 lines
       if(childElemCount > 35 && childElemCount <= 42 ) {
        let diff = 42 - childElemCount;
        calendarControl.loopThroughNextDays(42 - childElemCount);
       }

      },
      loopThroughNextDays: function(count) {
        if(count > 0) {
            for(let i=1;i<=count;i++) {
                document.querySelector('.calendar-body').innerHTML += `<div class="next-dates">${i}</div>`;
            }
        }
      },
      attachEventsOnNextPrev: function () {
        calendarControl.plotDates();
        calendarControl.attachEvents();
      },
      init: function () {
        calendarControl.plotSelectors();
        calendarControl.plotDates();
        calendarControl.attachEvents();
      }
    };
    calendarControl.init();
  }
  
  const calendarControl = new CalendarControl();
</script>
    
<!-- <script>
var m2 = 0;

function ShowEvents(status,my_index,my_type){
	
	var d = new Date();    //new Date('2017','08','25');
	var month_name = ['January','February','March','April','May','June','July','August','September','Octomber','November','December'];	
		
	var m1 = d.getMonth(); //0-11
	var y1 = d.getFullYear(); //2017
		
	if(status == 'K'){
		var m3 = m1;
	}
		
	if(status == 'N'){
		m2++;
		var m3 = m1 + m2;
	}
				
	if(status == 'P'){
		m2--;
		var m3 = m1 + m2;
	}
				
	if(m3 == 0){
		$('#btn1').css('pointer-events', 'none');
	}
				
	if(m3 == 11){
		$('#btn2').css('pointer-events', 'none');
	}
	
	var current_date = d.getDate();
		
	var xhttp = new XMLHttpRequest();//MSK-00105-Ajax Start  
		xhttp.onreadystatechange = function() {
				
			if (this.readyState == 4 && this.status == 200){
					//MSK-00107 
				document.getElementById('row').innerHTML = this.responseText;//MSK-000132
				
				var start_date = $('#start_date').val().split(',');
				var end_date = $('#end_date').val().split(',');
				var color = $('#color').val().split(',');
				var event_id = $('#event_id').val().split(',');
			
				var month = m3; //0-11
				var year = y1; //2017 
				var first_date = month_name[month] + " " + 1 + " " + year;
				
				var tmp = new Date(first_date).toDateString();
				// Tue Aug 01 2017...
				
				var first_day = tmp.substring(0,3); //Thu
				var day_name = ['Sun','Mon','Tue','Wed','Thu','Fri','Sat'];
				var day_no = day_name.indexOf(first_day);  //4
				var days = new Date(year, month+1, 0).getDate(); //31
				// Thu Aug 31 2017...
				
				var calendar = get_calendar(day_no,days);
				
				document.getElementById("calendar_month_year").innerHTML = month_name[month];
				document.getElementById("calendar_dates").appendChild(calendar);
				$("#td_"+current_date).css("background-color", "#319a5b");
				 
				var count1 = start_date.length;
				var k=0;
				for(var i=0; i<count1; i++){
					var s_date = parseInt(start_date[i], 10);
					var e_date = parseInt(end_date[i], 10);
					
					var count = e_date - s_date;
				
					for(var j=0; j<=count; j++){
					
						k = s_date+j;
						
						$("#td_"+k).append('<div class="div-event-c" style="background-color:'+color[i]+'"><a id="event_"+'+[i]+' style="color:white;" href="#" onclick="showEvent('+event_id[i]+')"><i class="fa fa-calendar" aria-hidden="true"></i></a></div>');
													
					}
					
					
				}

			}
				
		};	
		xhttp.open("GET", "all_events1.php?year=" + y1 + "&month="+m3 + "&my_type="+my_type + "&my_index="+my_index , true);	
		xhttp.send();//MSK-00105-Ajax End
		
};

</script> -->

	<div id="showEvent">
    
    </div>
    
<script>

function showEvent(event_id){
	
	var xhttp = new XMLHttpRequest();//MSK-00105-Ajax Start  
		xhttp.onreadystatechange = function() {
				
			if (this.readyState == 4 && this.status == 200) {
				document.getElementById('showEvent').innerHTML = this.responseText;//MSK-000132
				$('#modalviewEvent').modal('show');
			}
				
		};	
		
		xhttp.open("GET", "show_events1.php?event_id="+event_id , true);												
		xhttp.send();//MSK-00105-Ajax End
};

function get_calendar(day_no,days){
	
	var table = document.createElement('table');
	var tr = document.createElement('tr');
	
	table.className = 'cal-table';
	
	// row for the day letters
	for(var c=0; c<=6; c++){
		var th = document.createElement('th');
		th.innerHTML =  ['S','M','T','W','T','F','S'][c];
		tr.appendChild(th);
		th.className = "tHead";
		
		
	}
	
	table.appendChild(tr);
	
	//create 2nd row
	
	tr = document.createElement('tr');
	
	var c;
	for(c=0; c<=6; c++){
		
		if(c== day_no){
			break;
		}
		var td = document.createElement('td');
		td.innerHTML = "";
		tr.appendChild(td);
		td.className = "td_no_number";
		tr.className = 'cal-tr';
	}
	
	var count = 1;
	for(; c<=6; c++){
		var td = document.createElement('td');
		td.id = "td_"+count;
		td.className = 'cal-number-td';
		tr.appendChild(td);
		tr.className = 'cal-tr';
		
		var h5 = document.createElement('h5');
		h5.className = 'h5';
		td.appendChild(h5);
		h5.innerHTML = count;
		count++;
		
		
	}
	table.appendChild(tr);
	
	//rest of the date rows
	
	for(var r=3; r<=7; r++){
		tr = document.createElement('tr');
		for(var c=0; c<=6; c++){
			
			if(count > days){
				for(; c<=6; c++){
		
					var td = document.createElement('td');
					td.innerHTML = "";
					tr.appendChild(td);
					td.className = "td_no_number";
					tr.className = 'cal-tr';
				}
				table.appendChild(tr);
				return table;
			}
			
			var td = document.createElement('td');
			//td.innerHTML = count;
			td.id = "td_"+count;
			//td.style.padding = 0;
			td.className = 'cal-number-td';
			
			tr.appendChild(td);
			
			var h5 = document.createElement('h5');
			h5.className = 'h5';
			td.appendChild(h5);
			h5.innerHTML = count;
			count++;
			tr.className = 'cal-tr';
			
		}
		table.appendChild(tr);
		
	}
	
};	
</script>
    
<?php 

$my_index=$_SESSION['index_number'];
$my_type=$_SESSION['type'];

echo '<script>','ShowEvents("K",'.$my_index.',"'.$my_type.'");','</script>';

?>         

	<div class="row" >
    	<div class="col-md-10" ><!-- left column -->
        	<center><h4>Monthly Student Registration</h4></center>
            
            <canvas id="lineChart" width="800" height="450"></canvas>
         </div>  
     </div>
		
<script>
                    
function showLineChart(monthly_std_reg){	
 
	var monthly_std_reg1 = JSON.parse("[" + monthly_std_reg + "]");
 
	new Chart(document.getElementById("lineChart"), {
		type: 'line',
		data: {
		  labels: ["January", "February", "March", "April", "May", "June","July", "August", "September", "October", "November", "December"],
		  datasets: [
			{
			  label: "New Student Registration",
			  borderColor: "#00c0ef",
			  fill: false,
			  data: monthly_std_reg1
			 
			}
		  ]
		},
		options: {
		  legend: { display: false },
		  title: {
			display: true,
			text: ''
		  },
		  scales: {
				yAxes: [{
					ticks: {
						beginAtZero:true
					}
				}]
			}
		}
	});

};
</script>

<?php
include_once('../controller/config.php');
$current_year=date("Y");
$prefix="";
$prefix1="";
$monthly_std_reg="";
$sr_id1="";
$count5;

for($j=0; $j<12; $j++){
	$count5[$j]=0;
}

$month=array("January","February","March","April","May","June","July","August","September","October","November","December");

$sql1="SELECT * FROM subject_routing WHERE teacher_id='$id'";
$result1=mysqli_query($conn,$sql1);
while($row1=mysqli_fetch_assoc($result1)){
	
	$sr_id=$row1['id'];
	
	for($i=0; $i<count($month); $i++){
		
		$sql="SELECT COUNT(id) FROM student_subject WHERE year='$current_year' AND reg_month='$month[$i]' AND _status='' AND sr_id='$sr_id'";
		$result=mysqli_query($conn,$sql);
		$row=mysqli_fetch_assoc($result);
		$a=$row['COUNT(id)'];
		$a=$a*1;
		$count5[$i]+=$a;
	
	}
	
}
 
	for($k=0; $k<count($month); $k++){
		
		$monthly_std_reg.=$prefix.'"'. $count5[$k].'"'; 
		$prefix=',';
		
	}

echo "<script>showLineChart('$monthly_std_reg');</script>";

?>

<!--redirect your own url when clicking browser back button -->
<script>
(function(window, location) {
history.replaceState(null, document.title, location.pathname+"#!/history");
history.pushState(null, document.title, location.pathname);

window.addEventListener("popstate", function() {
  if(location.hash === "#!/history") {
    history.replaceState(null, document.title, location.pathname);
    setTimeout(function(){
      location.replace("../index.php");//path to when click back button
    },0);
  }
}, false);
}(window, location));
</script>
	    
</div><!-- /.content-wrapper -->  
 
<?php include_once('footer.php'); ?>
>>>>>>> Stashed changes
