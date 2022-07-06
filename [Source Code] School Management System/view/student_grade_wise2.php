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
            <div class="box-header">
                <h3 class="box-title">My Student</h3>
                <!-- attendance feature -->
                <button  class="btn btn-sm btn-primary pull-right" data-toggle="modal" data-target="#attendance">Attendance</button>
                <?php
                include_once('../controller/config.php');
                $grade_id=$_GET['grade'];
                ?>
                <div class="pull-right"> 
                    <a href="add_student2.php?grade_id=<?php echo $grade_id; ?>" class="btn btn-info btn-xs" style="margin-right:5px;padding:5px 10px;">Add Student</a>
               </div>
            </div><!-- /.box-header -->

        </div>
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

                    $sql="select student.i_name as std_name,student.id as std_id,student.index_number as std_index 
                    from student
                    inner join student_grade
                    on student.index_number=student_grade.index_number
                    where student_grade.grade_id='$grade_id' and student._status=''";

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
                                </td>
                            </tr>
                        <?php } } ?>
                    </tbody>
                </table>    
            </div><!-- /.box-body -->           
    </div><!-- /.box-->

    <!-- start of modal for attendance -->
   <div class="modal msk-fade" style="display: none;" id="attendance" tabindex="-1" role="dialog" aria-labelledby="insert_alert1" aria-hidden="true" data-backdrop="static" data-keyboard="false" style="display: block;">
      <div class="modal-dialog">
         <!--modal-dialog -->  
         <div class="container col-lg-12 ">
            <!--modal-content --> 
            <div class="row">
               <div class="panel panel-info">
                  <!--panel --> 
                  <div class="panel-heading">
                     <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                     <h3 class="panel-title" id="hname"><strong>Attendance</strong></h3>
                  </div>
                  <div class="panel-body">
                     <!--panel-body -->
                     <div class="form-row mb-3">
                        <form class="form-horizontal">
                           <div class="form-group col-md-4 mr-2">
                              <label class="control-label" for="inputState">Subjects</label>
                              <select id="inputState" class="form-control subjects" name="subjects">
                                 <option value="" selected>Choose...</option>
                                 <option value="Math">Math</option>
                                 <option value="Physics">Physics</option>
                                 <option value="Chemistry">Chemistry</option>
                                 <option value="Biology">Biology</option>
                              </select>
                           </div>
                           <div class="form-group col-md-1 mr-2"></div>
						   <div class="form-group col-md-4 mr-2">
                              <label class="control-label" for="inputState">Date</label>
                              <select id="inputState" class="form-control dateForSubs" name="dateForSubs">
                                 <option value="" selected>Choose...</option>
                                 <option value="24-06-2022">24-06-2022</option>
                                 <option value="27-06-2022">27-06-2022</option>
                                 <option value="28-06-2022">28-06-2022</option>
                                 <option value="29-06-2022">29-06-2022</option>
                                 <option value="01-07-2022">01-07-2022</option>
                                 <option value="02-07-2022">02-07-2022</option>
                              </select>
                           </div>
						   <div class="form-group col-md-1 mr-2"></div>
                           <div class="form-group col-md-4 mr-2">
                              <label class="control-label" for="inputState">Time</label>
                              <select id="inputState" class="form-control timeForSub" name="timeForSub">
                                 <option value="" selected>Choose...</option>
                                 <option value="12:00-13:00">12:00-13:00</option>
                                 <option value="14:00-15:00">14:00-15:00</option>
                                 <option value="15:30-16:30">15:30-16:30</option>
                                 <option value="11:00-12:00">11:00-12:00</option>

                              </select>
                           </div>
                           <div class="form-group col-md-1 mr-2"></div>
                           <div class="form-group col-md-12 pull-right " style="padding-top: 0px; padding-left:0px;">
                              <button name="submit"  class="btn btn-sm	btn-primary submitDetails" >Load</button>
                           </div>
                        </form>
                     </div>
					 <!-- start of php fetch students -->
					 <div class="col-md-12">
						<div class="box">
							<div class="box-header">
								<h3 class="box-title"><strong>Attendance List</strong></h3>
				  				<!-- alert from response -->
								<span class="attendance-status" style="padding: 0 8px;color: deepskyblue; background: antiquewhite; border-radius: 10px;float: right;"></span>
							</div>
							<!-- /.box-header -->

                     <!-- load students from my_student jquery and load_students page -->
							<div class="box-body table-responsive " id="table2">
								
                     </div><!-- end of box -->
						</div><!-- end of box -->

					</div><!-- end of col-md-8 -->
					
					<!-- print the response from the page -->
					<div class="printMsg"></div>
					
                  </div><!--/.panel-body ends-->
                  <!-- panel footer starts -->
                  <div class="panel-footer" style="text-align:right;">
                     <button type="submit" class="btn btn-info submitToDB"  >Submit</button>
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
</div>

