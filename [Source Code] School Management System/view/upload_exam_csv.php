<?php
   // include mysql database configuration file
   include_once('../controller/config.php');
   

    
    if(isset($_FILES['file']['name'])){

    if(isset($_POST['grade'])) {
        $grade = (int)$_POST['grade'];
    }
    if(isset($_POST['exam'])) {
        $exam = (int)$_POST['exam'];
    }

        // Allowed mime types
        $fileMimes = array(  
            'text/x-comma-separated-values',
            'text/comma-separated-values',
            'application/octet-stream',
            'application/vnd.ms-excel',
            'application/x-csv',
            'text/x-csv',
            'text/csv',
            'application/csv',
            'application/excel',
            'application/vnd.msexcel',
            'text/plain'
        );

       // Validate whether selected file is a CSV file
       if (!empty($_FILES['file']['name']) && in_array($_FILES['file']['type'], $fileMimes)) {
            // Open uploaded CSV file with read-only mode
            $csvFile = fopen($_FILES['file']['tmp_name'], 'r');

            // Skip the first line
            fgetcsv($csvFile);
            $students_count = 0;
            // Parse data from CSV file line by line
            // Parse data from CSV file line by line
            while (($getData = fgetcsv($csvFile, 10000, ",")) !== FALSE) {
                // Get row data
            
                $index_number= mysqli_real_escape_string($conn, $getData[0]);
                $subject_id = $getData[1];
                $marks = $getData[2];
                $year = $getData[3];
                $date = $getData[4];
               
                
             

                if(($index_number!= '') && ($subject_id!='') && ($exam!='')&&($year!='')) {
                    // // If user already exists in the database with the same email
                     $query = "SELECT id FROM student_exam WHERE index_number = " . $index_number ." AND subject_id = ".$subject_id ." AND year= '" .$year."' AND grade_id= ".$grade ." AND exam_id=".$exam;
                  
                    $check = mysqli_query($conn, $query);
                    // echo "<pre>";
                    // print_r ($check); 
                    // echo "</pre>";
                    
                    if ($check->num_rows > 0) {
                        $query = "UPDATE student_exam SET marks = '" . $marks ."' WHERE index_number = " . $index_number ." AND subject_id = ".$subject_id ." AND year= '" .$year."' AND grade_id= ".$grade ." AND exam_id=".$exam;
                        //echo $query;
                        if (mysqli_query($conn, $query)) {
                            $students_count++;
                            // $query = "SELECT index_number FROM student WHERE email = '" . $email . "'";
                            //echo $query;
                            // $exec = mysqli_query($conn, $query);
                            // while ($row = mysqli_fetch_array($exec)) {
                            //     $index_number_rel = $row[0];
                            // }
                            // $query = "UPDATE student_grade SET grade_id = " . $grade . ", year = '" . $reg_year . "' WHERE index_number = " .$index_number_rel;
                            // if (!mysqli_query($conn, $query)) {
                            //     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                            // }
                        } else {
                            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                        }
                    } else {
                        $query = "INSERT INTO student_exam (index_number,grade_id,exam_id,subject_id,marks,year,date) VALUES (" . $index_number . ", " . $grade . "," . $exam . "," . $subject_id . ",'" . $marks . "', '" . $year . "','" . $date. "')";
                        if (mysqli_query($conn, $query)) {
                            // $last_id = mysqli_insert_id($conn);

                            $students_count++;
                            // $query = "SELECT index_number FROM student WHERE id = " . $last_id;
                            // $exec = mysqli_query($conn, $query);
                            // while ($row = mysqli_fetch_array($exec)) {                  
                            //     $index_number_rel = $row[0];
                            // }
                            // $query = "INSERT INTO student_grade (index_number, grade_id, year) VALUES (" . $next_index_number . ", " . $grade . ", '" . $reg_year . "')";

                            // if (!mysqli_query($conn, $query)) {
                            //     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                            // }
                        } else {
                            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                        }
                    }
                }   
            }

            // Close opened CSV file
            fclose($csvFile);
            
            if($students_count > 1) {
                echo 'Uploaded '.$students_count.' Students Successfully. ';
            } else {
                echo 'Uploaded '.$students_count.' Student Successfully. ';
            }
       } else {
           echo "Please select valid file";
       }
    }


?>