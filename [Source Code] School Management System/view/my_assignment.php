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
<?php include_once('header_student.php'); ?>
<?php include_once('sidebar1.php'); ?>
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
      <h1>
         Assignment
         <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
         <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
         <li><a href="#">Assignment</a></li>
         <li><a href="#">Assignment Page</a></li>
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
                     <h3 class="box-title">Assignment Page</h3>
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
 
<!-- /.content-wrapper -->
		<?php 
            if($grade!=='' && $subject!=''){
              echo '<section  class="content-header" style="background-color:white; width:71%;border-top: 3px solid #3c8dbc;">';
            
               echo '<div class="row" id="table1">';
                 echo '<div class="box-header with-border">';
                   echo  '<h3 class="box-title">Assignments</h3>';
                 echo '</div>';
               $sql= "SELECT timetable.time_date,timetable.start_time,timetable.end_time,timetable.assignment,
               subject.name,timetable.id, student_assignment.assignment_upload, student_assignment.feedback           
               from timetable      
               inner join subject
               on subject.id=timetable.subject_id
               left join student_assignment 
               on timetable.id=student_assignment.timetable_id AND student_assignment.student_id=".$my_index."
               where timetable.grade_id =".$grade." and timetable.subject_id = ".$subject;
             
               $result2=mysqli_query($conn,$sql);
              
               echo '<div class="box-body table-responsive">';
               echo "<table class='table table-bordered table-striped' style='width:100% ;'>";
               echo "<thead> 

                     <th>Date</th>               
                     <th>Subject Name</th>
                     <th>Start Time</th>
                     <th>End Time</th>
                     <th>Assignment From Teacher</th>    
                     <th>My Assignment</th>
                     <th>Feedback By Teacher</th>                        
                     </thead>";
               echo "<tbody>";
               while($row=mysqli_fetch_assoc($result2)){
                  // echo "<pre>";
                  // print_r($row);
                  // echo "</pre>";
				$assignment = ($row['assignment'] == '') ? 'Not available': '<a href="'.$row['assignment'].'" target="_blank">View Assignment</a>';
            $myAssignment = '<input type="file" class="fileAjax" name="fileAjax"/ style="width:200px;"><button class="uploadAssignment">Submit</button><span class="status"></span>';
             $myAssignment .= ($row['assignment_upload'] == '') ? '': '<a href="'.$row['assignment_upload'].'" target="_blank" style="padding-left:20px;color:aqua;font-weight:800">View Assignment</a>';
                  echo "<tr>
                     <td>{$row['time_date']}</td>
                     <td>{$row['name']}</td>
                     <td>{$row['start_time']}</td>
                     <td>{$row['end_time']}</td>
					 <td>{$assignment}</td>
                <td data-id='". $row['id']. "'>{$myAssignment}</td>
                <td>{$row['feedback']}</td>
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
<?php include_once('footer.php');?>

<script>
   $(document).ready(function(){
      $('.uploadAssignment').on('click', function(event) {
         event.preventDefault();
         let button = $(this);
         let id = button.parent().attr('data-id');
         let action = (button.parent().find('a').length > 0) ? 'update' : 'insert';
         let file = button.prev();
         let status = button.next();
   
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
         formData.append('timetable_id', id);
         formData.append('student_id', <?php echo $my_index ?>);
         formData.append('action', action);
   
         $.ajax({
            url: 'uploadFileStudent.php',
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            success: function(response) {
               if(response.includes('has been uploaded')) {
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
   });
   
</script>

<!-- condition ? (do if true here) : (do if false here) -->