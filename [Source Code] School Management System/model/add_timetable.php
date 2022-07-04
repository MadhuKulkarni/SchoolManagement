<?php
include_once('controller/config.php');
if(isset($_POST["do"])&&($_POST["do"]=="add_timetable")){

	$grade_id=$_POST["grade_id"]; 
	$day=$_POST["day"]; 
	$subject_id=$_POST["subject_id"];
	$teacher_id=$_POST["teacher_id"]; 
	$classroom_id=$_POST["classroom_id"];
	$date=$_POST["start_date"];
	$start_time=$_POST["start_time"]; 
	$end_time=$_POST["end_time"]; 
	$meeting_link=$_POST["meeting_link"];
	
	$msg=0;//for alerts
	
	$sql1="SELECT * FROM timetable WHERE day='$day' and time_date='".$date."' and classroom_id=$classroom_id and end_time > $start_time and (start_time <= $start_time or start_time<$end_time)";

	$result1=mysqli_query($conn,$sql1);
	
	if(mysqli_num_rows($result1) > 0){//MSK-000143-1 At this time there already have class, in that classroom.
		$msg+=1; 
		
	}else{//MSK-000143-2 
		
		$sql="INSERT INTO timetable (grade_id, day, subject_id,teacher_id,classroom_id,time_date,start_time,end_time,meeting_link) 
      VALUES ( '".$grade_id."','".$day."','".$subject_id."','".$teacher_id."','".$classroom_id."','".$date."','".$start_time."','".$end_time."','".$meeting_link."')";
	 
	  	if(mysqli_query($conn,$sql)){
			$msg+=2;  
			//MSK-000143-3 The record has been successfully inserted into the database.
	  	}else{
			$msg+=3;  
			//MSK-000143-4 Connection problem.
	  	}

	}

	if(isset($_POST["do1"])&&($_POST["do1"]=="add_timetable1")){
		
		header("Location: view/timetable.php?do=alert_from_insert&msg=$msg&grade=$grade_id");//MSK-000143-5

	}
	
	
	if(isset($_POST["do2"])&&($_POST["do2"]=="add_timetable2")){
		
		header("Location: view/my_timetable2.php?do=alert_from_insert&msg=$msg");//MSK-000143-5

	}

}
?>

