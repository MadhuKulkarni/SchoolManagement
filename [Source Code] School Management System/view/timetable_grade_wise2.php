
<?php
   if(!isset($_SERVER['HTTP_REFERER'])){
       // redirect them to your desired location
       header('location:../index.php');
       exit;
   }
   include_once('../controller/config.php');
   include 'Calendar.php';
   $calendar = new Calendar();
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
         <?php
            $sql="SELECT timetable.id AS tt_id,timetable.start_time AS tt_stime,timetable.end_time AS tt_etime, subject.name AS s_name,teacher.full_name AS t_name,class_room.name AS c_name,timetable.meeting_link AS t_link, timetable.time_date AS t_date
            FROM timetable
            INNER JOIN subject
            ON timetable.subject_id=subject.id
            INNER JOIN teacher
            ON timetable.teacher_id=teacher.id
            INNER JOIN class_room
            ON timetable.classroom_id=class_room.id
            WHERE MONTH(timetable.time_date)=MONTH(NOW()) AND YEAR(timetable.time_date)=YEAR(NOW()) AND timetable.grade_id='$id' 
            ORDER BY timetable.time_date, timetable.start_time";

            //   $sql= "select * from timetable
            //   where MONTH(time_date)=MONTH(now())
            //   and YEAR(time_date)=YEAR(now())";
               // echo $sql;exit;
            $result=mysqli_query($conn,$sql);
            if (mysqli_num_rows($result) > 0) { // 6#
               while($row=mysqli_fetch_assoc($result)){// while loop 6#
                  // echo "<pre>";
                  // print_r($row);
                  // echo "</pre>";
                  $ttArr = [
                     'subject' => $row['s_name'],
                     'teacher' => $row['t_name'],
                     'class' => $row['c_name'],
                     'meeting' => $row['t_link'],
                     'display' => $row['tt_stime'] . '-' . $row['tt_etime']
                     // 'display' => $row['tt_stime'] . '-' . $row['tt_etime'] . ' | Divya ' . $row['s_name']
                  ];
                  $calendar->add_timetable($ttArr, $row['t_date'], 1, 'yellow');
               }
            }
            echo $calendar;
         ?>
           
      </div>
      <!-- /.box-body -->	
   </div>
   <!-- /.box -->
</div>
<!-- /.col-md-10 -->

