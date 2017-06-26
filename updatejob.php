<?php 
session_start();


include 'db.php';
include 'functions.php';

$job = getjob($conection, $_GET['id']);

?>
<?php 
$_SESSION['title'] = "Update Job: ".$job['job_title'];
include 'header.php'; ?>
<div class="container">
	<div class="row">
	    <form class="col s12" action="updatejob_.php" method="post">
	      <div class="row">
	      	<div class="input-field col s12">
		      <input  name="job_title" value="<?=$job['job_title']?>" id="job_title" type="text" class="validate">
		      <label class="active" for="job_title">Job Title</label>
		    </div>
	        <div class="input-field col s12">
	          <textarea name="job_description" id="description" class="materialize-textarea"><?=$job['job_description']?></textarea>
	          <label for="description">Description</label>
	          <input type="hidden" value="<?=$job['id']?>" name="job_id">
	        </div>
	      </div>
	      <button class="btn col m5 s5 blue left">ok</button>
	      <a class="btn col m5 s5 red " href="index.php">cancelar</a>
	    </form>
  	</div>
        
</div>
<?php include 'footer.php'; ?>