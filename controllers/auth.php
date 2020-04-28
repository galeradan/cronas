<?php 
	@session_start();
	
	require("connection.php");

	$email = htmlspecialchars($_POST['email']);
	$password = htmlspecialchars($_POST['password']);
	$password = sha1($password);
	$_SESSION['erroMsg'] = null;

	if ($email != "" && $password != "" ) {
		// var_dump($email);
		// echo "<br>";
		// var_dump($password);
	}
	else{
		$_SESSION['erroMsg'] = "Somethings Wrong! Please check both fields.";
	}

	 $user_query = "SELECT * FROM users WHERE email = '$email';";
	 $user_result = mysqli_query($conn, $user_query);
	 $user_info = mysqli_fetch_assoc($user_result);

	 $flag = false;

	 echo "<br>";

	 if(mysqli_num_rows($user_result) > 0){
	 	 	
	 	 	if($password != $user_info['password']){
	 	 		// if not throws error
	 	 		$_SESSION['is_loginError'] = true;
	 	 		$_SESSION['erroMsg'] = 'Password does not match';
	 	 		header('location: ../views/login_failed.php');
	 	 		// prevents the code below from being executed. 
	 	 		die();

	 	 	}
	 	 	else {
	 	 		// create a session if matched
	 	 		$_SESSION['is_loginError'] = false;
	 	 		$_SESSION['user'] = $user_info;
	 	 		$flag = true;
	 	 	}
	 }

	 if ($flag){
	 	$_SESSION['is_loginError'] = false;
		header('location: ../views/profile.php');
	 }
	 else{
	 	$_SESSION['is_loginError'] = true;
	 	$_SESSION['erroMsg'] = "Wrong Credentials";
		header('location: ../views/login_failed.php');
	 }
	

?>