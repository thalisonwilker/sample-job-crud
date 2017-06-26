<?php 
session_start();
$_SESSION['title'] = "New Account";
include 'header.php'; 
include 'db.php';
include 'functions.php';

$alertType = "";
$alertContent = "";

if ( isset($_POST['name']) && isset($_POST['email']) &&	isset($_POST['password']) ) {
	newUser($conection, $_POST['name'], $_POST['email'], $_POST['password']);
}

?>

<div class="container">
	<h1 class="center">Create new account!</h1>
	<p class="center <?=$alertType?>"><?=$alertContent?></p>
	<div class="row">
	    <form class="col s12" action="" method="post">
	      	<div class="input-field col s12">
		      <input value="" name="name" id="neme" type="text" class="validate">
		      <label class="active" for="name">Your name</label>
		    </div>
		    <div class="input-field col s12">
		      <input value="" name="email" id="email" type="email" class="validate">
		      <label class="active" for="email">Your Email</label>
		    </div>
	      	<div class="input-field col s12">
		      <input value="" name="password" id="pass" type="password" class="validate">
		      <label class="active" for="password">Choose your Password</label>
		    </div>

	      <button class="btn col m5 s5 blue left">Sig up</button>
	      <a class="btn col m5 s5 red " href="index.php">cancel</a>
	    </form>
  	</div>
        
</div>
<?php include 'footer.php'; ?>