<<<<<<< Updated upstream
<?php include_once('head.php'); ?>
<?php 
include('google_config.php');
=======
<?php

include_once('../controller/config.php');
include_once('head.php');
?>
>>>>>>> Stashed changes

$login_button = '';


if(isset($_GET["code"]))
{

 $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);


 if(!isset($token['error']))
 {
 
  $google_client->setAccessToken($token['access_token']);

 
  $_SESSION['access_token'] = $token['access_token'];

 



  $google_service = new Google_Service_Oauth2($google_client);

 
  $data = $google_service->userinfo->get();

 
  if(!empty($data['given_name']))
  {
   $_SESSION['user_first_name'] = $data['given_name'];
  }

  if(!empty($data['family_name']))
  {
   $_SESSION['user_last_name'] = $data['family_name'];
  }

  if(!empty($data['email']))
  {
   $_SESSION['user_email_address'] = $data['email'];
  }

  if(!empty($data['gender']))
  {
   $_SESSION['user_gender'] = $data['gender'];
  }

  if(!empty($data['picture']))
  {
   $_SESSION['user_image'] = $data['picture'];
  }
 }
}


if(!isset($_SESSION['access_token']))
{

 $login_button = '<a href="'.$google_client->createAuthUrl().'" class="btn float-left " style="background-color:#2962ff;color:#ffffff;font-size: 15px;margin:0 0 35px 15px;"><img src="../uploads/google_sign_in.png" style="height:22px;width:25px;"/>&nbsp;Sign In With Google</a>';
}

?>
<head>
	<title>Login Page</title>
   <!--Made with love by Mutiullah Samim -->
   
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="styles.css">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

 

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

 

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</head>

<style>

/*.form-control-feedback {
  
   pointer-events: auto;
  
}


.msk-set-color-tooltip + .tooltip > .tooltip-inner { 
  
     min-width:180px;
	 background-color:red;
}

.bg{
	width:100%;
	height:100%;
}

#loginFrom{
	opacity:0.6;	
}*/

/*body{
	background-color:#fef492;
}*/

body{
background-image: url('../uploads/background.jpg');
background-size: cover;
background-repeat: no-repeat;
height: 100%;
font-family: 'Numans', sans-serif;
font-size: 15px;
}
.container{
height: 100%;
align-content: center;
}

.card{
height: 370px;
margin-top: auto;
margin-bottom: auto;
width: 400px;
background-color: rgba(0,0,0,0.5) !important;
}

.social_icon span{
font-size: 60px;
margin-left: 10px;
color: #FFC312;
}

.social_icon span:hover{
color: white;
cursor: pointer;
}

.card-header h3{
color: white;
}

.social_icon{
position: absolute;
right: 20px;
top: -45px;
}

.input-group-prepend span{
width: 50px;
background-color: #FFC312;
color: black;
border:0 !important;
}

input:focus{
outline: 0 0 0 0  !important;
box-shadow: 0 0 0 0 !important;

}

.remember{
color: white;
}

.remember input
{
width: 20px;
height: 20px;
margin-left: 15px;
margin-right: 5px;
}

.login_btn{
color: black;
background-color: #FFC312;
width: 100px;
}

.login_btn:hover{
color: black;
background-color: white;
}

.links{
color: white;
}

.links a{
margin-left: 4px;
}
</style>
<<<<<<< Updated upstream


<!--body onLoad="login()"-->
	<body>
	<!--img src="../uploads/background.jpg" class="bg" /-->


<div class="container" style="margin-top:80px;">
	<div class="d-flex justify-content-center h-100">
		<div class="card"  style=" border-radius: 15px;">
			<div class="card-header">
				<h3>Sign In</h3>
				<div class="d-flex justify-content-end social_icon">
					<span><i class="fab fa-facebook-square"></i></span>
					<span><i class="fab fa-google-plus-square"></i></span>
					<span><i class="fab fa-twitter-square"></i></span>
				</div>
			</div>
			<div class="card-body">
				<form role="form" action="../index.php" method="post">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user fa-2x"></i></span>
						</div>
						<input type="text" class="form-control" id="email" placeholder="username" name="email" style="font-size:15px;height:40px;">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key fa-2x"></i></span>
						</div>
						<input type="password" class="form-control" id="password" placeholder="password" name="password" style="font-size:15px;height:40px;">
					</div>
					<div class="row align-items-center remember">
						<input type="checkbox">Remember Me
					</div>
					<div class="form-group">
						<input type="hidden" class="btn float-right login_btn" name="do" value="user_login" />
             <button type="submit" class="btn float-right login_btn" id="btnSubmit" style="font-size:15px;">Login</button>
                  
						<!--input type="submit" value="Login" class="btn float-right login_btn"-->
					</div>
				</form>
						
			</div>
				<div>
   <?php
   if($login_button == '')
   {
    echo '<div class="panel-heading">Welcome User</div><div class="panel-body">';
    echo '<img src="'.$_SESSION["user_image"].'" class="img-responsive img-circle img-thumbnail" />';
    echo '<h3><b>Name :</b> '.$_SESSION['user_first_name'].' '.$_SESSION['user_last_name'].'</h3>';
    echo '<h3><b>Email :</b> '.$_SESSION['user_email_address'].'</h3>';
    echo '<h3><a href="logout.php">Logout</h3></div>';
   }
   else
   {
    echo '<div align="center">'.$login_button . '</div>';
   }
   ?>
   </div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					Don't have an account?<a href="#">Sign Up</a>
				</div>
				<div class="d-flex justify-content-center">
					<a href="#">Forgot your password?</a>
				</div>
			</div>
=======
<body onLoad="login()">
	<img src="../uploads/bg.jpg" class="bg" />
	
	<!--Success! - Insert-->
  	<div class="modal fade" id="loginFrom" tabindex="-1" role="dialog" aria-labelledby="loginFrom" aria-hidden="true">
    	<div class="modal-dialog">    
        	<div class="modal-content ">
        		<div class="modal-header bg-aqua-gradient">
          			<h4>User Login...!</h4>
        		</div>
        		<div class="modal-body bgColorWhite">
					<div class="section-a">
						<form role="form" action="../index.php" method="post">                    
							<div class="box-body">
								<div class="form-group" id="divEmail">
									<label for="">Email</label>
									<input type="text" class="form-control" id="email" placeholder="Enter email address" name="email" autocomplete="off">
								</div>
								<div class="form-group" id="divPassword">
									<label for="">Password</label>
									<input type="password" class="form-control" id="password" placeholder="Enter password" name="password" autocomplete="off">
								</div>
							</div><!-- /.box-body -->
							<div class="box-footer">
								<input type="hidden" name="do" value="user_login" />
								<button type="submit" class="btn btn-info" id="btnSubmit">Submit</button>
							</div>
						</form>
					</div>
					<div class="section-b" style=" position: relative;border-top: 1px dashed;margin-top: 15px;">
					<?php
						require_once '../vendor/autoload.php';

						// init configuration
						$clientID = '739525419247-5j56dppd1p3svkjhq039rfie45i6n174.apps.googleusercontent.com';
						$clientSecret = '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';
						$redirectUri = 'http://localhost/school_management_final/%5bSource%20Code%5d%20School%20Management%20System/view/login.php';

						// create Client Request to access Google API
						$client = new Google_Client();
						$client->setClientId($clientID);
						$client->setClientSecret($clientSecret);
						$client->setRedirectUri($redirectUri);
						$client->addScope("email");
						$client->addScope("profile");
						// $client->addScope("https://www.googleapis.com/auth/user.addresses.read");
						// $client->addScope("https://www.googleapis.com/auth/user.birthday.read");
						// $client->addScope("https://www.googleapis.com/auth/user.phonenumbers.read");
						// $client->addScope("https://www.googleapis.com/auth/user.gender.read");

						// authenticate code from Google OAuth Flow
						if (isset($_GET['code'])) {
							$token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
							$client->setAccessToken($token['access_token']);

							// get profile info
							$google_oauth = new Google_Service_Oauth2($client);
							$google_account_info = $google_oauth->userinfo->get();
							$email =  $google_account_info->email;
							$type = "Student";
							$full_name = $google_account_info->name;
							$i_name = $google_account_info->name;
							$gender = $google_account_info->gender;
							$image_name = $google_account_info->picture;

							$sql1="SELECT * FROM student where email='$email'";
							$result1=mysqli_query($conn,$sql1);
							$rowcount=mysqli_num_rows($result1);
							
							$error = false;

							if($rowcount === 0) {
								$sql1="SELECT * FROM student ORDER BY id DESC LIMIT 1";
								$result1=mysqli_query($conn,$sql1);
								$row1=mysqli_fetch_assoc($result1);
				
								$index_number = intval($row1['index_number']) + 1;
				
								$sql1="INSERT INTO user (email, type) VALUES ('".$email."', '".$type."')";
								$sql2="INSERT INTO student (index_number, full_name, i_name, gender, email, image_name, reg_year, reg_month, reg_date) VALUES (".$index_number.", '".$full_name."', '".$i_name."', '".$gender."', '".$email."', '".$image_name."', YEAR(NOW()), MONTHNAME(NOW()), NOW())";

								if (mysqli_query($conn, $sql1) && mysqli_query($conn, $sql2)) {
									$error = false;
								} else {
									$error = true;
								}
							} else {
								$row1=mysqli_fetch_assoc($result1);
								$index_number = intval($row1['index_number']);
							}

							if(!$error) {
								$_SESSION["index_number"]=$index_number;
								$_SESSION["type"]="Student";
								echo '<script>';
								echo 'window.location.replace("http://localhost/school_management_final/%5bSource%20Code%5d%20School%20Management%20System/view/dashboard1.php")';
								echo '</script>';
							}

						// echo "<pre>";
						// print_r($google_account_info);
						// echo "</pre>";
						// exit;

						// now you can use this profile info to create account in your website and make user logged in.
						} else {
						echo "<a href='".$client->createAuthUrl()."' style='
						height: 50px;width: fit-content;font-size: 20px;background: aquamarine;
						padding: 10px 10px 14px;display: block;margin: 25px auto;'><img style='height:32px;' src='https://play-lh.googleusercontent.com/aFWiT2lTa9CYBpyPjfgfNHd0r5puwKRGj2rHpdPTNrz2N9LXgN_MbLjePd1OTc0E8Rl1' />Google Login</a>";
						}
					?>
					</div>
        		</div>
      		</div>      
>>>>>>> Stashed changes
		</div>
	</div>
</div>






















	
	
<script>

function login(){
//document.ready(function{	
	
	$('#loginFrom').modal({
		backdrop: 'static',
		keyboard: false
	});
	$('#loginFrom').modal('show');
};

$("form").submit(function (e) {
//MSK-000098-form submit	

	var uname = $('#email').val();
	var password = $('#password').val();
	
	if(uname == ''){
		//MSK-00099-name
		$("#btnSubmit").attr("disabled", true);
		$('#divEmail').addClass('has-error has-feedback');	
		$('#divEmail').append('<span id="spanEmail" class="glyphicon glyphicon-remove form-control-feedback msk-set-color-tooltip" data-toggle="tooltip"    title="The user name is required" ></span>');	
			
		$("#email").keydown(function() {
			//MSK-00100-name
			$("#btnSubmit").attr("disabled", false);	
			$('#divEmail').removeClass('has-error has-feedback');
			$('#spanEmail').remove();
			
		});	
		
	}
	
	if(password == ''){
		//MSK-00099-name
		$("#btnSubmit").attr("disabled", true);
		$('#divPassword').addClass('has-error has-feedback');	
		$('#divPassword').append('<span id="spanPassword" class="glyphicon glyphicon-remove form-control-feedback msk-set-color-tooltip" data-toggle="tooltip"    title="The password is required" ></span>');	
			
		$("#password").keydown(function() {
			//MSK-00100-name
			$("#btnSubmit").attr("disabled", false);	
			$('#divPassword').removeClass('has-error has-feedback');
			$('#spanPassword').remove();
			
		});	
		
	}
	
	
	if(uname == '' || password == ''){
		//MSK-000098- form validation failed
		$("#btnSubmit").attr("disabled", true);
		e.preventDefault();
		return false;
			
	}else{
		$("#btnSubmit").attr("disabled", false);
		
	}


});
</script>




<?php
if(isset($_GET["do"])&&($_GET["do"]=="login_error")){
//MSK-000143-6-PHP-JS-INSERT
 
	$msg=$_GET['msg'];
	
	if($msg==1){
		echo"
			<script>
			
			var myModal = $('#login_error');
			myModal.modal('show');
			
    		myModal.data('hideInterval', setTimeout(function(){
    			myModal.modal('hide');
    		}, 3000));
						
			</script>
		";
	
	}
	
}
?>


<!--redirect your own url when clicking browser back button -->
<script>
(function(window, location) {
history.replaceState(null, document.title, location.pathname+"#!/history");
history.pushState(null, document.title, location.pathname);

window.addEventListener("popstate", function() {
  if(location.hash === "#!/history") {
    history.replaceState(null, document.title, location.pathname);
    setTimeout(function(){
      location.replace("../index.php");//path to when click back button
    },0);
  }
}, false);
}(window, location));
</script>
</body>
