<?php
   // include mysql database configuration file
   include_once('../controller/config.php');
   

    
    if(isset($_FILES['file']['name'])){

    if(isset($_POST['grade'])) {
        $grade = (int)$_POST['grade'];
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
                $full_name = $getData[1];
                $i_name = $getData[2];
                $gender = $getData[3];
                $address = $getData[4];
                $phone = $getData[5];              
                $email = trim($getData[6]);
                $image_name = $getData[7];
                $b_date = $getData[8];
                $_status = $getData[9];
                $reg_year = $getData[10];
                $reg_month = $getData[11];
                $reg_date = $getData[12];
                
                $email_warning = false;

                if($email != '') {
                    // If user already exists in the database with the same email
                    $query = "SELECT id FROM student WHERE email = '" . $getData[6] . "'";

                    $check = mysqli_query($conn, $query);
                    $query1 = "SELECT index_number FROM student ORDER BY id DESC LIMIT 1";
                    $last_row = mysqli_query($conn, $query1);
                    while ($row = mysqli_fetch_array($last_row)) {
                        $next_index_number = $row[0] + 1;
                    }
                    // echo "<pre>";
                    // print_r ($check); 
                    // echo "</pre>";
                    
                    if ($check->num_rows > 0) {
                        $query = "UPDATE student SET full_name = '" . $full_name . "', i_name = '" . $i_name . "',gender = '" . $gender . "',address = '" . $address . "',phone = '" . $phone . "',image_name = '" . $image_name . "', b_date = '" . $b_date . "', _status = '" . $_status . "',reg_year = '" . $reg_year . "', reg_month = '" . $reg_month . "', reg_date = '" . $reg_date . "' WHERE email = '" . $email . "'";
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
                        $query = "INSERT INTO student (index_number,full_name,i_name,gender,address,phone,email,image_name,b_date,_status,reg_year,reg_month,reg_date) VALUES (" . $next_index_number . ", '" . $full_name . "','" . $i_name . "','" . $gender . "','" . $address . "', '" . $phone . "','" . $email . "','" . $image_name . "','" . $b_date . "','" . $_status . "','" . $reg_year . "','" . $reg_month . "','" . $reg_date . "')";
                        if (mysqli_query($conn, $query)) {
                            // $last_id = mysqli_insert_id($conn);

                            $students_count++;
                            // $query = "SELECT index_number FROM student WHERE id = " . $last_id;
                            // $exec = mysqli_query($conn, $query);
                            // while ($row = mysqli_fetch_array($exec)) {                  
                            //     $index_number_rel = $row[0];
                            // }
                            $query = "INSERT INTO student_grade (index_number, grade_id, year) VALUES (" . $next_index_number . ", " . $grade . ", '" . $reg_year . "')";

                            if (!mysqli_query($conn, $query)) {
                                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                            }
                        } else {
                            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                        }
                    }
                } else {
                    $email_warning = true;
                }
            }

            // Close opened CSV file
            fclose($csvFile);
            $email_warning_msg = '';
            if($email_warning) {
                $email_warning_msg = 'Warning: Please make sure to provide email ID for each student!';
            }
            if($students_count > 1) {
                echo 'Uploaded '.$students_count.' Students Successfully. '.$email_warning_msg;
            } else {
                echo 'Uploaded '.$students_count.' Student Successfully. '.$email_warning_msg;
            }
       } else {
           echo "Please select valid file";
       }
    }


?>