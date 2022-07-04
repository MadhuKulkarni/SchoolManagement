<?php
   error_reporting(E_ERROR | E_PARSE);
   if(!isset($_SERVER['HTTP_REFERER'])){
       // redirect them to your desired location
      header('location:../index.php');
      exit;
   }
   ?>
<?php include_once('head.php'); ?>
<?php include_once('header_teacher.php'); ?>
<?php include_once('sidebar2.php'); ?>
<?php include_once('alert.php'); ?>
<style>
   .noScroll{
   overflow-y:hidden;   
   }
   @media only screen and (max-width: 500px) {
   #divGender1, #divPhone1, #divEmail1{
   width:75%;
   }
   }
   @media print{
   body{
   visibility: hidden;
   }
   #modalINV{
   visibility: visible;
   }
   #divPhoto{
   display:none;  
   }
   }
   .form-control-feedback {
   pointer-events: auto;
   }
   .msk-set-width-tooltip + .tooltip > .tooltip-inner { 
   min-width:180px;
   }
   .msk-set-color-tooltip + .tooltip > .tooltip-inner { 
   min-width:180px;
   background-color:red;
   }
   .image-error{
   border:1px solid #f44336;
   }
   .image-success{
   border:1px solid #009900;
   }
   .msk-fade {  
   -webkit-animation-name: animatetop;
   -webkit-animation-duration: 0.4s;
   animation-name: animatetop;
   animation-duration: 0.4s
   }
   .msk-modal-content {
   position: absolute;
   left: 125px; 
   }
   /* Add Animation */
   @-webkit-keyframes animatetop {
   from {top:-300px; opacity:0} 
   to {top:0; opacity:1}
   }
   @keyframes animatetop {
   from {top:-300px; opacity:0}
   to {top:0; opacity:1}
   }
   /* #modalINV css  */
   #modalINV .pdetail1 {
   padding:0;
   float:right;
   margin-right:7px; 
   }
   #modalINV .pdetail2 {
   float: right;
   }
   #modalINV .div-logo {
   float: left;
   height: 130px;
   }
   #modalINV .logo{
   float: left;
   width: 90px;
   height: 90px;
   margin-right: 10px;
   border-radius: 50%;
   text-align: center;
   background-color:#8860a7;
   }
   #modalINV .class-name{
   float: left;      
   margin-top:0;
   padding-top:0;       
   }
   #modalINV h1,#modalINV h2,#modalINV h3{
   margin-top:0;
   color:#8860a7;
   }
   #modalINV .class-address {
   float: left;
   }
   #modalINV .class-email {
   float: right;
   margin-right:15px;
   padding-right:0;
   color:white;
   background-color:#8860a7;
   }
   #modalINV th{        
   background-color:#8860a7;
   color:white;
   }
   #modalINV .std-name{
   color:#8860a7;
   font-size:16px;
   }
   #modalINV #h1{
   display:none;  
   }
   @media print{
   #modalINV .logo{
   background-color:#8860a7 !important;   
   }
   #modalINV h1,#modalINV h2,#modalINV h3,#modalINV .std-name{
   color:#8860a7 !important;  
   }
   #modalINV .table-bordered th{
   color:white!important;
   background-color:#8860a7 !important;      
   }
   #modalINV .class-email {
   color:white!important;
   background-color:#8860a7 !important;
   } 
   #modalINV .panel{
   border:hidden!important;
   }
   #modalINV #btn1,#modalINV .panel-footer ,#modalINV .msk-heading {
   display:none;
   }
   #modalINV #h1{
   display:inline;   
   }
   #modalINV .close{
   display:none;  
   }
   @-moz-document url-prefix() {
   .panel{
   margin:0;
   padding:0;
   }
   #modalINV{
   margin:0!important;
   padding:0!important;
   position:absolute;
   left:-150px;
   }
   @page{
   margin:0;
   padding:0;  
   }
   }

</style>
<style>
   .styled-table {
      border-collapse: collapse;
      margin: 25px 0;
      font-size: 0.9em;
      font-family: sans-serif;
      min-width: 400px;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
      }
      .styled-table thead tr {
      background-color: #009879;
      color: #ffffff;
      text-align: left;
      }
      .styled-table th,
      .styled-table td {
      padding: 12px 15px;
      }
      .styled-table tbody tr {
      border-bottom: 1px solid #dddddd;
      }
      
      .styled-table tbody tr:nth-of-type(even) {
      background-color: #f3f3f3;
      }
      
      .styled-table tbody tr:last-of-type {
      border-bottom: 2px solid #009879;
      }
      .styled-table tbody tr.active-row {
      font-weight: bold;
      color: #009879;
      }
   </style>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>
         Parental
         <small>Mail</small>
      </h1>
      <ol class="breadcrumb">
         <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
         <li><a href="#">Parent</a></li>
      </ol>
   </section>
   <?php
      include_once('../controller/config.php');
      
      $grade_id=$_GET["grade_id"];
      $std_index=$_GET["std_index"];
      $index=$_SESSION["index_number"];
      
      $sql ="select email,studId,date,month,year,subject from my_attendance  
             inner join parents on my_attendance.studId = parents.my_son_index";
      $result=mysqli_query($conn,$sql);
      $row=mysqli_fetch_assoc($result);


      $sql1="select sum(if(attendance='present',1,0)) as present ,sum(if(attendance='absent',1,0)) as absent
            from my_attendance where studId = $std_index  and year LIKE '2022%'";
      $result1 = mysqli_query($conn,$sql1);
      $row1 = mysqli_fetch_assoc($result1);
     
      $sql2 = "SELECT * FROM teacher WHERE index_number='$index'";
      $result2=mysqli_query($conn,$sql2);
      $row2=mysqli_fetch_assoc($result2);
      



      /*$sql = "SELECT * FROM student_attendance";
      $result=mysqli_query($conn,$sql);
      $row=mysqli_fetch_assoc($result);
      
      $sql1 = "SELECT email FROM parents WHERE my_son_index=$std_index";
      $result1=mysqli_query($conn,$sql1);
      $row1=mysqli_fetch_assoc($result1);
      
      $sql2 = "SELECT * FROM teacher WHERE index_number='$index'";
      $result2=mysqli_query($conn,$sql2);
      $row2=mysqli_fetch_assoc($result2);
      
      $sql3 = "SELECT * FROM student_attendance";
      $result3=mysqli_query($conn,$sql3);
      $row3=mysqli_fetch_assoc($result3);*/
      
      /*if(isset($_POST["submit"])){
         $to = $_POST['email'];
         $subject=$_POST['subject'];
         $message =$_POST['message'];
         $from = $_POST['from_email'];
      
         if(mail($to, $subject, $message, $from )){
            echo 'Your mail has been sent successfully.';
         } else{
            echo 'Unable to send email. Please try again.';
         }
      }*/
      
     if (isset($_POST["submit"])){
      $to = $_POST['email'];
      //$to = "veenasvastrad4@gmail.com";
      $subject=$_POST['subject'];
      $message = '<html><head><style>
     .styled-table {
      border-collapse: collapse;
      margin: 25px 0;
      font-size: 0.9em;
      font-family: sans-serif;
      min-width: 400px;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
      }
      .styled-table thead tr {
      background-color: #009879;
      color: #ffffff;
      text-align: left;
      }
      .styled-table th,
      .styled-table td {
      padding: 12px 15px;
      }
      .styled-table tbody tr {
      border-bottom: 1px solid #dddddd;
      }
      
      .styled-table tbody tr:nth-of-type(even) {
      background-color: #f3f3f3;
      }
      
      .styled-table tbody tr:last-of-type {
      border-bottom: 2px solid #009879;
      }
      .styled-table tbody tr.active-row {
      font-weight: bold;
      color: #009879;
      }
      </style></head><body>';
      $message .= '<table class="styled-table" >';
      $message .= ' <thead><tr>';
      $message .= '<th>Std Id</th><th>Month</th><th>Year</th><th>Total Present</th><th>Total Absent</th>';
      $message .= '<tbody><tr class="active-row"  style="border-bottom: 2px solid #009879;">';
      //if ($result->num_rows>0){
                //  while ($row = $result->fetch_assoc()){
                     
      $message .= '<td>'.$std_index.'</td>';
      $message .= '<td>'. $row['month'].'</td>';
      $message .= '<td>'. $row['year'].'</td>';
      $message .= '<td>'. $row1['present'].'</td>';
      $message .= '<td>'.$row1['absent'].'</td></tr>';
      //  }} 
      
      $message .= ' </thead></tr>';
      $message .= "</table>";
      // Always set content-type when sending HTML email
      $headers = "MIME-Version: 1.0" . "\r\n";
      $headers .= "Content-type:text/html;charset=UTF-8" . "\r\b";
      $headers .= 'From: Teacher' . "\r\n";
     // $from ='veenasvastrad4@gmail.com';
      mail($to,$subject, $message, $headers);
       }
      
      ?>
   <!-- Main content -->
   <section class="content">
      <div class="row">
         <div class="col-md-12">
            <div class="box box-primary">
               <div class="box-header with-border">
                  <h3 class="box-title">Student Update Mail</h3>
                  <a href="my_parental_update.php?do=showSTable&grade_id=<?php echo $grade_id; ?>" style="float:right" type="button" class="btn text-right btn-success asd" id="btnSubmit2"><span class="glyphicon glyphicon-arrow-left"></span> Back</a>
               </div>
               <!-- /.box-header -->
               <form role="form" action="" method="post" name="form" enctype="multipart/form-data" id="form" class="form-horizontal">
                  <div class="box-body" >
                     <div class="row">
                        <div class="col-md-6">
                           <div class="form-group">
                              <div class="col-xs-3">
                                 <label for="exampleInputTo">To :</label>
                              </div>
                              <div class="col-xs-9">
                                 <input type="text" class="form-control" name="email" autocomplete="off" value="<?php echo $row['email']?>" readonly>  
                              </div>
                           </div>

                           <!--input type="hidden" class="form-control" name="from_email" autocomplete="off" value="veena.t.7671@gmail.com" readonly-->  
                           <!--<div class="form-group">
                              <div class="col-xs-3">
                                <label for="exampleInputFrom">From :</label>
                               </div>
                               <div class="col-xs-9">
                               <input type="text" class="form-control" name="email" autocomplete="off" value="veenasvastrad4@gmail.com" readonly>  
                              </div>                    
                              </div>-->
                           <div class="form-group">
                              <div class="col-xs-3">
                                 <label for="exampleInputFrom">From :</label>
                              </div>
                              <div class="col-xs-9">
                                 <input type="text" class="form-control" name="" value="<?php echo $row2['email']?>" autocomplete="off" readonly>  
                              </div>
                           </div>
                           <div class="form-group">
                              <div class="col-xs-3">
                                 <label for="exampleInputSubject">Subject :</label>
                              </div>
                              <div class="col-xs-9">
                                 <input type="text" class="form-control" name="subject" value="Monthly Attendance Update" autocomplete="off" readonly>  
                              </div>
                           </div>
                           <div class="form-group">
                              <div class="col-xs-3">
                                 <label for="exampleInputMessage">Message :</label>
                              </div>
                              <div class="col-xs-9">
                                
         <table class="table styled-table">
            <thead>
               <tr>
                  <th>Std Id</th>
                  <th>Month</th>
                  <th>Year</th>
                  <th>Total Present</th>
                  <th>Total Absent</th>
               </tr>
            </thead>
            <tbody>
               <?php //if ($result->num_rows>0){
                 // while ($row = $result->fetch_assoc()){
                     ?>
               <tr class="active-row">
                  <td><?php echo $std_index;?></td>
                  <td><?php echo $row['month'];?></td>
                  <td><?php echo $row['year'];?></td>
                  <td><?php echo $row1['present'];?></td>
                  <td><?php echo $row1['absent'];?></td>
                  
               </tr>
               <?php
               // }
                //  }
                  ?>


            </tbody>
         </table>
    
                              </div>
                           </div>
                           <div class="col-md-offset-11"><input id="send" name="submit" class="btn btn-info" type="submit" value="Send"></div>
                        </div>
                     </div>
                  </div>
               </form>
            </div>
            <!-- /.box -->
         </div>
      </div>
   </section>
   <!-- End of form section -->
</div>
<!-- /.content-wrapper -->  
<?php include_once('footer.php');?>