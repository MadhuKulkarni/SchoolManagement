
<?php
   if(!isset($_SERVER['HTTP_REFERER'])){
       // redirect them to your desired location
       header('location:../index.php');
       exit;
   }
   ?>
   <style>
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
<div class="col-md-10">
   <div class="box">
      <div class="box-header">
         <?php 
            include_once('../controller/config.php');
            if(isset($_GET["do"])&&($_GET["do"]=="show_Timetable")){
            $id=$_GET['grade'];	
            
            $sql="select name from grade where id='$id'";
            $result=mysqli_query($conn,$sql);
            $row=mysqli_fetch_assoc($result);
            
            ?>                
         <h3 class="box-title">Timetable - <?php echo $row['name']; ?></h3>
         <?php } ?>
      </div>
      <!-- /.box-header -->
      <div class="box-body table-responsive">
         <table id="timetable1" class="table table-bordered table-striped">
            <thead>
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
                  $id=$_GET['grade'];	
                  
                  $sql2="SELECT 
                  	   id, start_time,end_time,time_date
                  	   FROM
                            timetable
                         WHERE
                            grade_id='$id'  
                  		  GROUP BY
                            start_time  
                            ORDER BY
                            start_time"; 
                  
                  $result2=mysqli_query($conn,$sql2);
                  while($row2=mysqli_fetch_assoc($result2)){
                  	
                  	$s_time=$row2['start_time'];
                  	$e_time=$row2['end_time'];
                  	
                  ?>    
               <tr id="<?php echo $s_time; ?>_<?php echo $e_time; ?>" >
                  <td><?php echo $row2['time_date'];?> </td>
                  <td>
                     <span id="spanSTime_<?php echo $row2['id']; ?>" data-id="<?php echo $s_time; ?>"><?php echo $s_time; ?></span> - 		
                     <span id="spanETime_<?php echo $row2['id']; ?>" data-id="<?php echo $e_time; ?>"><?php echo $e_time; ?></span>
                  </td>
                  <td>
                     <?php 
                        include_once('../controller/config.php');
                        $id=$_GET['grade'];	
                        $sql="select timetable.id as tt_id,timetable.start_time as tt_stime,timetable.end_time as tt_etime, subject.name as s_name,teacher.i_name as t_name,class_room.name as c_name,timetable.meeting_link as t_link
                              from timetable
                        	  inner join subject
                        	  on timetable.subject_id=subject.id
                        	  inner join teacher
                        	  on timetable.teacher_id=teacher.id
                        	  inner join class_room
                        	  on timetable.classroom_id=class_room.id
                              where timetable.start_time='$s_time' and timetable.end_time='$e_time' and timetable.grade_id='$id' and timetable.day='Sunday'";
                        	  
                        $result=mysqli_query($conn,$sql);
                        if (mysqli_num_rows($result) > 0) { // 1#
                        	while($row=mysqli_fetch_assoc($result)){ // while loop 1#
                         ?>    	
                     <span style="color:red">Subject Name</span>: <?php echo $row['s_name']; ?><br>
							  <hr/>
                              <span style="color:red">Teacher Name</span>: <?php echo $row['t_name']; ?><br>
							  <hr/>
                              <span style="color:red">Class Name</span>: <?php echo $row['c_name']; ?><br>
							  <hr/>
                              <span style="color:red">Meeting link</span>: <a href="<?php echo $row['t_link']; ?>" target="_blank"><?php echo 'Meeting link:'. $row['t_link']; ?></a><br>
							  <hr/>
                     <?php }} ?>
                  </td>
                  <td >
                     <?php 
                        include_once('../controller/config.php');
                        $id=$_GET['grade'];	
                        
                        $sql="select timetable.id as tt_id,timetable.start_time as tt_stime,timetable.end_time as tt_etime, subject.name as s_name,teacher.i_name as   t_name,class_room.name as c_name,timetable.meeting_link as t_link
                              from timetable
                        	  inner join subject
                        	  on timetable.subject_id=subject.id
                        	  inner join teacher
                        	  on timetable.teacher_id=teacher.id
                        	  inner join class_room
                        	  on timetable.classroom_id=class_room.id
                              where timetable.start_time='$s_time' and timetable.end_time='$e_time' and timetable.grade_id='$id' and timetable.day='Monday'";
                        $result=mysqli_query($conn,$sql);
                        if (mysqli_num_rows($result) > 0) { // 2#
                        	while($row=mysqli_fetch_assoc($result)){ // while loop 2#
                        ?>    	
                      <span style="color:red">Subject Name</span>: <?php echo $row['s_name']; ?><br>
							  <hr/>
                              <span style="color:red">Teacher Name</span>: <?php echo $row['t_name']; ?><br>
							  <hr/>
                              <span style="color:red">Class Name</span>: <?php echo $row['c_name']; ?><br>
							  <hr/>
                              <span style="color:red">Meeting link</span>: <a href="<?php echo $row['t_link']; ?>" target="_blank"><?php echo 'Meeting link:'. $row['t_link']; ?></a><br>
							  <hr/>
                     <?php }} ?>
                  </td>
                  <td>
                     <?php 
                        include_once('../controller/config.php');
                        $id=$_GET['grade'];	
                        
                        $sql="select timetable.id as tt_id,timetable.start_time as tt_stime,timetable.end_time as tt_etime, subject.name as s_name,teacher.i_name as t_name,class_room.name as c_name,timetable.meeting_link as t_link
                              from timetable
                        	  inner join subject
                        	  on timetable.subject_id=subject.id
                        	  inner join teacher
                        	  on timetable.teacher_id=teacher.id
                        	  inner join class_room
                        	  on timetable.classroom_id=class_room.id
                              where timetable.start_time='$s_time' and timetable.end_time='$e_time' and timetable.grade_id='$id' and timetable.day='Tuesday'";
                        $result=mysqli_query($conn,$sql);
                        if (mysqli_num_rows($result) > 0) { // 3#
                        	while($row=mysqli_fetch_assoc($result)){ // while loop 3#
                        ?>    	
                      <span style="color:red">Subject Name</span>: <?php echo $row['s_name']; ?><br>
							  <hr/>
                              <span style="color:red">Teacher Name</span>: <?php echo $row['t_name']; ?><br>
							  <hr/>
                              <span style="color:red">Class Name</span>: <?php echo $row['c_name']; ?><br>
							  <hr/>
                              <span style="color:red">Meeting link</span>: <a href="<?php echo $row['t_link']; ?>" target="_blank"><?php echo 'Meeting link:'. $row['t_link']; ?></a><br>
							  <hr/>
                     <?php  }} ?>
                  </td>
                  <td>
                     <?php 
                        include_once('../controller/config.php');
                        $id=$_GET['grade'];	
                        $sql="select timetable.id as tt_id,timetable.start_time as tt_stime,timetable.end_time as tt_etime, subject.name as s_name,teacher.i_name as t_name,class_room.name as c_name,timetable.meeting_link as t_link
                              from timetable
                        	  inner join subject
                        	  on timetable.subject_id=subject.id
                        	  inner join teacher
                        	  on timetable.teacher_id=teacher.id
                        	  inner join class_room
                        	  on timetable.classroom_id=class_room.id
                              where timetable.start_time='$s_time' and timetable.end_time='$e_time' and timetable.grade_id='$id' and timetable.day='Wednesday'";
                        $result=mysqli_query($conn,$sql);
                        if (mysqli_num_rows($result) > 0) { // 4#
                        	while($row=mysqli_fetch_assoc($result)){ // while loop 4# 
                        ?>    	
                     <span style="color:red">Subject Name</span>: <?php echo $row['s_name']; ?><br>
							  <hr/>
                              <span style="color:red">Teacher Name</span>: <?php echo $row['t_name']; ?><br>
							  <hr/>
                              <span style="color:red">Class Name</span>: <?php echo $row['c_name']; ?><br>
							  <hr/>
                              <span style="color:red">Meeting link</span>: <a href="<?php echo $row['t_link']; ?>" target="_blank"><?php echo 'Meeting link:'. $row['t_link']; ?></a><br>
							  <hr/>
                     <?php }}?>
                  </td>
                  <td>
                     <?php 
                        include_once('../controller/config.php');
                        $id=$_GET['grade'];	
                        $sql="select timetable.id as tt_id,timetable.start_time as tt_stime,timetable.end_time as tt_etime, subject.name as s_name,teacher.i_name as t_name,class_room.name as c_name,timetable.meeting_link as t_link
                              from timetable
                        	  inner join subject
                        	  on timetable.subject_id=subject.id
                        	  inner join teacher
                        	  on timetable.teacher_id=teacher.id
                        	  inner join class_room
                        	  on timetable.classroom_id=class_room.id
                              where timetable.start_time='$s_time' and timetable.end_time='$e_time' and timetable.grade_id='$id' and timetable.day='Thursday'";
                        $result=mysqli_query($conn,$sql);
                        if (mysqli_num_rows($result) > 0) { //5#
                        	while($row=mysqli_fetch_assoc($result)){ // while loop 5#
                        ?>    	
                     <span style="color:red">Subject Name</span>: <?php echo $row['s_name']; ?><br>
							  <hr/>
                              <span style="color:red">Teacher Name</span>: <?php echo $row['t_name']; ?><br>
							  <hr/>
                              <span style="color:red">Class Name</span>: <?php echo $row['c_name']; ?><br>
							  <hr/>
                              <span style="color:red">Meeting link</span>: <a href="<?php echo $row['t_link']; ?>" target="_blank"><?php echo 'Meeting link:'. $row['t_link']; ?></a><br>
							  <hr/>
                     <?php }}?>
                  </td>
                  <td>
                     <?php 
                        include_once('../controller/config.php');
                        $id=$_GET['grade'];	
                        $sql="select timetable.id as tt_id,timetable.start_time as tt_stime,timetable.end_time as tt_etime, subject.name as s_name,teacher.i_name as t_name,class_room.name as c_name,timetable.meeting_link as t_link
                              from timetable
                        	  inner join subject
                        	  on timetable.subject_id=subject.id
                        	  inner join teacher
                        	  on timetable.teacher_id=teacher.id
                        	  inner join class_room
                        	  on timetable.classroom_id=class_room.id
                              where timetable.start_time='$s_time' and timetable.end_time='$e_time' and timetable.grade_id='$id' and timetable.day='Friday'";
                        $result=mysqli_query($conn,$sql);
                        if (mysqli_num_rows($result) > 0) { // 6#
                        	while($row=mysqli_fetch_assoc($result)){// while loop 6#
                        ?>    	
                     <span style="color:red">Subject Name</span>: <?php echo $row['s_name']; ?><br>
							  <hr/>
                              <span style="color:red">Teacher Name</span>: <?php echo $row['t_name']; ?><br>
							  <hr/>
                              <span style="color:red">Class Name</span>: <?php echo $row['c_name']; ?><br>
							  <hr/>
                              <span style="color:red">Meeting link</span>: <a href="<?php echo $row['t_link']; ?>" target="_blank"><?php echo 'Meeting link:'. $row['t_link']; ?></a><br>
							  <hr/>
                     <?php  }} ?>
                  </td>
                  <td>
                     <?php 
                        include_once('../controller/config.php');
                        $id=$_GET['grade'];	
                        
                        $sql="select timetable.id as tt_id,timetable.start_time as tt_stime,timetable.end_time as tt_etime, subject.name as s_name,teacher.i_name as t_name,class_room.name as c_name,timetable.meeting_link as t_link
                              from timetable
                        	  inner join subject
                        	  on timetable.subject_id=subject.id
                        	  inner join teacher
                        	  on timetable.teacher_id=teacher.id
                        	  inner join class_room
                        	  on timetable.classroom_id=class_room.id
                              where timetable.start_time='$s_time' and timetable.end_time='$e_time' and timetable.grade_id='$id' and timetable.day='Saturday'";
                        	 
                        $result=mysqli_query($conn,$sql);
                        if (mysqli_num_rows($result) > 0) { // 7#
                        	while($row=mysqli_fetch_assoc($result)){ // while loop 7#
                        	
                        ?>    	
                     <span style="color:red">Subject Name</span>: <?php echo $row['s_name']; ?><br>
							  <hr/>
                              <span style="color:red">Teacher Name</span>: <?php echo $row['t_name']; ?><br>
							  <hr/>
                              <span style="color:red">Class Name</span>: <?php echo $row['c_name']; ?><br>
							  <hr/>
                              <span style="color:red">Meeting link</span>: <a href="<?php echo $row['t_link']; ?>" target="_blank"><?php echo 'Meeting link:'. $row['t_link']; ?></a><br>
							  <hr/>
                     <?php }} ?>
                  </td>
               </tr>
               <?php 
                  } 
                  ?>                     
            </tbody>
         </table>
      </div>
      <!-- /.box-body -->	
   </div>
   <!-- /.box -->
</div>
<!-- /.col-md-10 -->