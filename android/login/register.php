<?php

include 'connection.php';

if($_POST){
	
	//POST DATA
	$fullname = filter_input(INPUT_POST, 'fullname', FILTER_SANITIZE_STRING);
	$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
	$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
	$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
	
	$response = [];
	
	//Cek username didalam database
	$userQuery = $connection->prepare("SELECT * FROM users WHERE username = ?");
	$userQuery->execute(array($username));
	
	//Cek username apakah ada atau tidak
	if($userQuery->rowCount() != 0){
		//Beri Response
		$response['status']= false;
		$response['message']= 'Akun sudah digunakan';
	} else {
		$insertAccount = 'INSERT INTO users (fullname,username,password,email) VALUES (:fullname, :username, :password, :email)';
		$statement = $connection->prepare($insertAccount);
		
		try{
			//eksekusi statement db2_autocommit(connection)
			$statement->execute([
				':fullname' => $fullname,
				':username' => $username,
				':password' => md5($password),
				':email' => $email
			]);
			
			//Beri Response
			$response['status']= true;
			$response['message']= 'Akun berhasil di daftarkan';
			$response['data'] = [
				'username' => $username,
				'fullname' => $fullname
			];
		} catch (Exception $e){
			die($e->getMessage());
		}
	}
	
	//jadikan data JSON
	$json = json_encode($response, JSON_PRETTY_PRINT);
	
	//Print JSON
	echo $json;
}

?>