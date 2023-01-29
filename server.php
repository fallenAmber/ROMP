<?php
	session_start();
	$host = "localhost";
	$user = "root";
	$pass = "";
	$dbase = "ruet";
	$table = "users";
	$username = "";
	$email = "";
	$password_1 = "";
	$password_2 = "";
	$errors = array();

	
if(isset($_POST['register'])){
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password_1 = $_POST['password_1'];
	$password_2 = $_POST['password_2'];
	
	if(empty($username)){
		array_push($errors, "Username is required");
	}
	if(empty($email)){
		array_push($errors, "Email is required");
	}
	if(empty($password_1)){
		array_push($errors, "Password is required");
	}
	if(empty($password_2)){
		array_push($errors, "Please re-enter Password");
	}
	if($password_1 != $password_2){
		array_push($errors, "The two passwords do not match");
	}
	
	if(count($errors) == 0){
		$password = md5($password_1);
		
		$conn     	 = mysqli_connect($host,$user,$pass);
		$db_selected = mysqli_select_db($conn,$dbase);
		
		if(!$db_selected){
			$sql = "CREATE DATABASE IF NOT EXISTS $dbase";
			$result = mysqli_query($conn,$sql);
			$db_selected = mysqli_select_db($conn,$dbase);
			
			$query = "CREATE TABLE IF NOT EXISTS $table (
                          ID int(11) NOT NULL AUTO_INCREMENT,
                          username varchar(25) NULL,
                          email varchar(100) NULL,
						  password varchar(100) NULL,
                          PRIMARY KEY  (ID)
                          )";
			$result = mysqli_query($conn,$query);
		}
		
		$sql = "SELECT * FROM $table WHERE username = '$username'";
		$result = mysqli_query($conn,$sql); 
			
		if(mysqli_num_rows($result) == 1){
			array_push($errors, "Username already exists!");
		}
			
		$sql = "SELECT * FROM $table WHERE email = '$email'";
		$result = mysqli_query($conn,$sql);
			
		if(mysqli_num_rows($result) == 1){
			array_push($errors, "Email already exists!");
		}
	}
	//if there are no errors, save user to database
	if(count($errors) == 0){
		$sql = "INSERT INTO $table (username, email, password) VALUES ('$username', '$email', '$password')";
		$result = mysqli_query($conn,$sql); 
		
		if(empty($result)){
			$query = "CREATE TABLE IF NOT EXISTS $table (
                          ID int(11) NOT NULL AUTO_INCREMENT,
                          username varchar(25) NULL,
                          email varchar(100) NULL,
						  password varchar(100) NULL,
                          PRIMARY KEY  (ID)
                          )";
			$result = mysqli_query($conn,$query);			 
			$result = mysqli_query($conn,$sql);
		}
		session_start();
		$_SESSION['username'] = $username;
		$query_email = "SELECT * FROM $table WHERE username='$username' AND password='$password'";
		$result_query = mysqli_query($conn,$query_email);
		$result_email = mysqli_fetch_array($result_query);
		mysqli_close($conn);
		$_SESSION['email'] = $result_email['email'];
		$_SESSION['success'] = "You are now logged in";
		$flag = 1;
		header('location: index-secure.php');
	}
}


//log user from login page
if(isset($_POST['login'])){
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	if(empty($username)){
		array_push($errors, "Username is required");
	}
	if(empty($password)){
		array_push($errors, "Password is required");
	}
	
	$conn = mysqli_connect($host,$user,$pass);
	$db_selected = mysqli_select_db($conn,$dbase);
	if(!$db_selected){
		
		$sql = "CREATE DATABASE IF NOT EXISTS $dbase";
		$result = mysqli_query($conn,$sql);
		$db_selected = mysqli_select_db($conn,$dbase);
		
		$query = "CREATE TABLE IF NOT EXISTS $table (
                          ID int(11) NOT NULL AUTO_INCREMENT,
                          username varchar(25) NULL,
                          email varchar(100) NULL,
						  password varchar(100) NULL,
                          PRIMARY KEY  (ID)
                          )";
		$result = mysqli_query($conn,$query);
		
		array_push($errors,"DATABASE DOES NOT EXIST!");
		array_push($errors,"NEW DATABASE CREATED!");
	}
		
	
	if(count($errors) == 0){
		$password = md5($password);
		$query = "SELECT * FROM $table WHERE username='$username' AND password='$password'";
		$result = mysqli_query($conn,$query);
		
		if(empty($result)){
			$query = "CREATE TABLE IF NOT EXISTS $table (
                          ID int(11) NOT NULL AUTO_INCREMENT,
                          username varchar(25) NULL,
                          email varchar(100) NULL,
						  password varchar(100) NULL,
                          PRIMARY KEY  (ID)
                          )";
			$result = mysqli_query($conn,$query);
			
		}
		$query = "SELECT * FROM $table WHERE username='$username' AND password='$password'";
		$result = mysqli_query($conn,$query);
			
		if(mysqli_num_rows($result) != 1){
			array_push($errors, "Wrong Username/Password!");
		}
	}
	if(count($errors) == 0){

		$query = "SELECT * FROM $table WHERE username='$username' AND password='$password'";
		$result = mysqli_query($conn,$query);

		if(mysqli_num_rows($result) == 1){
			session_start();
			$_SESSION['username'] = $username;
			$query_email = "SELECT * FROM $table WHERE username='$username' AND password='$password'";
			$result_query = mysqli_query($conn,$query_email);
			$result_email = mysqli_fetch_array($result_query);
			$_SESSION['email'] = $result_email['email'];
			$_SESSION['success'] = "You are now logged in";
			$flag = 1;
			header('location: index-secure.php');
		}
		else{
			array_push($errors,"Wrong Username/Password Combination");
			header('location: login.php');
		}
	}
	}

	
	
if(isset($_GET['logout'])){
		session_destroy();
		unset($_SESSION['username']);
		header('location: start.php');
	}
?>
