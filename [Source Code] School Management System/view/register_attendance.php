<?php
    include_once('../controller/config.php');
   
    $dataVal = $_POST["data"];
    // echo "<pre>";
    // print_r($_POST["data"]);
    // echo "</pre>";
    // exit;
    
    foreach($dataVal as $val) {
        $studId = $val['studId'];
        $subject = $val['subject'];
        $date = $val['date'];
        $time = $val['time'];
        $attendance = $val['attendance'];

      
        $sql = "INSERT INTO my_attendance (studId, subject, date, time, attendance) VALUES( ".$studId.", '" . $subject . "', '" . $date . "', '" . $time . "', '" . $attendance . "')";

        
        
        if(!mysqli_query($conn, $sql)) {
            $response = 'Error...please try again later';
        }
    
    }
   
    $response = 'Attendance registered successfully';

    echo $response;
?>


