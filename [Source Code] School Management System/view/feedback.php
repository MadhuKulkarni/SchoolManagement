<?php
   if(!isset($_SERVER['HTTP_REFERER'])){
       // redirect them to your desired location
       header('location:../index.php');
       exit;
   }
    
   
   ?>
<?php 
   //collecting the Values
   $subject='';
   $grade=''; 
   $time_date='';
   $start_time='';
   $end_time='';
   if(isset($_POST['grade']) && isset($_POST['subject'])&& isset($_POST['date'])&& isset($_POST['start_time'])&& isset($_POST['end_time'])) {
   $grade = (int)$_POST['grade'];
   $subject = (int)$_POST['subject'];
   $time_date = $_POST['date'];
   $start_time = $_POST['start_time'];
   $end_time = $_POST['end_time'];
   }
   ?>
<?php include_once('head.php'); ?>
<?php include_once('header_teacher.php'); ?>
<?php include_once('sidebar2.php'); ?>
<?php include_once('alert.php'); ?>
<style>
   body { 
   overflow-y:scroll;
   }
   tbody tr{
   height:100px;	
   }
   .modal-content1 {
   position: absolute;
   left: 125px; 
   }
   @media only screen and (max-width: 500px) {
   .modal-content1 {
   position:static;
   }
   }
   .form-control-feedback {
   pointer-events: auto;
   }
   .set-width-tooltip + .tooltip > .tooltip-inner { 
   min-width:180px;
   }
   .set-color-tooltip + .tooltip > .tooltip-inner { 
   min-width:180px;
   background-color:red;
   }
   .image-error{
   border:1px solid #f44336;
   }
   .image-success{
   border:1px solid #009900;
   }
   .msk-fade {  
   -webkit-animation-name: animatetop;
   -webkit-animation-duration: 0.4s;
   animation-name: animatetop;
   animation-duration: 0.4s
   }
   body.modal-open-noscroll1
   {
   overflow:hidden;
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
</style>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>Feedback
         <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
         <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
         <li><a href="#">Feedback Page</a></li>
      </ol>
   </section>
   <!-- Main content -->
   <section class="content">
      <div class="row">
         <div class="col-md-12">
            <!-- left column -->
            <form method="post" action="">
               <div class="box box-primary">
                  <!-- general form elements -->
                  <div class="box-header with-border">
                     <h3 class="box-title">Feedback Page</h3>
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body">
                     <div class="form-group col-md-4" id="divGender1">
                        <label>Grade</label>
                        <select name="grade" class="form-control col-md-3">
                           <!--MSK-000107-->
                           <option value="">Select Grade</option>
                           <?php
                              include_once('../controller/config.php');
                              $sql="SELECT * FROM grade";
                              $result=mysqli_query($conn,$sql);
                              if(mysqli_num_rows($result) > 0){
                              	while($row=mysqli_fetch_assoc($result)){
                              ?> 
                           <option value="<?php echo $row["id"]; ?>" <?php echo ($grade != '' && $grade == $row["id"]) ? 'selected' : ''; ?>><?php echo $row['name']; ?></option>
                           <?php }} ?>
                        </select>
                     </div>
                     <div class="form-group col-md-4" id="divGender1">
                        <label>Subject</label>
                        <select name="subject" class="form-control " >
                           <!--MSK-000107-->
                           <option value="">Select Subject</option>
                           <?php
                              include_once('../controller/config.php');
                              $sql="SELECT * FROM subject";
                              $result=mysqli_query($conn,$sql);
                              if(mysqli_num_rows($result) > 0){
                              	while($row=mysqli_fetch_assoc($result)){
                              ?> 
                           <option value="<?php echo $row["id"]; ?>" <?php echo($subject !='' && $subject==$row["id"]) ? 'selected':''; ?>><?php echo $row['name']; ?></option>
                           <?php }} ?>
                        </select>
                     </div>
                  
                     <div class="form-group col-md-4" id="divGender1">
                        <label>Date</label>
                        <select name="date" class="form-control col-md-3">
                           <!--MSK-000107-->
                           <option value="">Select Date</option>
                           <?php
                              include_once('../controller/config.php');
                              $sql="SELECT * FROM timetable";
                              $result=mysqli_query($conn,$sql);
                              if(mysqli_num_rows($result) > 0){
                              	while($row=mysqli_fetch_assoc($result)){
                              ?> 
                           <option value="<?php echo $row["time_date"]; ?>" <?php echo ($time_date != '' && $time_date == $row["time_date"]) ? 'selected' : ''; ?>><?php echo $row['time_date']; ?></option>
                           <?php }} ?>
                        </select>
                     </div>
                     
                     <div class="form-group col-md-4" id="divGender1">
                        <label>start Time</label>
                        <select name="start_time" class="form-control col-md-3">
                           <!--MSK-000107-->
                           <option value="">Select Time</option>
                           <?php
                              include_once('../controller/config.php');
                              $sql="SELECT * FROM timetable";
                              $result=mysqli_query($conn,$sql);
                              if(mysqli_num_rows($result) > 0){
                              	while($row=mysqli_fetch_assoc($result)){
                              ?> 
                           <option value="<?php echo $row["start_time"]; ?>" <?php echo ($start_time != '' && $start_time == $row["start_time"]) ? 'selected' : ''; ?>><?php echo $row['start_time']; ?></option>
                           <?php }} ?>
                        </select>
                     </div>
                     <div class="form-group col-md-4" id="divGender1">
                        <label>End Time</label>
                        <select name="end_time" class="form-control col-md-3">
                           <!--MSK-000107-->
                           <option value="">End Time</option>
                           <?php
                              include_once('../controller/config.php');
                              $sql="SELECT * FROM timetable";
                              $result=mysqli_query($conn,$sql);
                              if(mysqli_num_rows($result) > 0){
                              	while($row=mysqli_fetch_assoc($result)){
                              ?> 
                           <option value="<?php echo $row["end_time"]; ?>" <?php echo ($end_time != '' && $end_time == $row["end_time"]) ? 'selected' : ''; ?>><?php echo $row['end_time']; ?></option>
                           <?php }} ?>
                        </select>
                     </div>
            
                  <!-- /.box-body -->
                  <div class="box-footer">
                     <input type="submit" class="btn btn-primary" value="Next"><!--MSK-000108-->
                  </div>
               </div>
            </form>
            <!-- /.box -->
         </div>
      </div>
   </section>
   <!-- End of form section -->
   <!-- table for view all records-->
   <!--MSK-000112--> 
   <?php 
      if($grade!=='' && $subject!=='' && $time_date!==''){
        echo '<section  class="content-header" style="background-color:white; width:100%;border-top: 3px solid #3c8dbc;">';
      
         echo '<div class="row" id="table1">';
           echo '<div class="box-header with-border">';
             echo  '<h3 class="box-title">Add Feedback</h3>';
           echo '</div>';
         // $sql= "SELECT timetable.time_date,timetable.start_time,timetable.end_time,timetable.assignment,
         // subject.name,timetable.id            
         // from timetable      
         // inner join subject
         // on subject.id=timetable.subject_id
         // where timetable.grade_id =".$grade." and timetable.subject_id = ".$subject;
         // $sql= "SELECT timetable.time_date AS TT_DATE,timetable.start_time AS START_TIME,timetable.end_time AS END_TIME,timetable.assignment AS TEACHER_ASSIGNMENT,
         //       subject.name AS SUBJECT_NAME,timetable.id AS TT_ID, student_assignment.id AS STUDENT_ASSIGNMENT_ID, student_assignment.assignment_upload AS STUDENT_ASSIGNMENT, student_assignment.feedback AS TEACHER_FEEDBACK, student.full_name AS STUDENT_NAME
         //       from timetable      
         //       inner join subject
         //       on subject.id=timetable.subject_id
         //       left join student_assignment 
         //       on timetable.id=student_assignment.timetable_id
         //       left join student
         //       on student.id=student_assignment.student_id
         //       where timetable.grade_id = ".$grade." and timetable.subject_id = ".$subject;
         $appendable_query = '';
         if($start_time != '') {
            $appendable_query .= " AND timetable.start_time='".$start_time."'";
         }
         if($end_time != '') {
            $appendable_query .= " AND timetable.end_time='".$end_time."'";
         }
         $sql= "SELECT timetable.time_date AS TT_DATE,timetable.start_time AS START_TIME,timetable.end_time AS END_TIME,timetable.assignment AS TEACHER_ASSIGNMENT,
         subject.name AS SUBJECT_NAME,timetable.id AS TT_ID
         from timetable      
         inner join subject
         on subject.id=timetable.subject_id
         where timetable.grade_id = ".$grade." and timetable.subject_id = ".$subject." and timetable.time_date='".$time_date."'".$appendable_query;
         //    echo $time_date;
         // echo $start_time;
         // echo $end_time;
         // echo $sql;exit;
         $result2=mysqli_query($conn,$sql);
        
         echo '<div class="box-body table-responsive">';
         echo "<table class='table table-bordered table-striped' style='width:83% ;'>";
         echo "<thead> 
               
             
               
                             <th>Students Assignment</th>
               </thead>";
         echo "<tbody>";

         while($row=mysqli_fetch_assoc($result2)){
         $teacher_assignment = '<input type="file" class="fileAjax" name="fileAjax"/ style="width:200px;"><button class="uploadAssignment">Submit</button><span class="status"></span>';
         $teacher_assignment .= ($row['TEACHER_ASSIGNMENT'] == '') ? '': '<a href="'.$row['TEACHER_ASSIGNMENT'].'" target="_blank" style="padding-left:20px;color:aqua;font-weight:800">View Assignment</a>';
            echo "<tr>
         
          

               <!--<td style='display: flex' data-id='". $row['TT_ID']. "'>{$teacher_assignment}</td>-->
               <td>";
               $sql2 = 'SELECT student_assignment.id AS STUDENT_ASSIGNMENT_ID, student_assignment.assignment_upload AS STUDENT_ASSIGNMENT, student_assignment.feedback AS TEACHER_FEEDBACK, student.full_name AS STUDENT_NAME 
               from student_assignment
               left join student
               on student.id=student_assignment.student_id
               where student_assignment.timetable_id = '.$row['TT_ID'];

            $resultAssignment=mysqli_query($conn,$sql2);
            echo "<table>";
            echo "<tbody>";
            while($row2=mysqli_fetch_assoc($resultAssignment)) {
               $student_assignment = '<a href="'.$row2['STUDENT_ASSIGNMENT'].'" target="_blank" style="padding-left:20px;color:aqua;font-weight:800">View Assignment</a>';
               $feedback = '<select class="feedback" name="feedback"/ style=""><option value="Please Select Feedback">Select Feedback</option><option value="Completed">Completed</option><option value="Failed">Failed</option></select><button class="submitFeedback">Submit</button>';
               $feedback .= '<span class="feedbackVal">'.$row2['TEACHER_FEEDBACK'].'</span>';

               echo "<tr>
               <td>{$row2['STUDENT_NAME']}</td>
               <td>{$student_assignment}</td>
               <td data-id='".$row2['STUDENT_ASSIGNMENT_ID']."'>{$feedback}</td>
               </tr>";
            }
            echo "</tbody>";
            echo "</table>";
            echo "</td>
            </tr>";
         }
         echo "</tbody>";
         echo "</table>";
         echo '</div>';   
         echo '</div>';
         echo '</section> ';
      }   
      ?>
</div>
<!-- " sdfsdfsdf= '".$dfdf."' sfddsfsdf"
   ' sdfsdfsdf= "'.$dfdf.'" sfddsfsdf' -->
<?php include_once('footer.php');?>
<script>
   $(document).ready(function(){
      $('.uploadAssignment').on('click', function(event) {
         event.preventDefault();
         let button = $(this);
         let id = $(this).parent().attr('data-id');
         let file = $(this).prev();
         let status = $(this).next();
   
         status.text('Uploading...');
   
         // Get the files from the form input
         let files = file[0].files;
   
         // Create a FormData object
         let formData = new FormData();
   
         // Select only the first file from the input array
         let myFile = files[0];
         
         // Add the file to the AJAX request
         formData.append('fileAjax', myFile, myFile.name);
   
         // Add id to the AJAX request
         formData.append('id', id);
   
         $.ajax({
            url: 'uploadFile.php',
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            success: function(response) {
               if(response.includes('has been uploaded')) {
                  file.hide();
                  button.hide();
                  status.css({
                     'color': 'green'
                  });
               } else {
                  status.css({
                     'color': 'red'
                  });
               }
               status.text(response);
            }
         });
      });

      $('.submitFeedback').on('click', function(event) {
         event.preventDefault();
         let button = $(this);
         let feedbackDropDown = button.parent().find('.feedback');
         let feedbackValue = feedbackDropDown.val();
         let feedbackDisplay = button.parent().find('.feedbackVal');
         let id = button.parent().attr('data-id');
         if(feedbackValue != 'Please Select Feedback') {
            $.ajax({
            url: 'uploadFile.php',
            type: 'POST',
            data: {feedback: feedbackValue, id: id},
            success: function(response) {
               feedbackDropDown.hide();
               button.hide();
               feedbackDisplay.text(response);
            }
         });
         } else {
            alert(feedbackValue);
         }
      });
   });
   
</script>