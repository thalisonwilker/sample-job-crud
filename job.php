<?php
session_start();
include 'db.php';
include 'functions.php';
include 'siteURL.php';
$job = getjob($conection, $_GET['id']);
$_SESSION['title'] = "".$job['job_title'];
include 'header.php';

?>
<img src="images/2738364155_7b67f184c8_z.jpg" alt="Job ">
<div class="container">
      <div class="row">
        <div class="col m12 s12 center">
          <div class="card blue-grey darken-1">
            <div class="card-content white-text">
              <h1 class="card-title"><?=$job['job_title']?></h1>
              <p class="justify"><?=$job['job_description']?></p>
              <h2 class="left">author: <strong><?=$job['job_author']?> date: <?=$job['job_date']?></strong></h2>
            </div>
              

            <div class="card-action">
              <?php include 'sharelink.php'; ?>            
              <p class="center">Share</p>
          </div>
        </div>
      </div>
     </div>
</div>
<?php include 'footer.php'; ?>