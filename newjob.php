<?php
session_start(); 
$_SESSION['title'] = "New Job";
include 'header.php';
include 'auth.php';
$_SESSION['title'] = "";
?>
<div class="container">
	<div class="row">
	    <form class="col s12" action="savejob.php" method="post">
	      <div class="row">
	      	<div class="input-field col s12">
		      <input  name="job_title" value="" id="job_title" type="text" class="validate" required="">
		      <label class="active" for="job_title">Job Title</label>
		    </div>
	        <div class="input-field col s12">
	          <textarea name="job_description"  id="description" class="materialize-textarea" required=""></textarea>
	          <label for="description">Description</label>
	        </div>
	        <input type="hidden" value="<?=$_SESSION['user_name']?>" name="job_author" id="">
	        <input id="date" name="date" type="hidden">
	      </div>
	      <button class="btn col m5 s5 blue left" onclick="setDate()">add</button>
	      <a class="btn col m5 s5 red " href="index.php">cancel</a>
	    </form>
  	</div>
 <script>
		var date = new Date();
		var $job_date_published = document.getElementById("date");
		var
 		day = date.getDate(),
 		mouth = date.getMonth(),
 		year = date.getFullYear(),
 		date = date.getHours()+":"+date.getMinutes()+" - "+day + "/" + mouth + "/" + year;
 	$job_date_published.value = date;

 </script>      
</div>
<?php include 'footer.php'; ?>