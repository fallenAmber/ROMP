<?php
$mysql_hostname = "localhost";
$mysql_user     = "root";
$mysql_password = "";
$mysql_database = "ruet";
$bd             = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password, $mysql_database) or die("Oops some thing went wrong");
session_start();
$batch = $_POST['batch'];

if(isset($_POST['searchbyname'])){
	$name = $_POST['name'];
	$query = "SELECT * FROM ".$batch." WHERE ".$batch.".Fullname LIKE '%".$name."%'";
	$result = mysqli_query($bd,$query);
		
	$Roll = 000000;
	$Fullname = "N/F";
	$Nickname = "N/F";
	$Birthdate = date('2018-01-01');
	$Email = "N/F";
	$Department = "N/F";
	$Series = "N/F";
	$School = "N/F";
	$College = "N/F";
	$Phone = "N/F";
	$Blood = "N/F";
	$Religion = "N/F";
	$Nationality = "N/F";
		
	while($data = mysqli_fetch_array($result)){
		$Roll = $data['Roll'];
		$Fullname = $data['Fullname'];
		$Nickname = $data['Nickname'];
		$Birthdate = $data['Birthdate'];
		$Email = $data['Email'];
		$Department = $data['Department'];
		$Series = $data['Series'];
		$School = $data['School'];
		$College = $data['College'];
		$Phone = $data['Phone'];
		$Blood = $data['Blood'];
		$Religion = $data['Religion'];
		$Nationality = $data['Nationality'];
	}
		
}
if(isset($_POST['searchbyroll'])){
	$rollno = $_POST['roll'];
	$query = "SELECT * FROM ".$batch." WHERE ".$batch.".Roll = ".$rollno;
	$result = mysqli_query($bd,$query);

	$Roll = 000000;
	$Fullname = "N/F";
	$Nickname = "N/F";
	$Birthdate = date('2018-01-01');
	$Email = "N/F";
	$Department = "N/F";
	$Series = "N/F";
	$School = "N/F";
	$College = "N/F";
	$Phone = "N/F";
	$Blood = "N/F";
	$Religion = "N/F";
	$Nationality = "N/F";

	while($data = mysqli_fetch_array($result)){
	$Roll = $data['Roll'];
	$Fullname = $data['Fullname'];
	$Nickname = $data['Nickname'];
	$Birthdate = $data['Birthdate'];
	$Email = $data['Email'];
	$Department = $data['Department'];
	$Series = $data['Series'];
	$School = $data['School'];
	$College = $data['College'];
	$Phone = $data['Phone'];
	$Blood = $data['Blood'];
	$Religion = $data['Religion'];
	$Nationality = $data['Nationality'];
	}
}

if(isset($_POST['searchbyemail'])){
	$email = $_POST['email'];
	$query = "SELECT * FROM ".$batch." WHERE ".$batch.".Email LIKE '%".$email."%'";
	$result = mysqli_query($bd,$query);

	$Roll = 000000;
	$Fullname = "N/F";
	$Nickname = "N/F";
	$Birthdate = date('2018-01-01');
	$Email = "N/F";
	$Department = "N/F";
	$Series = "N/F";
	$School = "N/F";
	$College = "N/F";
	$Phone = "N/F";
	$Blood = "N/F";
	$Religion = "N/F";
	$Nationality = "N/F";
	
	while($data = mysqli_fetch_array($result)){
	$Roll = $data['Roll'];
	$Fullname = $data['Fullname'];
	$Nickname = $data['Nickname'];
	$Birthdate = $data['Birthdate'];
	$Email = $data['Email'];
	$Department = $data['Department'];
	$Series = $data['Series'];
	$School = $data['School'];
	$College = $data['College'];
	$Phone = $data['Phone'];
	$Blood = $data['Blood'];
	$Religion = $data['Religion'];
	$Nationality = $data['Nationality'];
	}
}

if(isset($_POST['editprofile'])){
	$rollno = $_POST['editpass'];
	$query = "SELECT * FROM ".$batch." WHERE ".$batch.".Roll = ".$rollno;
	$result = mysqli_query($bd,$query);

	while($data = mysqli_fetch_array($result)){
	$Roll = $data['Roll'];
	$Fullname = $data['Fullname'];
	$Nickname = $data['Nickname'];
	$Birthdate = $data['Birthdate'];
	$Email = $data['Email'];
	$Department = $data['Department'];
	$Series = $data['Series'];
	$School = $data['School'];
	$College = $data['College'];
	$Phone = $data['Phone'];
	$Blood = $data['Blood'];
	$Religion = $data['Religion'];
	$Nationality = $data['Nationality'];
	}
}
if(isset($_POST['saveprofile'])){
	$rollno = $_POST['savepass'];
	$Roll = $_POST['roll'];
	$Fullname = $_POST['fullname'];
	$Nickname = $_POST['nickname'];
	$Birthdate = $_POST['birthdate'];
	$Email = $_POST['email'];
	$Department = $_POST['department'];
	$Series = $_POST['series'];
	$School = $_POST['school'];
	$College = $_POST['college'];
	$Phone = $_POST['phone'];
	$Blood = $_POST['blood'];
	$Religion = $_POST['religion'];
	$Nationality = $_POST['nationality'];
	
	$query = "UPDATE $batch SET Roll='$Roll',Fullname='$Fullname',Nickname='$Nickname',Department='$Department',Series='$Series',College='$College',School='$School',Birthdate='$Birthdate',Blood='$Blood',Phone='$Phone',Email='$Email',Religion='$Religion',Nationality='$Nationality' WHERE Roll='$Roll'";
	$result = mysqli_query($bd,$query);
	
	$filename=$_FILES["picture"]["name"];
	$exp=explode(".", $filename);
	$extension=end($exp);
	$newfilename=$Roll .".".$extension;
	
	$target_dir = "images/";
	$target_file = $target_dir . $newfilename;
	
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	move_uploaded_file($_FILES["picture"]["tmp_name"], $target_file);
		
}

if(isset($_POST['goback'])){
	$rollno = $_POST['backpass'];
	$query = "SELECT * FROM ".$batch." WHERE ".$batch.".Roll = ".$rollno;
$result = mysqli_query($bd,$query);



while($data = mysqli_fetch_array($result)){
$Roll = $data['Roll'];
$Fullname = $data['Fullname'];
$Nickname = $data['Nickname'];
$Birthdate = $data['Birthdate'];
$Email = $data['Email'];
$Department = $data['Department'];
$Series = $data['Series'];
$School = $data['School'];
$College = $data['College'];
$Phone = $data['Phone'];
$Blood = $data['Blood'];
$Religion = $data['Religion'];
$Nationality = $data['Nationality'];
}
}


?>