<?php
include_once('controller/config.php');
if(isset($_POST["do"])&&($_POST["do"]=="add_class_student")){

	$grade_id = $_POST["grade_id"];	

	$index_number = $_POST["index_number"];	
	$full_name = $_POST["full_name"];
	$i_name= $_POST["i_name"];
	$gender = $_POST["gender"];
	$address = $_POST["address"];
	$phone = $_POST["phone"];
	$email = $_POST["email"];
	$b_date = $_POST["b_date"];
	
	$g_index_number = $_POST["g_index"];	
	$g_full_name = $_POST["g_full_name"];
	$g_i_name= $_POST["g_i_name"];
	$g_gender = $_POST["g_gender"];
	$g_address = $_POST["g_address"];
	$g_phone = $_POST["g_phone"];
	$g_email = $_POST["g_email"];
	$g_b_date = $_POST["g_b_date"];
	
	$reg_year=date("Y");
	$reg_month=date("F");
	$reg_date=date("Y-m-d");
	
	$target_dir = "uploads/";
	$name = basename($_FILES["fileToUpload"]["name"]);
	$size = $_FILES["fileToUpload"]["size"];
	$type = $_FILES["fileToUpload"]["type"];
	$tmpname = $_FILES["fileToUpload"]["tmp_name"];

	$max = 31457280;
	$extention = strtolower(substr($name, strpos($name, ".")+ 1));
	$filename = date("Ymjhis");
	
	//Guardian Details
	$name1 = basename($_FILES["g_fileToUpload"]["name"]);
	$size1 = $_FILES["g_fileToUpload"]["size"];
	$type1 = $_FILES["g_fileToUpload"]["type"];
	$tmpname1 = $_FILES["g_fileToUpload"]["tmp_name"];

	$max1 = 31457280;
	$extention1 = strtolower(substr($name1, strpos($name1, ".")+ 1));
	$filename1 = date("Ymjhis")+1;
	
	$msg=0;//for alerts
	$g_msg=0;//for alerts
	$image_path =  $target_dir.$filename.".".$extention;
	$g_image_path =  $target_dir.$filename1.".".$extention1;
	
	//Insert Student------------------------------------------------------------------------------------------------------------
	$sql1="SELECT * FROM student where index_number='$index_number'";	
	$result1=mysqli_query($conn,$sql1);
	$row1=mysqli_fetch_assoc($result1);
	$index_number1=$row1['index_number'];
	
	if($index_number == $index_number1 ){
		//MSK-000143-1 The index number is duplicated.
		$msg+=1;
	}else{
	$sql = "INSERT INTO student (index_number,full_name,i_name,gender,address,phone,email,image_name,reg_year,reg_month,reg_date,b_date)
	VALUES ('".$index_number."','".$full_name."','".$i_name."','".$gender."','".$address."','".$phone."','".$email."','".$image_path."','".$reg_year."','".$reg_month."','".$reg_date."','".$b_date."')";

		if(mysqli_query($conn,$sql)){
			$msg+=2;  
					//MSK-000143-6 The record has been successfully inserted into the database.

		}else{
			$msg+=3;  
					//MSK-000143-7 Connection problem.
		}


	//Insert Parents-------------------------------------------------------------------------------------------------------------

		$sql1 = "INSERT INTO parents (index_number,my_son_index,full_name,i_name,gender,address,phone,email,image_name,reg_year,reg_month,reg_date,b_date)
		VALUES ('".$g_index_number."','".$index_number."','".$g_full_name."','".$g_i_name."','".$g_gender."','".$g_address."','".$g_phone."','".$g_email."','".$g_image_path."','".$reg_year."','".$reg_month."','".$reg_date."','".$g_b_date."')";

			if(mysqli_query($conn,$sql1)){
				$g_msg+=2;  
					//MSK-000143-6 The record has been successfully inserted into the database.

			}else{
				$g_msg+=3;  
					//MSK-000143-7 Connection problem.
			}


	//Insert student_grade------------------------------------------------------------------------------------------------------------

			$sql2 = "INSERT INTO student_grade (index_number,grade_id,year)
			VALUES ('".$index_number."','".$grade_id."','".$reg_year."')";
				$result2 = $conn->query($sql2);

}
				if(isset($_POST["showPage"])&&($_POST["showPage"]=="my_student")){

					header("Location: view/my_student.php?do=alert_from_class_insert&msg=$msg&grade=$grade_id");			

				}

				

			}
		?>