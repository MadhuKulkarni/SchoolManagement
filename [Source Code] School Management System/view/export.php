<?php
include_once('../controller/config.php');

if(isset($_POST["className"]) && isset($_POST["subjectInp"]) && isset($_POST["monthInp"]) && isset($_POST["yearInp"])){
   
    if(isset($_POST["action"]) && trim($_POST["action"])=="filter" && !isset($_POST["submit"])){

        $className = trim($_POST["className"]);
        $monthInp = trim($_POST["monthInp"]);
        $yearInp = trim($_POST["yearInp"]);
        $subjectInp = trim($_POST["subjectInp"]);

        $whereClause = '';
        $classClause= '';
        $monthClause= '';
        $yearClause= '';
        $subjectClause= '';


        if(!empty($className)){
            $classClause .= 'c.name = "'.$className.'"';
            
        }
        if(!empty($monthInp)){
            $monthClause .= 'a.month = "'.$monthInp.'"';
            
        }
        if(!empty($yearInp)){
            $yearClause .= 'a.year = "'.$yearInp.'"';
            
        }
        if(!empty($subjectInp)){
            $subjectClause .= 'a.subject = "'.$subjectInp.'"';
            
        }

        if(!empty($classClause) || !empty($monthClause) || !empty($yearClause) || !empty($subjectClause)){
            $whereClause .= 'where';
            $flag = false;
            if(!empty($classClause)){
                $flag = true;
                $whereClause .= ' ' . $classClause;
            }
            if(!empty($monthClause)){
                if($flag){
                    $whereClause.= ' AND '. $monthClause;
                }else{
                    $flag = true;
                    $whereClause .= ' ' . $monthClause;
                }
            }
            if(!empty($yearClause)){
                if($flag){
                    $whereClause.= ' AND '. $yearClause;
                }else{
                    $flag = true;
                    $whereClause .= ' ' . $yearClause;
                }
                
            }
            if(!empty($subjectClause)){
                if($flag){
                    $whereClause.= ' AND '. $subjectClause;
                }else{
                    $flag = true;
                    $whereClause .= ' ' . $subjectClause;
                }
                
            }
        }

        
        $sql = "select s.full_name, s.id, a.subject, a.date, a.time, a.month, a.year, c.name, a.attendance from student as s JOIN my_attendance as a ON s.id = a.studid JOIN grade as c ON a.classid = c.id ".$whereClause;

        include_once('../controller/config.php');
        $result=mysqli_query($conn,$sql);
        if(mysqli_num_rows($result) > 0) {
            $table_markup = '';
            $table_markup .= '<table class="table table-bordered table-striped">';
            $table_markup .= '<thead>
                                    <th class="col-md-1">ID</th>
                                    <th class="col-md-1">Student Name</th>
                                    <th class="col-md-1">Student ID</th>
                                    <th class="col-md-1">Class</th>
                                    <th class="col-md-1">Subject</th>
                                    <th class="col-md-1">Date</th>
                                    <th class="col-md-1">Month</th>
                                    <th class="col-md-1">Year</th>
                                    <th class="col-md-1">Time</th>
                                    <th class="col-md-1">Status</th>
                                </thead>';
            $table_markup .= '<tbody>';
            $count = 1;
            
            while($row=mysqli_fetch_assoc($result)) {
                $table_markup .= '<tr>';
                $table_markup .= '<td>'.$count.'</td>';
                $table_markup .= '<td>'.$row["full_name"].'</td>';
                $table_markup .= '<td>'.$row["id"].'</td>';
                $table_markup .= '<td>'.$row["name"].'</td>';
                $table_markup .= '<td>'.$row["subject"].'</td>';
                $table_markup .= '<td>'.$row["date"].'</td>';
                $table_markup .= '<td>'.$row["month"].'</td>';
                $table_markup .= '<td>'.$row["year"].'</td>';
                $table_markup .= '<td>'.$row["time"].'</td>';
                $table_markup .= '<td>'.$row["attendance"].'</td>';
                $table_markup .= '</tr>';
                $count++;
            }

            $table_markup .= '</tbody>';
            $table_markup .= '</table>';

            echo $table_markup;

            mysqli_close($conn);
        } else {
            echo "No data available for this filter";
        }
        
    }elseif(isset($_POST["submit"])){

        header('Content-Type: text/csv; charset=utf-8');
        header('Content-Disposition: attachment; filename=students_attendance.csv');
        $output=fopen("php://output", "w");
        fputcsv($output, array('Student Name', 'Student ID', 'Subject', 'Date', 'Time','Month', 'Year', 'Class',  'Attendance'));
        $className = trim($_POST["className"]);
        $monthInp = trim($_POST["monthInp"]);
        $yearInp = trim($_POST["yearInp"]);
        $subjectInp = trim($_POST["subjectInp"]);

        $whereClause = '';
        $classClause= '';
        $monthClause= '';
        $yearClause= '';
        $subjectClause= '';


        if(!empty($className)){
            $classClause .= 'c.name = "'.$className.'"';
            
        }
        if(!empty($monthInp)){
            $monthClause .= 'a.month = "'.$monthInp.'"';
            
        }
        if(!empty($yearInp)){
            $yearClause .= 'a.year = "'.$yearInp.'"';
            
        }
        if(!empty($subjectInp)){
            $subjectClause .= 'a.subject = "'.$subjectInp.'"';
            
        }

        if(!empty($classClause) || !empty($monthClause) || !empty($yearClause) || !empty($subjectClause)){
            $whereClause .= 'where';
            $flag = false;
            if(!empty($classClause)){
                $flag = true;
                $whereClause .= ' ' . $classClause;
            }
            if(!empty($monthClause)){
                if($flag){
                    $whereClause.= ' AND '. $monthClause;
                }else{
                    $flag = true;
                    $whereClause .= ' ' . $monthClause;
                }
            }
            if(!empty($yearClause)){
                if($flag){
                    $whereClause.= ' AND '. $yearClause;
                }else{
                    $flag = true;
                    $whereClause .= ' ' . $yearClause;
                }
                
            }
            if(!empty($subjectClause)){
                if($flag){
                    $whereClause.= ' AND '. $subjectClause;
                }else{
                    $flag = true;
                    $whereClause .= ' ' . $subjectClause;
                }
                
            }
        }
        $sql = "select s.full_name, s.id, a.subject, a.date, a.time, a.month, a.year, c.name, a.attendance from student as s JOIN my_attendance as a ON s.id = a.studid JOIN grade as c ON a.classid = c.id ".$whereClause;
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_assoc($result)){
            fputcsv($output, $row);
        }
        fclose($output);
        mysqli_close($conn);
    }

}

            

?>