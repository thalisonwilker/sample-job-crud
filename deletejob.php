<?php 
session_start();
include 'db.php';
include 'functions.php';
include 'auth.php';

if (deletejob($conection, $_GET['id']) ){
	header("location: index.php");
}else{

}

die();