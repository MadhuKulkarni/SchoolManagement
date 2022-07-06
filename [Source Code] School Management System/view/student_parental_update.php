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
                <?php
                include_once('../controller/config.php');
                $grade_id=$_GET['grade'];
                ?>
                <div class="col-md-offset-10">
<a  href="class_parental_update.php?grade_id=<?php echo $grade_id; ?>" class="btn btn-success btn-xs">Bulk Parental Update</a>
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
                            <a href="single_parental_update.php?std_index=<?php echo $row["std_index"]; ?>&grade_id=<?php echo $grade_id; ?>" class="btn btn-info btn-xs">Parental Update</a>  

                            </td>
                        </tr>
                    <?php } } ?>
                </tbody>
            </table>    
        </div><!-- /.box-body -->           
    </div><!-- /.box-->
</div>