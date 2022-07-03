
<?php
if(!isset($_SERVER['HTTP_REFERER'])){
    // redirect them to your desired location
    header('location:../index.php');
    exit;
}
?><?php include_once('head.php'); ?>
<?php include_once('header_teacher.php'); ?>
<?php include_once('sidebar2.php'); ?>
<?php include_once('sidebar2.php'); 
include_once('../controller/config.php');
?>


<style>

.form-control-feedback {
  
   pointer-events: auto;
  
}

.set-width-tooltip + .tooltip > .tooltip-inner { 
     min-width:180px;
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
	background-color:#979045;
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
	width:25px;
	height:25px;	
	font-size:14px;
	font-weight:bold;
	font-family:Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif;
	text-align:center;
	float:right;
	padding-top:5px;
	margin-bottom:20px;
	
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





.present{
	background-color:#00FF66;
	
}

.absent{
	background-color:#FF0033;
	
}

.not_held{
	background-color:#FFCC33;
	
}
</style>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
    <section class="content-header">
    	<h1>
        	Attendance
        	<small>Preview</small>
        </h1>
        <ol class="breadcrumb">
        	<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Attendance</a></li>
            <li><a href="#">My Attendance</a></li>
    	</ol>
	</section>
    
<script>

var current_day_no;
var status;
var calendar_month_year;

function show_calendar(){
	
	var status = $('#status5').val().split(',');
	var date_no2 = $('#date_no2').val().split(',');
	var count5 = date_no2.length;
	
		var d = new Date();    //new Date('2017','08','25');
		var month_name = ['January','February','March','April','May','June','July','August','September','Octomber','November','December'];	
		
		
		var month = d.getMonth(); //0-11
		var year = d.getFullYear(); //2017 
		var current_date = d.getDate();
		var first_date = month_name[month] + " " + 1 + " " + year;
		
		// August 31 2017
		
		var tmp = new Date(first_date).toDateString();
		// Tue Aug 01 2017...
		
		var first_day = tmp.substring(0,3); //Thu
		var day_name = ['Sun','Mon','Tue','Wed','Thu','Fri','Sat'];
		var day_no = day_name.indexOf(first_day);  //4
		var days = new Date(year, month+1, 0).getDate(); //31
		// Thu Aug 31 2017...
		
		var calendar = get_calendar(day_no,days);
		
		document.getElementById("calendar_month_year").innerHTML = month_name[month]+" "+year;
		document.getElementById("calendar_dates").appendChild(calendar);
				
		for(var i=0; i<count5; i++){
			var d_no = parseInt(date_no2[i], 10);
			
			if(status[i] == 'Present'){
				$("#td_"+d_no).css("background-color", "#00FF66");
				
			}
			
			if(status[i] == 'Absent'){
				$("#td_"+d_no).css("background-color", "#FF0033");
			}
		}
				
}


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
		h5.id="h5_"+count;
		h5.className = 'h5';
		td.appendChild(h5);
		h5.innerHTML = count;
		count++;
		
	}
	table.appendChild(tr);
	
	//rest of the date rows
	;
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
    
    <!-- table for view all records -->     
	<section class="content" > <!-- Start of table section -->
    	<div class="row"><!--MSK-000132-1-->    
            <div class="col-md-12">
            	<div class="box">
                	<div class="box-header">
                    	<h3 class="box-title" style="font-weight:bold;">My Attendance</h3>
                	</div><!-- /.box-header -->
					
                    <div class="box-body">
						<h3></h3>
                         <div class="row">
						 	<div class="col-md-12" style=" margin-bottom:50px;">
								<form class="form-inline" action="export.php" method="post">
									<div class="selectclass form-group" style="margin:15px">
										<label for="className" style="margin-right:8px;">Class</label>
										<select class="form-control" name="className" id="className">
											<option value="">Select Class</option>
											<?php 
												$sql = "select * from grade";
												$result = mysqli_query($conn, $sql);
												if (mysqli_num_rows($result) > 0){
													while ($row = mysqli_fetch_assoc($result)){
														echo "
															<option value='".$row["name"]."'>{$row["name"]}</option>
														";
													}
												}
											?>
										</select>
									</div>
									<div class="selectsubject form-group" style="margin:15px">
										<label for="subjectInp" style="margin-right:8px;">Subject</label>
										<select class="form-control" name="subjectInp" id="subjectInp">
											<option value="">Select Subject</option>
											<?php 
												$sql = "select distinct subject from my_attendance";
												$result = mysqli_query($conn, $sql);
												if (mysqli_num_rows($result) > 0){
													while ($row = mysqli_fetch_assoc($result)){
														echo '
															<option value='.$row["subject"].'>'.$row["subject"].'</option>
														';
													}
												}
											?>
										</select>
									</div>
									<div class="selectmonth form-group" style="margin:15px">
										<label for="monthInp" style="margin-right:8px;">Month</label>
										<select class="form-control" name="monthInp" id="monthInp">
											<option value="">Select Month</option>
											<?php 
												$sql = "select distinct month from my_attendance";
												$result = mysqli_query($conn, $sql);
												if (mysqli_num_rows($result) > 0){
													while ($row = mysqli_fetch_assoc($result)){
														echo '
															<option value='.$row["month"].'>'.$row["month"].'</option>
														';
													}
												}
											?>
										</select>
									</div>
									<div class="selectyear form-group" style="margin:15px">
										<label for="yearInp" style="margin-right:8px;">Year</label>
										<select class="form-control" name="yearInp" id="yearInp">
											<option value="">Select Year</option>
											<?php 
												$sql = "select distinct year from my_attendance";
												$result = mysqli_query($conn, $sql);
												if (mysqli_num_rows($result) > 0){
													while ($row = mysqli_fetch_assoc($result)){
														echo '
															<option value='.$row["year"].'>'.$row["year"].'</option>
														';
													}
												}
											?>
										</select>
									</div>
									<button value="Filter" id="filter" name="submit" class="action btn btn-sm btn-info">Filter</button>
									<input type="submit" value="Export" id="export" name="submit" class=" btn btn-sm btn-info"/>
								</form>
							</div>
							<div class="msg"></div>
							<div class=" col-md-9  table-responsive" id="table1">
								
							</div>

						</div>
                	</div><!-- /.box-body -->           
            	</div><!-- /.box-->
        	</div> 
		</div>
	</section>   
     
</div><!-- /.content-wrapper -->  

<!--redirect your own url when clicking browser back button -->
<script>
$('body').on('click', '#filter', function(e){
   e.preventDefault();
   const subjectInp= $('#subjectInp').val();
   const className= $('#className').val();
   const yearInp= $('#yearInp').val();
   const monthInp= $('#monthInp').val();
   const action=$(this).attr("id");
//    console.log(action);

   if(!(yearInp=='')){
      $('#table1').html("").css("color", "black");
      $('.msg').html("<h4 style='font-weight:bold;'>Filtered Result:</h4>").css("margin-left", "14px");
      $.ajax({
          url:"export.php",    
          type: "post",
		  data:{action:action, className:className, subjectInp:subjectInp, yearInp:yearInp, monthInp:monthInp },
          success:function(result){ //result will have the _page contents
            $('#table1').html(result);
			$('#table1').find('table').dataTable();
				

            // $('.subjectVal').html(sub);
            // $('.timeVal').html(time);
            // $('.dateVal').html(dt);

           
          }
      });
   }else{
      $('#table1').html("Please choose atleast an year to proceed!!!").css("color", "red");
      
   }
   
});

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
              
<?php include_once('footer.php');?>