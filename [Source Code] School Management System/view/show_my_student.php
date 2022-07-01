<?php
if(!isset($_SERVER['HTTP_REFERER'])){
    // redirect them to your desired location
    header('location:../index.php');
    exit;
}
?>
<div class="col-md-7">
	<div class="box">
    	<div class="box-header">
        	<h3 class="box-title">My Student</h3>
			<button href="#uploadStudents" class="btn btn-primary pull-right" data-toggle="modal">Upload Marks</button>
        </div><!-- /.box-header -->
        <div class="box-body table-responsive">
        	<table id="example1" class="table table-bordered table-striped">
            	<thead>
                	<th class="col-md-1">ID</th>
                    <th class="col-md-3">Name</th>
                    <th class="col-md-7">Action</th>
                </thead>
                <tbody>
<?php
include_once('../controller/config.php');
$grade_id=$_GET['grade'];
$exam_id=$_GET['exam'];
$my_index=$_GET['my_index'];
$year=$_GET['year'];
	
$sql="SELECT * FROM teacher WHERE index_number='$my_index'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);	  	  
$teacher_id=$row['id'];	

$sql1="SELECT * FROM subject_routing WHERE teacher_id='$teacher_id' AND grade_id='$grade_id'";
$result1=mysqli_query($conn,$sql1);

while($row1=mysqli_fetch_assoc($result1)){
	$sr_id=$row1['id'];
	
	$sql2="select student.i_name as std_name,student.id as std_id,student.index_number as std_index,subject_routing.subject_id as s_id
       from student_subject
	   inner join student
	   on student_subject.index_number=student.index_number
	   inner join subject_routing
	   on student_subject.sr_id=subject_routing.id
	   where student_subject.year='$year' and student_subject.sr_id='$sr_id'";	
	   		  
	$result2=mysqli_query($conn,$sql2);
	$count=0;
	if(mysqli_num_rows($result2) > 0){
		while($row2=mysqli_fetch_assoc($result2)){
		$count++;
		$subject_id=$row2['s_id'];
		$std_index=$row2["std_index"];
?>   
          			<tr>
                		<td><?php echo $count; ?></td>
                    	<td id="td1_<?php echo $row2['std_id']; ?>">
                    		<a href="#modalviewform" onClick="studentProfile('<?php echo $row2["std_index"]; ?>')" class=""  data-toggle="modal"><?php echo $row2['std_name']; ?></a>
                    	</td>
                    	<td> 
<?php
$sql3="SELECT * FROM student_exam WHERE index_number='$std_index' AND grade_id='$grade_id' AND exam_id='$exam_id' AND year='$year' AND subject_id='$subject_id'";

$result3=mysqli_query($conn,$sql3);
if(mysqli_num_rows($result3) > 0){
	echo'<a href="#" class=" btn btn-success btn-xs" onClick="showModalEditExam('.$exam_id.','.$my_index.','.$std_index.','.$grade_id.')" >Edit Exam Marks</a>
<a href="#" class=" btn btn-primary btn-xs" onClick="showModalViewExam('.$exam_id.','.$year.','.$std_index.')"  >View Exam Marks</a>';
	
}else{
	echo'<a href="#" class=" btn btn-warning btn-xs" onClick="showModalAddExam('.$exam_id.','.$my_index.','.$std_index.','.$grade_id.')"  >Add Exam Marks</a>';
}
?>

                    	</td>
                	</tr>
<?php } } } ?>
           		</tbody>
        	</table>	
     	</div><!-- /.box-body -->           
	</div><!-- /.box-->
</div>
<!--Modal upload CSV-->
<div class="modal msk-fade" style="display: none;" id="uploadStudents" tabindex="-1" role="dialog" aria-labelledby="insert_alert1" aria-hidden="true" data-backdrop="static" data-keyboard="false" style="display: block;">
   <div class="modal-dialog">
      <!--modal-dialog -->  
      <div class="container col-lg-12 ">
         <!--modal-content --> 
         <div class="row">
            <div class="panel panel-info">
               <!--panel --> 
               <div class="panel-heading">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                  <h3 class="panel-title" id="hname"></h3>
               </div>
               <div class="panel-body">
                  <!--panel-body -->
                  <div class="row">
                     <div class=" col-md-9">
                        <form action="" method="post" enctype="multipart/form-data">
                           <div class="input-group">
                              <div class="custom-file">
                                 <input type="file" class="custom-file-input" id="customFileInput" aria-describedby="customFileInput" name="file">
                                 <label class="custom-file-label" for="customFileInput">Select CSV file</label>
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
               <!--/.panel-body -->
               <div class="panel-footer">
                  <div class="input-group-append">
                     <input type="submit" name="submit" value="Upload" id="upload-csv" class="btn btn-primary">
                  </div>
                  <div id="upload-status"></div>
               </div>
            </div>
            <!--/. panel--> 
         </div>
         <!--/.row --> 
      </div>
      <!--/.modal-content -->
   </div>
   <!--/.modal-dialog -->
</div>
<!--modal upload CSV end-->