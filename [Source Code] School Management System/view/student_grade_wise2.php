<?php
   if(!isset($_SERVER['HTTP_REFERER'])){
       // redirect them to your desired location
       header('location:../index.php');
       exit;
   }
   ?>
<div class="col-md-8">
   <div class="box">
      <div class="box-header">
         <h3 class="box-title">My Student</h3>
         <button href="#uploadStudents" class="btn btn-primary pull-right" data-toggle="modal">Upload Students</button>
      </div>
      <!-- /.box-header -->
      <div class="box-body table-responsive">
         <table id="example1" class="table table-bordered table-striped">
            <thead>
               <th class="col-md-1">ID</th>
               <th class="col-md-4">Name</th>
               <th class="col-md-7">Action</th>
            </thead>
            <tbody>
               <?php
                  include_once('../controller/config.php');
                  $grade_id=$_GET['grade'];
                  $current_year=date('Y');
                  	
                  // $sql="select student.i_name as std_name,student.id as std_id,student.index_number as std_index 
                  //       from student
                  // 	  inner join student_grade
                  // 	  on student.index_number=student_grade.index_number
                  // 	  where student_grade.grade_id='$grade_id' and student._status=''";
                       $sql="select student.full_name as std_name,student.id as std_id,student.index_number as std_index 
                       from student
                      inner join student_grade
                      on student.index_number=student_grade.index_number
                      where student_grade.grade_id='$grade_id'";
                      
                  	  	  
                  $result=mysqli_query($conn,$sql);
                  $count=0;
                  if(mysqli_num_rows($result) > 0){
                  	while($row=mysqli_fetch_assoc($result)){
                  		$count++;
                  ?>   
               <tr>
                  <td><?php echo $count; ?></td>
                  <td id="td1_<?php echo $row['std_id']; ?>">
                     <a href="#modalviewform" onClick="showModal1(this)" class=""  data-id="<?php echo $row["std_id"]; ?>,<?php echo $grade_id; ?>" data-toggle="modal"><?php echo $row['std_name']; ?></a>
                  </td>
                  <td>
                     <!--MSK-00113 -->                                     
                     <a href="edit_student2.php?std_index=<?php echo $row["std_index"]; ?>&grade_id=<?php echo $grade_id; ?>" onClick="" class="btn btn-info btn-xs">Edit</a>
                     <!--MSK-00128 -->
                     <a href="#" class="confirm-delete btn btn-danger btn-xs" data-id="<?php echo $row["std_id"];?>,<?php echo $grade_id; ?>,<?php echo $row["std_index"];?>">Leave</a>
                     <!--MSK-00146 -->
                     <a href="#" class="btn btn-success btn-xs" onClick="editSubject(this)"  data-id="<?php echo $row["std_index"]; ?>" >Edit Subject</a>
                     <a href="#" class="confirm-upgrade btn btn-danger btn-xs"  data-id="<?php echo $row["std_index"]; ?>" >Upgrade Grade</a>  
                  </td>
               </tr>
               <?php } } ?>
            </tbody>
         </table>
      </div>
      <!-- /.box-body -->           
   </div>
   <!-- /.box-->
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

