<?php
    include_once('../controller/config.php');
    $sql="SELECT * FROM student";
    $result=mysqli_query($conn,$sql);
?>
<table id="ex1" class="table table-bordered table-striped table"> <!-- id was example1 to format as Datatable-->

    <thead>
        <th class="">Student Name</th>
        <th class="">Subjects</th>
        <th class="">Date</th>
        <th class="">Time</th>
        <th class="">Action</th>
    </thead>
    <tbody>
        <?php 
        if(mysqli_num_rows($result) > 0){
            
            while($row=mysqli_fetch_assoc($result)){
        ?> 
                <tr>
                    <td data-studid='<?php echo $row["id"] ?>'>
                        <?php
                        echo $row["full_name"];
                        ?>
                    </td>
                    <td class="subjectVal"></td>
                    <td class="dateVal"></td>
                    <td class="timeVal"></td>
                    <td>
                        <div class="form-check align-center">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            
                        </div>
                    </td>
                    
                </tr>
                
            <?php }} ?>

    </tbody>
</table>