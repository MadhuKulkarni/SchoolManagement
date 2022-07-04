<?php
    $uploadDirectory = "../uploads/"; 
    // echo $uploadDirectory;
    if (!file_exists($uploadDirectory)) {
        mkdir($uploadDirectory, 0777);

    }

    $errors = [];

    $fileExtensions = ['jpeg','jpg','png','gif','docx','doc','pdf'];


    if(!empty($_FILES['fileAjax'] ?? null && isset($_POST('id')))) {
        $id = (int)$_POST['id'];
        $fileName = $_FILES['fileAjax']['name'];
        $fileTmpName  = $_FILES['fileAjax']['tmp_name'];
        $fileType = $_FILES['fileAjax']['type'];
        $fileExtension = strtolower(pathinfo($fileName,PATHINFO_EXTENSION));

        $uploadPath = $uploadDirectory . basename($fileName);
        echo  $uploadPath;

        if (isset($fileName)) {
            if (! in_array($fileExtension,$fileExtensions)) {
                $errors[] = "JPEG, JPG, PNG, GIF, DOCX, DOC and PDF files are only supported";
            }
            if (empty($errors)) {
                $didUpload = move_uploaded_file($fileTmpName, $uploadPath);
                if ($didUpload) {
                    include_once('../controller/config.php');
                    $query = 'UPDATE timetable SET assignment="'.$uploadPath.'" WHERE id='.$id;
                    if (mysqli_query($conn, $query)) {
                        echo "The file " . basename($fileName) . " has been uploaded.";
                    } else {
                        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                    }
                } else {
                    echo "An error occurred while uploading. Try again.";
                }
            } else {
                foreach ($errors as $error) {
                    echo $error . "The following error occured: " . "\n";
                }
            }
        }
    }