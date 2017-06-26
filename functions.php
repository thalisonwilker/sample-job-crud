<?php
function scapeattaks($conection, $string){
	return mysqli_real_escape_string($conection,
			htmlspecialchars($string) );
}
function listAllJobs($conection){

	$jobs = array();

	$query = "select * from job order by id desc";

	$erro = mysqli_error($conection);

	echo "$erro";

	$rs = mysqli_query($conection, $query);

	if ($rs) {
			while ($job = mysqli_fetch_assoc($rs)) {
		array_push($jobs, $job);
		}

	}else{
		$jobs[0] = array(
			"job_title" => "Vazio",
			"job_description" => "Vazio"
			);
	}

	return $jobs;

}
function listAllMyJobs($conection, $id){

	$id = scapeattaks($conection, $id);

	$jobs = array();

	$query = "select * from job where user_id = ".$id." order by id desc ";

	$erro = mysqli_error($conection);

	echo "$erro";

	$rs = mysqli_query($conection, $query);

	if ($rs) {
			while ($job = mysqli_fetch_assoc($rs)) {
		array_push($jobs, $job);
		}

	}else{
		$jobs[0] = array(
			"job_title" => "Vazio",
			"job_description" => "Vazio"
			);
	}


	return $jobs;

}

function savejob($conection, $job_title, 
				$job_description, $job_author, 
				$date){

	$job_title = scapeattaks($conection, $job_title);
	$job_description = scapeattaks($conection, $job_description);
	$job_author = scapeattaks($conection, $job_author);
	$date = scapeattaks($conection, $date);


	$query = "insert into job 
			(job_title, 
			job_description, 
			job_author,
			job_date,
			user_id)

			values

			('{$job_title}', 
			'{$job_description}',
			'{$job_author}',
			'{$date}',
			".$_SESSION['user_id'].");";

	if (mysqli_query($conection, $query)) {
		return true;

	}else{
		$erro = mysqli_error($conection);
		echo "$erro";
	}
}


function getjob($conection, $id){
	$id = scapeattaks($conection, $id);

	$query = "select * from job where id = ".$id;

	$erro = mysqli_error($conection);

	echo "$erro";

	$rs = mysqli_query($conection, $query);

	if ($rs) {
		$job = mysqli_fetch_assoc($rs);
		if ($job) {
			return $job;
		}
	}
		return array("job_title" => "Invalid Job",
							"job_description" => "Job not existis",
							"job_author" => "anonymour");

}
function updatejob($conection, $job_title,$job_description, $id){
	$job_title = scapeattaks($conection, $job_title);
	$job_description = scapeattaks($conection, $job_description);
	$id = scapeattaks($conection, $id);

	$query = 
			"update job set 
			job_title = '{$job_title}', 
			job_description = '{$job_description}'
			where id = ".$id." AND user_id = ".$_SESSION['user_id'];


	$rs = mysqli_query($conection, $query);

	if ($rs) {
		return true;
	}else{
		$erro = mysqli_error($conection);
		echo "$erro";
	}
}
function deletejob($conection, $id){
	$id = scapeattaks($conection, $id);


	$query = "delete from job where id = ".$id." and user_id = ".$_SESSION['user_id'];

	$rs = mysqli_query($conection, $query);

	if ($rs) {
		return true;
	}else{
		$erro = mysqli_error($conection);
		echo "$erro";
	}
}

function login($conection, $email, $senha){
	$email = scapeattaks($conection, $email);
	$senha = scapeattaks($conection, $senha);

	$query = "select * from users where user_email = '{$email}' AND user_password = '{$senha}'";

	$rs = mysqli_query($conection, $query);

	if ($rs) {
		$user = mysqli_fetch_assoc($rs);
		if ($user) {

			$_SESSION['user'] = true;
			$_SESSION['user_id'] = $user['id'];
			$_SESSION['user_name'] = $user['user_name'];
			$_SESSION['user_email'] = $user['user_email'];

			return true;
		}else{
			return false;
		}
	}else{
		$erro = mysqli_error($conection);
		echo "$erro";
		return false;
	}
}


function newUser($conection, $user_name, $user_email, $user_password){
	$user_name = scapeattaks($conection, $user_name);
	$user_email = scapeattaks($conection, $user_email);
	$user_password = scapeattaks($conection, $user_password);

	$query = "insert into users (user_name, user_email, user_password) values 
		('{$user_name}', '{$user_email}', '{$user_password}')";

		$rs = mysqli_query($conection, $query);

		if ($rs) {
			header("location: login.php");
		}
}