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
	$Designation = $_POST['designation'];
	$Department = $_POST['department'];
	$Position = $_POST['position'];
	$Joiningdate = $_POST['joiningdate'];
	$Education = $_POST['education'];
	$Interest = $_POST['interest'];
	$Awards_Scholarships = $_POST['awards-scholarships'];
	$Experiences = $_POST['experiences'];
	$Research = $_POST['research'];
	$Mobile = $_POST['mobile'];
	$Email = $_POST['email'];
	$Religion = $_POST['religion'];
	$Nationality = $_POST['nationality'];
	
	
	if(empty($Fullname)|| empty($Designation)|| empty($Department)|| empty($Position)|| empty($Joiningdate)|| empty($Education)||
	empty($Interest)|| empty($Awards_Scholarships)|| empty($Experiences)|| empty($Research)|| empty($Mobile)||
	empty($Email)|| empty($Religion)|| empty($Nationality)){
		array_push($errors, "The following Information are required: ");
	}
	
	if(empty($Fullname)){
		array_push($errors, "Firstname/Lastname");
	}
	if(empty($Designation)){
		array_push($errors, "Designation");
	}
	if(empty($Department)){
		array_push($errors, "Department");
	}
	if(empty($Position)){
		array_push($errors, "Position Held");
	}
	if(empty($Joiningdate)){
		array_push($errors, "Date of Joining");
	}
	if(empty($Education)){
		array_push($errors, "Educational Background");
	}
	if(empty($Interest)){
		array_push($errors, "Research Interest");
	}
	if(empty($Awards_Scholarships)){
		array_push($errors, "Awards/Scholarships");
	}
	if(empty($Experiences)){
		array_push($errors, "Professional Experiences");
	}
	if(empty($Research)){
		array_push($errors, "Research Publications");
	}
	if(empty($Mobile)){
		array_push($errors, "Mobile Number");
	}
	if(empty($Email)){
		array_push($errors, "Email");
	}
	if(empty($Religion)){
		array_push($errors, "Religion");
	}
	if(empty($Nationality)){
		array_push($errors, "Nationality");
	}
	
	$batch = "teachers";
	
	if(!$db_selected){
		$sql = "CREATE DATABASE IF NOT EXISTS $db";
		$result = mysqli_query($conn,$sql);
		
		$query = "CREATE TABLE $batch (
                          teacher_id int(11) NOT NULL AUTO_INCREMENT,
                          Fullname varchar(255) NULL,
						  Designation varchar(25) NULL,
						  Department varchar(255) NULL,
						  Position_Held varchar(10000) NULL,
						  Date_of_Joining date,
                          Mobile varchar(15) NULL,
                          Email varchar(45) NULL,
						  Educational_Background varchar(10000) NULL,
						  Research_Interest varchar(10000) NULL,
                          Awards_Scholarships varchar(10000) NULL,
						  Professional_Experiences varchar(10000) NULL,
						  Research_Publications varchar(10000) NULL,
                          Religion varchar(25) NULL,
						  Nationality varchar(25) NULL,
                          PRIMARY KEY  (teacher_id)
                          )";
			$result = mysqli_query($conn,$query);
	}
	
	if(count($errors) == 0){
		$sql = "SELECT * from $batch where $batch.Email = $Email";
		$result = mysqli_query($conn,$sql);
		if($result){
		if(mysqli_num_rows($result) == 1){
			array_push($errors, "Teacher Record for Email $Email already exists!");
			}
		}
	}
	if(count($errors) == 0){
		
		$sql = "INSERT INTO $batch (Fullname,Designation,Department,Position_Held,Date_of_Joining,Educational_Background,Research_Interest,Awards_Scholarships,Professional_Experiences,Research_Publications,Mobile,Email,Religion,Nationality) VALUES ('$Fullname','$Designation','$Department','$Position','$Joiningdate','$Education','$Interest','$Awards_Scholarships','$Experiences','$Research','$Mobile','$Email','$Religion','$Nationality')";
	
		$result = mysqli_query($conn,$sql);
	
		if(empty($result)){
			$query = "CREATE TABLE $batch (
                          teacher_id int(11) NOT NULL AUTO_INCREMENT,
                          Fullname varchar(255) NULL,
						  Designation varchar(25) NULL,
						  Department varchar(255) NULL,
						  Position_Held varchar(10000) NULL,
						  Date_of_Joining date,
                          Mobile varchar(15) NULL,
                          Email varchar(45) NULL,
						  Educational_Background varchar(10000) NULL,
						  Research_Interest varchar(10000) NULL,
                          Awards_Scholarships varchar(10000) NULL,
						  Professional_Experiences varchar(10000) NULL,
						  Research_Publications varchar(10000) NULL,
                          Religion varchar(25) NULL,
						  Nationality varchar(25) NULL,
                          PRIMARY KEY  (teacher_id)
                          )";
			$result = mysqli_query($conn,$query);
			$result = mysqli_query($conn,$sql);
		}
		if($result == true)
			array_push($success, "TEACHER INFORMATION STORED");
		if($result == false)
			array_push($errors, "Error! Description: ".mysqli_error($conn));
		
		
		$filename=$_FILES["picture"]["name"];
		$exp=explode(".", $filename);
		$extension=end($exp);
		$newfilename=$Mobile .".".$extension;
	
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