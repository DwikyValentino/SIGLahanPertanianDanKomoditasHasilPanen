<?php

include 'connection.php';

if($_POST){
	
	//Data
	$username = $_POST['username'];
	$password = $_POST['password'];

	$response = []; //Data Response

	//Cek username didalam database
	$userQuery = $connection->prepare("SELECT * FROM users WHERE username = ?");
	$userQuery->execute(array($username));
	$query = $userQuery->fetch();

	if ($userQuery->rowCount() == 0){
		$response['status'] = false;
		$response['message'] = "Username tidak terdaftar";
	} else {
		//mengambil password di db

		$passwordDB = $query['password'];

		if(strcmp(md5($password),$passwordDB) === 0){
			$response['status'] = true;
			$response['message'] = "Login Berhasil";
			$response['data'] = [
				'id' => $query['id'],
				'username' => $query['username'],
				'fullname' => $query['fullname'],
				'email' => $query['email']
			];
		} else {
			$response['status'] = false;
			$response['message'] = "Password anda Salah";
		}
	}
	
	//jadikan data JSON
	$json = json_encode($response, JSON_PRETTY_PRINT);
	
	//print
	echo $json;
}


?>