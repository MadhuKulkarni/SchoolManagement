<?php
    if(isset($_POST['feedback'], $_POST['id'])) {
        include_once('../controller/config.php');
        $feedback = $_POST['feedback'];
        $id = $_POST['id'];
        $query = 'UPDATE student_assignment SET feedback="'.$feedback.'" WHERE id='.$id;

        if (mysqli_query($conn, $query)) {
            echo $feedback;
        } else {
            echo "Error: <br>" . mysqli_error($conn);
        }
    } else {
        $uploadDirectory = "../uploads/"; 
        // echo $uploadDirectory;
        if (!file_exists($uploadDirectory)) {
            mkdir($uploadDirectory, 0777);
        }
    
        $errors = [];
    
        $fileExtensions = ['jpeg','jpg','png','gif','docx','doc','pdf'];
    
    
        if(!empty($_FILES['fileAjax'] ?? null && isset($_POST['id']))) {
            $id = (int)$_POST['id'];
            $fileName = $_FILES['fileAjax']['name'];
            $fileTmpName  = $_FILES['fileAjax']['tmp_name'];
            $fileType = $_FILES['fileAjax']['type'];
            $fileExtension = strtolower(pathinfo($fileName,PATHINFO_EXTENSION));
    
            $uploadPath = $uploadDirectory . basename($fileName);
            // echo  $uploadPath;
            $response = array();
    
            if (isset($fileName)) {
                if (! in_array($fileExtension,$fileExtensions)) {
                    $errors[] = "JPEG, JPG, PNG, GIF, DOCX, DOC and PDF files are only supported";
                }
                if (empty($errors)) {
                    $didUpload = move_uploaded_file($fileTmpName, $uploadPath);
                    if ($didUpload) {
                        include_once('../controller/config.php');
                        $query = 'UPDATE timetable SET notes="'.$uploadPath.'" WHERE id='.$id;
                        if (mysqli_query($conn, $query)) {
                            $response['status'] = true;
                            $response['data'] = $uploadPath;
                        } else {
                            $response['status'] = false;
                            $response['error'] = "Error: <br>" . mysqli_error($conn);
                        }
                    } else {
                        $response['status'] = false;
                        $response['error'] = "An error occurred while uploading. Try again.";
                    }
                } else {
                    foreach ($errors as $error) {
                        $response['status'] = false;
                        $response['error'] = $error . "The following error occured: " . "\n";
                    }
                }

                echo json_encode($response);
            }
        }
    }