<?php 
session_start();
$_SESSION['title'] = "Login";
include 'header.php'; 
include 'db.php';
include 'functions.php';

$alertType = "";
$alertContent = "";

if (isset($_POST['email']) && isset($_POST['password']) ) {
	if (login($conection, $_POST['email'], $_POST['password'])) {
		$alertType = "text-blue";
		$alertContent = "Logado com sucesso!";

	}else{
		$alertType = "text-red";
		$alertContent = "falha no login";
	}
}
if (isset($_SESSION['user'])) {
	header("location: index.php");
}
?>

<div class="container">
	<p class="center <?=$alertType?>"><?=$alertContent?></p>
	<div class="row">
	    <form class="col s12" action="" method="post">
	      	<div class="input-field col s12">
		      <input value="" name="email" id="email" type="text" class="validate">
		      <label class="active" for="email">Email</label>
		    </div>
	      	<div class="input-field col s12">
		      <input value="" name="password" id="pass" type="password" class="validate">
		      <label class="active" for="password">Password</label>
		    </div>

	      <button class="btn col m5 s5 blue left">log in</button>
	      <a class="btn col m5 s5 red " href="index.php">cancel</a>
	    </form>
  	</div>
        
</div>
<?php include 'footer.php'; ?>