<?php 
session_start();
$_SESSION['title'] = "My Jobs";
include 'header.php';
include 'db.php';
include 'functions.php';
include 'auth.php';


$jobs = listAllMyJobs($conection, $_SESSION['user_id']);
?>

  <?php foreach ($jobs as $job): ?>
  <div class="container">
      <div class="row">
        <div class="col m12 s12 center">
          <div class="card blue-grey darken-1">
            <div class="card-content white-text">
              <span class="card-title"><?=$job['job_title']?></span>
              <p class="justify"><?=$job['job_description']?></p>
              </p>
            </div>

            <div class="card-action">

              <a href="updatejob.php?id=<?=$job['id']?>" class="btn-floating blue"><i class="material-icons">edit</i></a>
              <a href="deletejob.php?id=<?=$job['id']?>" class="btn-floating red"><i class="material-icons">delete</i></a>
            </div>
          </div>
        </div>
      </div>
     </div>
<?php 
endforeach;
include 'footer.php'; ?>