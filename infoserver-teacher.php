<?php
$mysql_hostname = "localhost";
$mysql_user     = "root";
$mysql_password = "";
$mysql_database = "ruet";
$bd             = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password, $mysql_database) or die("Oops some thing went wrong");
session_start();
$batch = "teachers";

if(isset($_POST['searchbyname'])){
	$name = $_POST['name'];
	$query = "SELECT * FROM ".$batch." WHERE ".$batch.".Fullname LIKE '%".$name."%'";
	$result = mysqli_query($bd,$query);
	
	$Fullname = "N/F";
	$Designation = "N/F";
	$Department = "N/F";
	$Position_Held = "N/F";
	$Date_of_Joining = "N/F";
	$Mobile = "N/F";
	$Email = "N/F";
	$Educational_Background = "N/F";
	$Interest = "N/F";
	$Awards_Scholarships = "N/F";
	$Professional_Experiences = "N/F";
	$Research_Publications = "N/F";
	$Religion = "N/F";
	$Nationality = "N/F";
	
	while($data = mysqli_fetch_array($result)){
	$teacher_id = $data['teacher_id'];
	$Fullname = $data['Fullname'];
	$Designation = $data['Designation'];
	$Department = $data['Department'];
	$Position_Held = $data['Position_Held'];
	$Date_of_Joining = $data['Date_of_Joining'];
	$Mobile = $data['Mobile'];
	$Email = $data['Email'];
	$Educational_Background = $data['Educational_Background'];
	$Interest = $data['Research_Interest'];
	$Awards_Scholarships = $data['Awards_Scholarships'];
	$Professional_Experiences = $data['Professional_Experiences'];
	$Research_Publications = $data['Research_Publications'];
	$Religion = $data['Religion'];
	$Nationality = $data['Nationality'];
	}
}

if(isset($_POST['searchbyemail'])){
	$email = $_POST['email'];
	$query = "SELECT * FROM ".$batch." WHERE ".$batch.".Email LIKE '%".$email."%'";
	$result = mysqli_query($bd,$query);

	$Fullname = "N/F";
	$Designation = "N/F";
	$Department = "N/F";
	$Position_Held = "N/F";
	$Date_of_Joining = "N/F";
	$Mobile = "N/F";
	$Email = "N/F";
	$Educational_Background = "N/F";
	$Interest = "N/F";
	$Awards_Scholarships = "N/F";
	$Professional_Experiences = "N/F";
	$Research_Publications = "N/F";
	$Religion = "N/F";
	$Nationality = "N/F";
	
	while($data = mysqli_fetch_array($result)){
	$teacher_id = $data['teacher_id'];
	$Fullname = $data['Fullname'];
	$Designation = $data['Designation'];
	$Department = $data['Department'];
	$Position_Held = $data['Position_Held'];
	$Date_of_Joining = $data['Date_of_Joining'];
	$Mobile = $data['Mobile'];
	$Email = $data['Email'];
	$Educational_Background = $data['Educational_Background'];
	$Interest = $data['Research_Interest'];
	$Awards_Scholarships = $data['Awards_Scholarships'];
	$Professional_Experiences = $data['Professional_Experiences'];
	$Research_Publications = $data['Research_Publications'];
	$Religion = $data['Religion'];
	$Nationality = $data['Nationality'];
	}
}

if(isset($_POST['editprofile'])){
	$Email = $_POST['editpass'];
}

if(isset($_POST['saveprofile'])){
	$Fullname = $_POST['fullname'];
	$Designation = $_POST['designation'];
	$Department = $_POST['department'];
	$Position_Held = $_POST['position'];
	$Date_of_Joining = $_POST['joiningdate'];
	$Mobile = $_POST['mobile'];
	$Email = $_POST['email'];
	$Educational_Background = $_POST['education'];
	$Interest = $_POST['interest'];
	$Awards_Scholarships = $_POST['awards-scholarships'];
	$Professional_Experiences = $_POST['experiences'];
	$Research_Publications = $_POST['research'];
	$Religion = $_POST['religion'];
	$Nationality = $_POST['nationality'];
	
	$query = "UPDATE $batch SET Fullname='$Fullname',Designation='$Designation',Department='$Department',Position_Held='$Position_Held',Date_of_Joining='$Date_of_Joining',Mobile='$Mobile',Email='$Email',Educational_Background='$Educational_Background',Research_Interest='$Interest',Awards_Scholarships='$Awards_Scholarships',Professional_Experiences='$Professional_Experiences',Research_Publications='$Research_Publications',Religion='$Religion',Nationality='$Nationality' WHERE Email='$Email'";
	$result = mysqli_query($bd,$query);
	
	$filename=$_FILES["picture"]["name"];
	$exp=explode(".", $filename);
	$extension=end($exp);
	$newfilename=$Mobile .".".$extension;
	
	$target_dir = "images/";
	$target_file = $target_dir . $newfilename;
	
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	move_uploaded_file($_FILES["picture"]["tmp_name"], $target_file);
	
	$Email = $_POST['savepass'];
	
}

if(isset($_POST['goback'])){
	$Email = $_POST['backpass'];
}

	$query = "SELECT * FROM ".$batch." WHERE ".$batch.".Email = '".$Email."'";
	$result = mysqli_query($bd,$query);

	while($data = mysqli_fetch_array($result)){
	$teacher_id = $data['teacher_id'];
	$Fullname = $data['Fullname'];
	$Designation = $data['Designation'];
	$Department = $data['Department'];
	$Position_Held = $data['Position_Held'];
	$Date_of_Joining = $data['Date_of_Joining'];
	$Mobile = $data['Mobile'];
	$Email = $data['Email'];
	$Educational_Background = $data['Educational_Background'];
	$Interest = $data['Research_Interest'];
	$Awards_Scholarships = $data['Awards_Scholarships'];
	$Professional_Experiences = $data['Professional_Experiences'];
	$Research_Publications = $data['Research_Publications'];
	$Religion = $data['Religion'];
	$Nationality = $data['Nationality'];
	}
?>