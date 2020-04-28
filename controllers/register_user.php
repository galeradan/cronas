<?php 
	require_once("connection.php");

	$fname = htmlspecialchars($_POST['firstName']);
	$lname = htmlspecialchars($_POST['lastName']);
	$email = htmlspecialchars($_POST['email']);
	$age = htmlspecialchars($_POST['age']);
	$username = htmlspecialchars($_POST['username']);
	$password = htmlspecialchars($_POST['password']);
	$confirmPassword = htmlspecialchars($_POST['confirmPassword']);
	$role_id = 2; 


	$checkEmail_query = "SELECT * FROM users WHERE email = '$email'";
	$result =mysqli_query($conn, $checkEmail_query);

	// if($result){
	// 	echo "show result";
	// 	var_dump($result);
	// }
	// else{
	// 	echo "Something's wrong";
	// 	var_dump($result);
	// }

	if(mysqli_num_rows($result) > 0){
	 	 header("location: ../views/registration_failed.php");
	 }else{
	 	 if ($password != "" && $confirmPassword != "") {

	 	 	$password = sha1($password);
	 	 	$confirmPassword = sha1($confirmPassword);

	 	 	// var_dump($password);
	 	 	// var_dump($confirmPassword);

	 	 	if ($password === $confirmPassword) {
	 	 		// echo "Password Match";

	 	 		// Insert the user to our database
	 	 		//  INSERT INTO users(firstname, lastname, username, password, email, role_id) Values ("Lucas","Galera","lucasg08","pass123","xample@gmail.com",2);

	 	 		$insert_query = "INSERT INTO users(first_name, last_name, age, email, username, password, role_id) VALUES ('$fname', '$lname', $age, '$email', '$username', '$password', $role_id);";

	 	 		$result =mysqli_query($conn, $insert_query);

	 	 		if($result){
	 	 			echo "Successfully Registered";
	 	 			header('location: ../views/login.php');
	 	 		}
	 	 		else{
	 	 			echo "Something's wrong";
	 	 		}

	 	 	}
	 	 	else {
	 	 		echo "Please check password fields";
	 	 	}
	 	 }
	 	 else{
	 	 	echo "check password fields";
	 	 }
	 }
	
?>