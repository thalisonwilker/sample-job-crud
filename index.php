<?php 
session_start();
$_SESSION['title'] = "Jobs";
include 'header.php';
include 'db.php';
include 'siteURL.php';
include 'functions.php';

$jobs = listAllJobs($conection);
?>

<h1 class="center">Get! is FREE!</h1>
  <?php foreach ($jobs as $job): ?>

  <div class="container">
      <div class="row">
        <div class="col m12 s12 center">
          <div class="card blue-grey darken-1">
            <div class="card-content white-text">
              <a href="job.php?id=<?=$job['id']?>">
                <span class="card-title"><?=$job['job_title']?></span>
                <!--  -->
              </a>
              <p class="justify"><?php
                if (strlen(utf8_decode($job['job_description'])) > 300 ){ ?>
                  <?=substr($job['job_description'],0,300 )?>... <a href="job.php?id=<?=$job['id']?>"> view more</a>
                <?php } else {?>
                <?=$job['job_description']?>
                <?php } ?>
                </p>
              <hr>
              <p class="left">author: <strong><?=$job['job_author']?></strong> date: <strong><?=$job['job_date']?></strong></p>
            </div>

            <div class="card-action">
              <?php include 'sharelink.php'; ?>
              <p class="center">Share</p>

            </div>
          </div>
        </div>
      </div>
     </div>
<?php 
endforeach;
include 'footer.php'; ?>