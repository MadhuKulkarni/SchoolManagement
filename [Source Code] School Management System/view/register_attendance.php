<?php
    include_once('../controller/config.php');
   
    $dataVal = $_POST["data"];
    // echo "<pre>";
    // print_r($_POST["data"]);
    // echo "</pre>";
    // exit;
    
try{
        foreach($dataVal as $val) {
            $studId = $val['studId'];
            $subject = $val['subject'];
            $date = $val['date'];
            $time = $val['time'];
            $attendance = $val['attendance'];

        
            $sql = "INSERT INTO my_attendance (studId, subject, date, time, attendance) VALUES( ".$studId.", '" . $subject . "', '" . $date . "', '" . $time . "', '" . $attendance . "')";

            
            
          
            $response;
       
            if(!mysqli_query($conn, $sql)) {
                // $response = 'Error inserting the duplicates';
                $response = 'Error inserting the duplicates';
                throw new Exception($response);
            }
        
        }

        $response = 'Attendance registered successfully';
    }
   
    catch(Exception $e){
        echo $response = $e->getMessage();
    }
   

    // echo $response;
?>

