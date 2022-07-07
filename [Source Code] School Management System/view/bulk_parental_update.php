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
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>
         Class Parental
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
        $index=$_SESSION["index_number"];
          
     $sql="select distinct classid,studId,year,email from my_attendance inner join parents on    my_attendance.studId=parents.my_son_index where classid=$grade_id";
     $result=mysqli_query($conn,$sql);
     $row = mysqli_fetch_assoc($result);

     foreach ($result as $row){
      $to = $row['email'];
      $subject='Monthly Attendance Update ';
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
      $message .= '<th>Std Id</th><th>Year</th><th>Total Present</th><th>Total Absent</th>';
      $message .= '<tbody><tr class="active-row"  style="border-bottom: 2px solid #009879;">';
                
      $message .= '<td>'.$row['studId'].'</td>';
      $message .= '<td>'. $row['year'].'</td>';
      
      $sql1="select sum(if(attendance='present',1,0)) as present ,sum(if(attendance='absent',1,0)) as absent
            from my_attendance where studId = $row[studId] and classid=$grade_id";
      $result1 = mysqli_query($conn,$sql1);
      $row1 = mysqli_fetch_assoc($result1);
          
      $message .= '<td>'. $row1['present'].'</td>';
      $message .= '<td>'.$row1['absent'].'</td></tr>';
  
      $message .= ' </thead></tr>';
      $message .= "</table>";
      // Always set content-type when sending HTML email
      $headers = "MIME-Version: 1.0" . "\r\n";
      $headers .= "Content-type:text/html;charset=UTF-8" . "\r\b";
      $headers .= 'From: Teacher' . "\r\n";
      mail($to, $subject, $message, $headers);
     
         }
          ?>
   <!-- Main content -->
   <section class="content">
      <div class="row">
         <div class="col-md-12">
            <div class="box box-primary">
               <div class="box-header with-border">
                  <h3 class="box-title">Student Update Mail</h3>
                  <a href="my_parental_update.php?do=showSTable&grade_id=<?php echo $grade_id; ?>" style="float:right" type="button" class="btn text-right btn-success asd" id="btnSubmit2"><span class="glyphicon glyphicon-arrow-left"></span> Back
                  </a>
               </div>
               <!-- /.box-header -->

<div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="col-md-offset-3 col-md-6">
               <h4><strong style="color:red;">Success!</strong> Your Mail has been sent successfully of Class : <strong style="color:red;"><?php echo $grade_id;  ?></strong>&nbsp;&nbsp;Students.</h4>
              
            </div>      
   
   </div>
 </div>

            <!-- /.box -->
         </div>
      </div></div>
   </section>
   <!-- End of form section -->
</div>
<!-- /.content-wrapper -->  
<?php include_once('footer.php');?>