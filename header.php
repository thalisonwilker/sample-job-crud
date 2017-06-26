<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>
  <?php if (!isset($_SESSION['title'])){ ?>
  	Jobs
	<?php }else { ?>
	<?=$_SESSION['title']?>
	<?php } ?>
  </title>
  <!-- CSS  -->
  <link href="css/icons.css">
  <link rel="stylesheet" href="css/font-awesome.css">
  <link href="css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
   <link rel="icon" type="icon" href="imagem/github.png">
</head>
<body>
<?php include 'navbar.php'; ?>