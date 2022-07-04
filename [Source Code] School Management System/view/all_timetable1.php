<?php
if(!isset($_SERVER['HTTP_REFERER'])){
    // redirect them to your desired location
    header('location:../index.php');
    exit;
}
?>
<?php include_once('head.php'); ?>
<?php include_once('header_student.php'); ?>
<?php include_once('sidebar1.php'); ?>

<style>

.form-control-feedback {
  
   pointer-events: auto;
  
}

.set-width-tooltip + .tooltip > .tooltip-inner { 
     min-width:180px;

}

#timetable1 td, #timetable1 th {
  border: 1px solid #ddd;
  padding: 8px;
}
#timetable1 tr:nth-child(even){background-color: #f2f2f2;}
#timetable1 tr:hover {background-color: #ddd;}
#timetable1 th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #ffffcc;
  color: black;
}

</style>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
    <section class="content-header">
    	<h1>
        	Timetable
        	<small>Preview</small>
        </h1>
        <ol class="breadcrumb">
        	<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">All Timetable</a></li>
    	</ol>
	</section>
    
	 <!-- table for view all records -->
	<section class="content" > <!-- Start of table section -->
    	<div class="row" id="table1"><!--MSK-000132-1-->
        	<div class="col-md-10">
                <div class="box">
                    <div class="box-header">
<?php
include_once('../controller/config.php');

$index=$_SESSION["index_number"];
$current_year=date('Y');

$sql="SELECT * FROM student_grade WHERE index_number='$index' and year='$current_year'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$id=$row['grade_id']; 

$sql1="SELECT * FROM grade WHERE id='$id'";
$result1=mysqli_query($conn,$sql1);
$row1=mysqli_fetch_assoc($result1);
$name=$row1['name'];
       
        
?>        
                    <h3 class="box-title">Timetable - <?php echo $name; ?> </h3>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive">
                    <table class="table table-bordered table-striped" id="timetable1">
                        <thead style="color:white; background-color:#666;">
							<th class="col-md-1">Date</th>
                            <th class="col-md-1">Time</th>
                            <th class="col-md-1">Sunday</th>
                            <th class="col-md-1">Monday</th>
                            <th class="col-md-1">Tuesday</th>
                            <th class="col-md-1">Wednesday</th>
                            <th class="col-md-1">Thursday</th>
                            <th class="col-md-1">Friday</th>
                            <th class="col-md-1">Saturday</th>
                         </thead>
                         <tbody>
                 	
<?php
include_once('../controller/config.php');

$index=$_SESSION["index_number"];
$current_year=date('Y');


$sql1="SELECT * FROM student_grade WHERE index_number='$index'";
$result1=mysqli_query($conn,$sql1);
$row1=mysqli_fetch_assoc($result1);
$grade=$row1['grade_id'];


$sql2="SELECT 
	   id, time_date, start_time,end_time
       FROM
          timetable
       WHERE
          grade_id='$grade'  
		  GROUP BY
	  start_time  
   ORDER BY
	  start_time";
		  

		  
$result2=mysqli_query($conn,$sql2);
while($row2=mysqli_fetch_assoc($result2)){
	
	$s_time=$row2['start_time'];
	$e_time=$row2['end_time'];
		
?>    
                 	<tr>
					 <td><?php echo $row2['time_date'];?> </td>
                    	<td >
                        	<?php echo $s_time." - ".$e_time; ?>		
                            
                        </td>
                         <td >
<?php 
include_once('../controller/config.php');

$sql="select subject.name as s_name,teacher.i_name as t_name,class_room.name as c_name,timetable.meeting_link as t_link
      from timetable
	  inner join subject
	  on timetable.subject_id=subject.id
	  inner join teacher
	  on timetable.teacher_id=teacher.id
	  inner join class_room
	  on timetable.classroom_id=class_room.id
	  where timetable.grade_id='$grade' and timetable.start_time='$s_time' and timetable.end_time='$e_time' and timetable.day='Sunday'";
	  
$result=mysqli_query($conn,$sql);
if (mysqli_num_rows($result) > 0) { 
	while($row=mysqli_fetch_assoc($result)){ 
		
?>    	
                      
					  <span style="color:red">Subject Name</span>:<?php echo $row['s_name']; ?><br>
					  <hr/>
					  <span style="color:red">Teacher Name</span>:<?php echo $row['t_name']; ?><br>
					  <hr/>
					  <span style="color:red">Class Name</span>: <?php echo $row['c_name']; ?><br>
					  <hr/>
					  <span style="color:red">Meeting link: </span> <a href="<?php echo $row['t_link']; ?>" target="_blank"><?php echo 'Meeting link:'. $row['t_link']; ?></a><br>
                       		
<?php } } ?>
	
                                </td>
                                <td>
<?php 
include_once('../controller/config.php');
	
$sql="select subject.name as s_name,teacher.i_name as t_name,class_room.name as c_name,timetable.meeting_link as t_link
      from timetable
	  inner join subject
	  on timetable.subject_id=subject.id
	  inner join teacher
	  on timetable.teacher_id=teacher.id
	  inner join class_room
	  on timetable.classroom_id=class_room.id
	  where timetable.grade_id='$grade' and timetable.start_time='$s_time' and timetable.end_time='$e_time' and timetable.day='Monday'";
	  
$result=mysqli_query($conn,$sql);
if (mysqli_num_rows($result) > 0) {
	while($row=mysqli_fetch_assoc($result)){
?>    	
					<span style="color:red">Subject Name</span>:<?php echo $row['s_name']; ?><br>
					  <hr/>
					  <span style="color:red">Teacher Name</span>:<?php echo $row['t_name']; ?><br>
					  <hr/>
					  <span style="color:red">Class Name</span>: <?php echo $row['c_name']; ?><br>
					  <hr/>
					  <span style="color:red">Meeting link: </span> <a href="<?php echo $row['t_link']; ?>" target="_blank"><?php echo 'Meeting link:'. $row['t_link']; ?></a><br>
                            
<?php } } ?>
                                </td>
                                <td>
<?php 
include_once('../controller/config.php');
	
$sql="select subject.name as s_name,teacher.i_name as t_name,class_room.name as c_name,timetable.meeting_link as t_link
      from timetable
	  inner join subject
	  on timetable.subject_id=subject.id
	  inner join teacher
	  on timetable.teacher_id=teacher.id
	  inner join class_room
	  on timetable.classroom_id=class_room.id
	  where timetable.grade_id='$grade' and timetable.start_time='$s_time' and timetable.end_time='$e_time' and timetable.day='Tuesday'";
	  
$result=mysqli_query($conn,$sql);
if (mysqli_num_rows($result) > 0) {
	while($row=mysqli_fetch_assoc($result)){
?>    	
							<span style="color:red">Subject Name</span>:<?php echo $row['s_name']; ?><br>
					  <hr/>
					  <span style="color:red">Teacher Name</span>:<?php echo $row['t_name']; ?><br>
					  <hr/>
					  <span style="color:red">Class Name</span>: <?php echo $row['c_name']; ?><br>
					  <hr/>
					  <span style="color:red">Meeting link: </span> <a href="<?php echo $row['t_link']; ?>" target="_blank"><?php echo 'Meeting link:'. $row['t_link']; ?></a><br>
                        	
                    
<?php  } } ?>
                                </td>
                                <td>
<?php 
include_once('../controller/config.php');
	
$sql="select subject.name as s_name,teacher.i_name as t_name,class_room.name as c_name,timetable.meeting_link as t_link
      from timetable
	  inner join subject
	  on timetable.subject_id=subject.id
	  inner join teacher
	  on timetable.teacher_id=teacher.id
	  inner join class_room
	  on timetable.classroom_id=class_room.id
	  where timetable.grade_id='$grade' and timetable.start_time='$s_time' and timetable.end_time='$e_time' and timetable.day='Wednesday'";

$result=mysqli_query($conn,$sql);	  
if (mysqli_num_rows($result) > 0) { 
	while($row=mysqli_fetch_assoc($result)){  
?>    	
					<span style="color:red">Subject Name</span>:<?php echo $row['s_name']; ?><br>
					  <hr/>
					  <span style="color:red">Teacher Name</span>:<?php echo $row['t_name']; ?><br>
					  <hr/>
					  <span style="color:red">Class Name</span>: <?php echo $row['c_name']; ?><br>
					  <hr/>
					  <span style="color:red">Meeting link: </span> <a href="<?php echo $row['t_link']; ?>" target="_blank"><?php echo 'Meeting link:'. $row['t_link']; ?></a><br>
                            
<?php } }  ?>
                                </td>
                                <td>
<?php 
include_once('../controller/config.php');
	
$sql="select subject.name as s_name,teacher.i_name as t_name,class_room.name as c_name,timetable.meeting_link as t_link
      from timetable
	  inner join subject
	  on timetable.subject_id=subject.id
	  inner join teacher
	  on timetable.teacher_id=teacher.id
	  inner join class_room
	  on timetable.classroom_id=class_room.id
	  where timetable.grade_id='$grade' and timetable.start_time='$s_time' and timetable.end_time='$e_time' and timetable.day='Thursday'";
	  
$result=mysqli_query($conn,$sql);
if (mysqli_num_rows($result) > 0) { 
	while($row=mysqli_fetch_assoc($result)){
	
?>    	
							<span style="color:red">Subject Name</span>:<?php echo $row['s_name']; ?><br>
					  <hr/>
					  <span style="color:red">Teacher Name</span>:<?php echo $row['t_name']; ?><br>
					  <hr/>
					  <span style="color:red">Class Name</span>: <?php echo $row['c_name']; ?><br>
					  <hr/>
					  <span style="color:red">Meeting link: </span> <a href="<?php echo $row['t_link']; ?>" target="_blank"><?php echo 'Meeting link:'. $row['t_link']; ?></a><br>
                           
<?php } } ?>
                                </td>
                                <td>
<?php 
include_once('../controller/config.php');
	
$sql="select subject.name as s_name,teacher.i_name as t_name,class_room.name as c_name,timetable.meeting_link as t_link
      from timetable
	  inner join subject
	  on timetable.subject_id=subject.id
	  inner join teacher
	  on timetable.teacher_id=teacher.id
	  inner join class_room
	  on timetable.classroom_id=class_room.id
	  where timetable.grade_id='$grade' and timetable.start_time='$s_time' and timetable.end_time='$e_time' and timetable.day='Friday'";
	  
$result=mysqli_query($conn,$sql);
if (mysqli_num_rows($result) > 0) { // 6#
	while($row=mysqli_fetch_assoc($result)){// while loop 6#
?>    	
                     	
						 <span style="color:red">Subject Name</span>:<?php echo $row['s_name']; ?><br>
					  <hr/>
					  <span style="color:red">Teacher Name</span>:<?php echo $row['t_name']; ?><br>
					  <hr/>
					  <span style="color:red">Class Name</span>: <?php echo $row['c_name']; ?><br>
					  <hr/>
					  <span style="color:red">Meeting link: </span> <a href="<?php echo $row['t_link']; ?>" target="_blank"><?php echo 'Meeting link:'. $row['t_link']; ?></a><br>
                     	
<?php  } } ?>
                                </td>
                                <td>
<?php 
include_once('../controller/config.php');
	
$sql="select subject.name as s_name,teacher.i_name as t_name,class_room.name as c_name,timetable.meeting_link as t_link
      from timetable
	  inner join subject
	  on timetable.subject_id=subject.id
	  inner join teacher
	  on timetable.teacher_id=teacher.id
	  inner join class_room
	  on timetable.classroom_id=class_room.id
	  where timetable.grade_id='$grade' and timetable.start_time='$s_time' and timetable.end_time='$e_time' and timetable.day='Saturday'";
	 
$result=mysqli_query($conn,$sql);
if (mysqli_num_rows($result) > 0) { 
	while($row=mysqli_fetch_assoc($result)){ 
	
?>    	
					  <span style="color:red">Subject Name</span>:<?php echo $row['s_name']; ?><br>
					  <hr/>
					  <span style="color:red">Teacher Name</span>:<?php echo $row['t_name']; ?><br>
					  <hr/>
					  <span style="color:red">Class Name</span>: <?php echo $row['c_name']; ?><br>
					  <hr/>
					  <span style="color:red">Meeting link: </span> <a href="<?php echo $row['t_link']; ?>" target="_blank"><?php echo 'Meeting link:'. $row['t_link']; ?></a><br>
                            
                     	
<?php } }  ?>
                                    </td>
                                </tr>
<?php }   ?>
					
                            </tbody>
                        </table>
                    </div><!-- /.box-body -->	
                </div><!-- /.box -->
            </div><!-- /.col-md-10 -->
        </div>
     </section>   

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
                            
<?php include_once('footer.php');?>   