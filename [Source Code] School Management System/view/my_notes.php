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
   if(isset($_POST['grade']) && isset($_POST['subject'])) {
   $grade = (int)$_POST['grade'];
   $subject = (int)$_POST['subject'];
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
      <h1>Notes
         <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
         <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
         <li><a href="#">Notes Page</a></li>
      </ol>
   </section>
   <!-- Main content -->
   <section class="content">
      <div class="row">
         <div class="col-md-5">
            <!-- left column -->
            <form method="post" action="">
               <div class="box box-primary">
                  <!-- general form elements -->
                  <div class="box-header with-border">
                     <h3 class="box-title">Notes Page</h3>
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body">
                     <div class="form-group col-md-5" id="divGender1">
                        <label>Grade</label>
                        <select name="grade" class="form-control col-md-3">
                           <!--MSK-000107-->
                           <option>Select Grade</option>
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
                     <div class="form-group col-md-5" id="divGender1">
                        <label>Subject</label>
                        <select name="subject" class="form-control " >
                           <!--MSK-000107-->
                           <option>Select Subject</option>
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
      if($grade!=='' && $subject!=''){
        echo '<section  class="content-header" style="background-color:white; width:71%;border-top: 3px solid #3c8dbc;">';
      
         echo '<div class="row" id="table1">';
           echo '<div class="box-header with-border">';
             echo  '<h3 class="box-title">Add Notes</h3>';
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
         $sql= "SELECT timetable.time_date AS TT_DATE,timetable.start_time AS START_TIME,timetable.end_time AS END_TIME,timetable.notes AS TEACHER_NOTES,
         subject.name AS SUBJECT_NAME,timetable.id AS TT_ID
         from timetable      
         inner join subject
         on subject.id=timetable.subject_id
         where timetable.grade_id = ".$grade." and timetable.subject_id = ".$subject;

         $result2=mysqli_query($conn,$sql);
        
         echo '<div class="box-body table-responsive">';
         echo "<table class='table table-bordered table-striped' style='width:83% ;'>";
         echo "<thead> 
               <th>Date</th>
               <th>Subject Name</th>
               <th>Start Time</th>
               <th>End Time</th>
               <th>Teacher Notes</th>              
               </thead>";
         echo "<tbody>";

         while($row=mysqli_fetch_assoc($result2)){
         $teacher_notes = '<input type="file" class="fileAjax" name="fileAjax"/ style="width:200px;"><button class="uploadAssignment">Submit</button><span class="status"></span>';
         $teacher_notes .= ($row['TEACHER_NOTES'] == '') ? '<a href="" target="_blank" style="padding-left:20px;color:aqua;font-weight:800"></a>': '<a href="'.$row['TEACHER_NOTES'].'" target="_blank" style="padding-left:20px;color:aqua;font-weight:800">View Notes</a>';
            echo "<tr>
               <td>{$row['TT_DATE']}</td>
               <td>{$row['SUBJECT_NAME']}</td>
               <td>{$row['START_TIME']}</td>
               <td>{$row['END_TIME']}</td>
               <td style='display: flex' data-id='". $row['TT_ID']. "'>{$teacher_notes}</td>
               <td>";
              

         
         echo   "</tr>";
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
         let id = button.parent().attr('data-id');
         let file = button.prev();
         let status = button.next();
         let viewAssignment = button.parent().find('a');
   
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
            url: 'uploadNotes.php',
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            success: function(response) {
               response = JSON.parse(response);
               if(!('error' in response)) {
                  viewAssignment.attr('href', response.data);
                  viewAssignment.text('View Assignment');
                  status.text('Uploaded');
                  file.hide();
                  button.hide();
                  status.css({
                     'color': 'green'
                  });
                  setTimeout(function() {
                     status.fadeOut(100);
                  }, 5000);
               } else {
                  status.text(response.error);
                  status.css({
                     'color': 'red'
                  });
               }
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

         $.ajax({
            url: 'uploadFile.php',
            type: 'POST',
            data: {feedback: feedbackValue, id: id},
            success: function(response) {
               feedbackDisplay.text(response);
            }
         });
      });
   });
   
</script>