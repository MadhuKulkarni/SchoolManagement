<?php
if(!isset($_SERVER['HTTP_REFERER'])){
    // redirect them to your desired location
    header('location:../index.php');
    exit;
}
?>
<?php include_once('head.php'); ?>
<?php include_once('header_teacher.php'); ?>
<?php include_once('sidebar2.php'); ?>

<style>

body { 
	overflow-y:scroll;
}

tbody tr{
	height:100px;	
}

.modal-content1 {
   position: absolute;
   left: 125px; 
}
@media only screen and (max-width: 500px) {

	.modal-content1 {
   		
		position:static;
   
	}
}

.form-control-feedback {
  
   pointer-events: auto;
  
}

.set-width-tooltip + .tooltip > .tooltip-inner { 
  
     min-width:180px;
}
.set-color-tooltip + .tooltip > .tooltip-inner { 
  
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

body.modal-open-noscroll1
{
    overflow:hidden;
	
 
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

/* Calendar Style Starts */
.calendar {
    display: flex;
    flex-flow: column;
}
.calendar .header .month-year {
    font-size: 20px;
    font-weight: bold;
    color: #636e73;
    padding: 20px 0;
}
.calendar .days {
    display: flex;
    flex-flow: wrap;
}
.calendar .days .day_name {
    width: calc(100% / 7);
    border-right: 1px solid #2c7aca;
    padding: 20px;
    text-transform: uppercase;
    font-size: 12px;
    font-weight: bold;
    color: #818589;
    color: #fff;
    background-color: #448cd6;
}
.calendar .days .day_name:nth-child(7) {
    border: none;
}
.calendar .days .day_num {
    display: flex;
    flex-flow: column;
    width: calc(100% / 7);
    border-right: 1px solid #e6e9ea;
    border-bottom: 1px solid #e6e9ea;
    padding: 15px;
    font-weight: bold;
    color: #7c878d;
    cursor: pointer;
    min-height: 100px;
}
.calendar .days .day_num span {
    display: inline-flex;
    width: 30px;
    font-size: 14px;
}
.calendar .days .day_num .timetable {
    margin-top: 10px;
    font-weight: 500;
    font-size: 14px;
    padding: 3px 6px;
    border-radius: 4px;
    background-color: #f7c30d;
    color: #fff;
    word-wrap: break-word;
}
.calendar .days .day_num .timetable.green {
    background-color: #51ce57;
}
.calendar .days .day_num .timetable.blue {
    background-color: #518fce;
}
.calendar .days .day_num .timetable.red {
    background-color: #ce5151;
}
.calendar .days .day_num .timetable.yellow {
    background-color: yellow;
	color: black;
}
.calendar .days .day_num:nth-child(7n+1) {
    border-left: 1px solid #e6e9ea;
}
.calendar .days .day_num:hover {
    background-color: #fdfdfd;
}
.calendar .days .day_num.ignore {
    background-color: #fdfdfd;
    color: #ced2d4;
    cursor: inherit;
}
.calendar .days .day_num.selected {
    background-color: #f1f2f3;
    cursor: inherit;
}
/* Calendar Style Ends */
</style>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
    <section class="content-header">
    	<h1>
        	Timetable
            <small>Preview</small>
        </h1>
        <ol class="breadcrumb">
        	<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Timetabe</a></li>
            <li><a href="#">All Timetabe</a></li>
        </ol>
	</section>

	<!-- Main content -->
    <section class="content">
    	<div class="row">
        	<!-- left column -->
            <div class="col-xs-6">
            	<!-- general form elements -->
              	<div class="box box-primary">
                	<div class="box-header with-border">
                  		<h3 class="box-title">All Timetable</h3>
                	</div><!-- /.box-header -->
                  	<div class="box-body" >
                  	 	<div class="form-group" id="divGender">
                    		<div class="col-xs-3">
                      			<label for="exampleInputPassword1">Grade</label>
                    		</div>
                    		<div class="col-xs-4" id="divGender1">
                    			<select name="grade" class="form-control" id="grade" ><!--MSK-000107-->
                    				<option>Select Grade</option>
<?php
include_once('../controller/config.php');
$sql="SELECT * FROM grade";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result) > 0){
	while($row=mysqli_fetch_assoc($result)){
?> 
     								<option value="<?php echo $row["id"]; ?>"><?php echo $row['name']; ?></option>
<?php }} ?>
					  			</select>
                     		</div>
                    	</div>
                  	</div><!-- /.box-body -->
                  	<div class="box-footer">
                    	<button type="button" class="btn btn-primary"  onClick="showTimeTable(this)">Submit</button><!--MSK-000108-->
                  	</div>
            	</div><!-- /.box -->
        	</div>
    	</div>
	</section><!-- End of form section -->

	<!-- table for view all records-->
    <section class="content" > <!-- Start of table section -->
    	<div class="row" id="table1"><!--MSK-000112--> 
           
        </div>
    </section> <!-- End of table section --> 
        
<script>

function showTimeTable(){
//MSK-000109
	
	var grade = document.getElementById("grade").value;	
	var do1 ="show_Timetable";
	
	var xhttp = new XMLHttpRequest();//MSK-000110-Start Ajax  
  		xhttp.onreadystatechange = function() {
			
    		if (this.readyState == 4 && this.status == 200) {	
					
				document.getElementById('table1').innerHTML = this.responseText;//MSK-000111
										
    		}
			
  		};
			
    	xhttp.open("GET", "timetable_grade_wise2.php?grade="+grade + "&do="+do1 , true);												
  		xhttp.send();//MSK-000110-End Ajax
	
};

</script>

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

$(document).ready(function() {
    $('body').on('click', '.timetable', function() {
        let ttBar = $(this);
        let subject = ttBar.attr('data-subject');
        let className = ttBar.attr('data-class');
        let teacher = ttBar.attr('data-teacher');
        let meeting = ttBar.attr('data-meeting');

        $('.pop-subject').text(subject);
        $('.pop-teacher').text(className);
        $('.pop-class').text(teacher);
        $('.pop-meeting').text('Join Meeting');
        $('.pop-meeting').attr('href', meeting);
        $('#showTtDetails').modal('show');
    });
});
</script>
  	 	
</div><!-- /.content-wrapper -->  
                              
<?php include_once('footer.php');?>

<!--Modal Timetable -->
<div class="modal msk-fade" style="display: none;" id="showTtDetails" tabindex="-1" role="dialog" aria-labelledby="insert_alert1" aria-hidden="true" data-backdrop="static" data-keyboard="false" style="display: block;">
   <div class="modal-dialog">
      <!--modal-dialog -->  
      <div class="container col-lg-12 ">
         <!--modal-content --> 
         <div class="row">
            <div class="panel panel-info">
               <!--panel --> 
               <div class="panel-heading">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                  <h3 class="panel-title" id="hname">Timetable Details</h3>
               </div>
               <div class="panel-body">
                  <!--panel-body -->
                  <div class="row">
                     <div class=" col-md-9" style="text-align: center;">
                        <table style="width: 500px;margin: auto;" class="table table-striped table table-bordered border-primary">
                            <tr><th style="text-align: right;">Subject:</th><td style="text-align: left;" class="pop-subject"></td></tr>
                            <tr><th style="text-align: right;">Teacher:</th><td style="text-align: left;" class="pop-teacher"></td></tr>
                            <tr><th style="text-align: right;">Class:</th><td style="text-align: left;" class="pop-class"></td></tr>
                            <tr><th style="text-align: right;">Meeting:</th><td style="text-align: left;"><a class="pop-meeting" target="_blank"></a></td></tr>
                        </table>
                     </div>
                  </div>
               </div>
               <!--/.panel-body -->
               <div class="panel-footer">
                  <div class="input-group-append"></div>
               </div>
            </div>
            <!--/. panel--> 
         </div>
         <!--/.row --> 
      </div>
      <!--/.modal-content -->
   </div>
   <!--/.modal-dialog -->
</div>
<!--modal Timetable-->