<?php
error_reporting(E_ERROR | E_PARSE);
   if(!isset($_SERVER['HTTP_REFERER'])){
       // redirect them to your desired location
       header('location:../index.php');
       exit;
   }
   ?>
<?php include_once('head.php'); ?>
<?php include_once('header_admin.php'); ?>
<?php include_once('sidebar.php'); ?>
<?php include_once('alert.php'); ?>
<style>
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
</style>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>
         Notification
         <small>Form</small>
      </h1>
      <ol class="breadcrumb">
         <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
         <li><a href="#">Notification</a></li>
      </ol>
   </section>
   <?php 
      include_once('../controller/config.php');
      
      $index=$_SESSION["index_number"];
      
      if(isset($_POST['submit'])){
         $title = $_POST['title'];
          $link = $_POST['link'];
          $date = $_POST['date'];
          $status = $_POST['status'];
      }
              
         $sql = "INSERT INTO notification(title,link,date,status) VALUES ('$title','$link','$date','$status')";
         $result = $conn->query($sql);
       
      ?>
   <section class="content">
      <div class="row">
         <div class="col-md-6">
            <div class="panel">
               <!--panel bg-maroon--> 
               <form role="form" action="" method="post" class="form-horizontal">
                  <div class="box-body" >
                     <div class="row">
                        <div class="col-md-8">
                           <div class="form-group">
                              <div class="col-xs-3">
                                 <label>Title : </label>
                              </div>
                              <div class="col-xs-9">
                                 <input type="text" class="form-control" placeholder="Enter title" name="title">
                              </div>
                           </div>
                           <div class="form-group">
                              <div class="col-xs-3">
                                 <label>Link : </label>
                              </div>
                              <div class="col-xs-9">
                                 <input type="text" class="form-control" placeholder="Enter link" name="link">
                              </div>
                           </div>
                           <div class="form-group">
                              <div class="col-xs-3">
                                 <label>Date : </label>
                              </div>
                              <div class="col-xs-9">
                                 <input type="text" class="form-control" placeholder="yyyy-mm-dd" name="date">
                              </div>
                           </div>
                           <div class="form-group">
                              <div class="col-xs-3">
                                 <label>Status : </label>
                              </div>
                              <div class="col-xs-9">
                                 <input type="text" class="form-control" placeholder="Enter Status" name="status">
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="box-footer text-right">
                     <!--button style="width:150px;" type="submit" class="btn text-right btn-warning asd" id="btnSubmit" name="submit">Add</button><br-->
                     <input style="width:120px;" type="submit" name="submit" value="Submit" class="btn text-right btn-warning asd"/>
                  </div>
               </form>
            </div>
            <!--/. panel--> 
         </div>
      </div>
      <!--/.row --> 
   </section>
   <!-- /.section -->
</div>
<!-- /.content-wrapper -->  
<?php include_once('footer.php');?>