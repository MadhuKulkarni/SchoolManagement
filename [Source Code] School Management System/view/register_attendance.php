<?php
    include_once('../controller/config.php');
   
    // echo "<pre>";
    // print_r($_POST["data"]);
    // echo "</pre>";
    // exit;
    if(isset($_POST["data"])){
        $dataVal = $_POST["data"];
        try{
                foreach($dataVal as $val) {
                    $classId = $val['classId'];
                    $studId = $val['studId'];
                    $subject = $val['subject'];
                    $date = $val['date'];
                    $time = $val['time'];
                    $attendance = $val['attendance'];
                    
                    $month = date('F', strtotime($val['date']));
                    $year = date('Y', strtotime($val['date']));
                    
                 

                    $sql = "INSERT INTO my_attendance (classid, studId, subject, date, month, year, time, attendance) VALUES( ".$classId.", ".$studId.", '" . $subject . "', '" . $date . "', '" . $month . "', ".$year.", '" . $time . "', '" . $attendance . "')";


            
                    if(!mysqli_query($conn, $sql)) {
                        $response = 'Error: The same record is been submitted!';
                        throw new Exception($response);
                    }
                
                }

                $response = 'Attendance registered successfully!!!';
                
            }
        
        catch(Exception $e){
                $response = $e->getMessage();
                
            }

            echo $response;
    }else{
        echo "Invalid Data!!!";
    }
        

    // to do: in case of reattendance for the same duration update is required...
?>


