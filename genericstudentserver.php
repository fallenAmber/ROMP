<?php
$hostname = "localhost";
$user     = "root";
$password = "";
$db 	  = "ruet";
$batch    = "";
$success  = array();
$errors   = array();

if(isset($_POST['insert'])){
	$conn     = mysqli_connect($hostname, $user, $password);
	$db_selected = mysqli_select_db($conn,$db);
	
	$Fullname = $_POST['firstname']." ".$_POST['lastname'];
	$Nickname = $_POST['nickname'];
	$Roll = $_POST['roll'];
	$Series = $_POST['radio'];
	$Department = $_POST['department'];
	$School = $_POST['school'];
	$College = $_POST['college'];
	$Phone = $_POST['phone'];
	$Email = $_POST['email'];
	$Birthdate = $_POST['birthdate'];
	$Blood = $_POST['blood'];
	$Religion = $_POST['religion'];
	$Nationality = $_POST['nationality'];
	
	
	if(empty($Fullname)|| empty($Nickname)|| empty($Roll)|| empty($Series)||
	empty($Department)|| empty($School)|| empty($College)|| empty($Phone)||
	empty($Email)|| empty($Birthdate)|| empty($Blood)|| empty($Religion)||
	empty($Nationality)){
		array_push($errors, "The following Information are required: ");
	}
	
	if(empty($Fullname)){
		array_push($errors, "Firstname/Lastname");
	}
	if(empty($Nickname)){
		array_push($errors, "Nickname");
	}
	if(empty($Roll)){
		array_push($errors, "Roll");
	}
	if(empty($Series)){
		array_push($errors, "Series");
	}
	if(empty($Department)){
		array_push($errors, "Department");
	}
	if(empty($School)){
		array_push($errors, "School");
	}
	if(empty($College)){
		array_push($errors, "College");
	}
	if(empty($Phone)){
		array_push($errors, "Phone Number");
	}
	if(empty($Email)){
		array_push($errors, "Email");
	}
	if(empty($Birthdate)){
		array_push($errors, "Birthdate");
	}
	if(empty($Blood)){
		array_push($errors, "Blood Group");
	}
	if(empty($Religion)){
		array_push($errors, "Religion");
	}
	if(empty($Nationality)){
		array_push($errors, "Nationality");
	}
	
	if($Series == "14" && $Department == "ECE"){
		$batch = "batch_1410";
	}
	else if($Series == "15" && $Department == "ECE"){
		$batch = "batch_1510";
	}
	else if($Series == "16" && $Department == "ECE"){
		$batch = "batch_1610";
	}
	else if($Series == "17" && $Department == "ECE"){
		$batch = "batch_1710";
	}
	
	if(!$db_selected){
			$sql = "CREATE DATABASE IF NOT EXISTS $db";
			$result = mysqli_query($conn,$sql);
			$db_selected = mysqli_select_db($conn,$db);
			
			$query = "CREATE TABLE $batch (
                          Roll int(11),
                          Fullname varchar(25) NULL,
                          Nickname varchar(12) NULL,
						  Department varchar(45) NULL,
                          Series varchar(12) NULL,
						  College varchar(45) NULL,
                          School varchar(45) NULL,
						  Birthdate date,
                          Blood varchar(5) NULL,
                          Phone varchar(12) NULL,
                          Email varchar(45) NULL,
                          Religion varchar(12) NULL,
						  Nationality varchar(25) NULL,
                          PRIMARY KEY  (Roll)
                          )";
			$result = mysqli_query($conn,$query);	
		}
	
	if(count($errors) == 0){
		$sql = "SELECT * from $batch where $batch.Roll = $Roll";
		$result = mysqli_query($conn,$sql);
		if($result){
			if(mysqli_num_rows($result) == "1"){
			array_push($errors, "Student Record for Roll $Roll already exists!");
			}
		}
	}
	if(count($errors) == 0){
		$sql = "INSERT INTO $batch (Roll,Fullname,Nickname,Department,Series,College,School,Birthdate,Blood,Phone,Email,Religion,Nationality) VALUES ('$Roll','$Fullname','$Nickname','$Department','$Series','$College','$School','$Birthdate','$Blood','$Phone','$Email','$Religion','$Nationality')";
		
		$result = mysqli_query($conn,$sql);
	
		if(empty($result)){
			$query = "CREATE TABLE $batch (
                          Roll int(11),
                          Fullname varchar(25) NULL,
                          Nickname varchar(12) NULL,
						  Department varchar(45) NULL,
                          Series varchar(12) NULL,
						  College varchar(45) NULL,
                          School varchar(45) NULL,
						  Birthdate date,
                          Blood varchar(5) NULL,
                          Phone varchar(12) NULL,
                          Email varchar(45) NULL,
                          Religion varchar(12) NULL,
						  Nationality varchar(25) NULL,
                          PRIMARY KEY  (Roll)
                          )";
			$result = mysqli_query($conn,$query);			 
			$result = mysqli_query($conn,$sql);
		}
		if($result == true)
			array_push($success, "STUDENT INFORMATION STORED");
		if($result == false)
			array_push($errors, "Error! Description: ".mysqli_error($conn));
		
		
		$filename=$_FILES["picture"]["name"];
		$exp=explode(".", $filename);
		$extension=end($exp);
		$newfilename=$Roll .".".$extension;
	
		$target_dir = "images/";
		$target_file = $target_dir . $newfilename;
	
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		$check = getimagesize($_FILES["picture"]["tmp_name"]);
		if($check !== false) {
			$uploadOk = 1;
		} else {
			$uploadOk = 0;
		}
		if ($uploadOk == 0) {
		array_push($errors, "Sorry, your file was not uploaded.");
		} 
		else 
		{
			if (move_uploaded_file($_FILES["picture"]["tmp_name"], $target_file)) {
				array_push($success, "Profile Picture ".$newfilename. " has been uploaded.");
			} 
			else {
				array_push($errors, "Sorry, there was an error uploading your Profile Picture.");
			}
		}
		mysqli_close($conn);
	}
	
}
?>