<?php 
session_start();
include 'db.php';
include 'functions.php';
include 'auth.php';

$job_title = $_POST['job_title'];
$job_description = $_POST['job_description'];
$job_author = $_POST['job_author'];
$job_date = $_POST['date'];

var_dump($_POST);

if (savejob($conection, $job_title, $job_description, $job_author, $job_date) ){
	header("location: myjobs.php");
}else{

}

die();