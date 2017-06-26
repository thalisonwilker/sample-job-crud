<?php
session_start();
include 'db.php';
include 'functions.php';
include 'auth.php';

$job_id =  $_POST['job_id'];
$job_title = $_POST['job_title'];
$job_description = $_POST['job_description'];

if (updatejob($conection, $job_title, $job_description, $job_id) ){
	header("location: index.php");
}else{

}

die();