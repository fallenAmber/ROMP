<?php
$not_found="";


?>
<<html>
	<head>
		<title>InfoDesk RUET</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="assets/css/w3.css">
		<link rel="stylesheet" href="assets/css/font-awesome.min.css">
		<script src="assets/js/jquery.min.js"></script>
</head>
<body class="subpage">
		<header id="header">
				<div class="inner">
					<a href="start.php" class="logo"><i class="fa fa-spinner w3-spin" style="font-size:24px"></i><strong>InfoDesk</strong> RUET</a>
					
					<nav id="nav">
						<a href="index.php">Go Back</a>	
						<a href="login.php" style="color: blue;">Login</a>
					</nav>
					<a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
				</div>
			</header>
<footer id="footer">
	<div class="inner" id="goinfo">

		<h3>Search Results</h3>
<?php
$host    = "localhost";
$user    = "root";
$pass    = "";
$db_name = "ruet";

$connection = mysqli_connect($host, $user, $pass, $db_name);
$batch   = "";
$keyword = "";
$department = "";

if((isset($_POST['searchbyname']))){
	
	if($_POST['person'] == "student"){
		
		$keyword = $_POST['name'];
		
		if($_POST['series'] == "14" && $_POST['department'] == "ECE"){
			$batch = "batch_1410";
		}
		else if($_POST['series'] == "15" && $_POST['department'] == "ECE"){
			$batch = "batch_1510";
		}
		else if($_POST['series'] == "16" && $_POST['department'] == "ECE"){
			$batch = "batch_1610";
		}
		else if($_POST['series'] == "17" && $_POST['department'] == "ECE"){
			$batch = "batch_1710";
		}
		
		if($keyword == "ALL" || $keyword == "All" || $keyword == "all" || $keyword == $_POST['series'] || $keyword == $_POST['department'] || $keyword == NULL){
			$query = "SELECT Roll,Fullname,Department,Series FROM $batch";
		}
		else if(strlen($keyword) == 1 && ($keyword >= 'A' && $keyword <= 'Z')){
			$query = "SELECT Roll,Fullname,Department,Series FROM $batch WHERE ".$batch.".Fullname LIKE '".$keyword."%'";
		}
		else{
			$query = "SELECT Roll,Fullname,Department,Series FROM $batch WHERE ".$batch.".Fullname LIKE '%".$keyword."%'";
		}
		$result = mysqli_query($connection,$query);
	
	if(empty($result)){
		echo '<h2>DATA TABLE DOES NOT EXIST!</h2>';
		echo '<br><br>';
	}
	else{	
	$all_property = array();
	$data = array();
	echo '<table>
        <tr>';
	echo '<th>Profile Picture</th>';
	while ($property = mysqli_fetch_field($result)) {
		echo '<th>' . $property->name . '</th>';
		array_push($all_property, $property->name);
	}
	echo '<th>Profile Management</th>';
	echo '</tr>';

	while ($row = mysqli_fetch_array($result)) {
		echo "<tr>";
		foreach ($all_property as $item) {
			$data[$item] = $row[$item];
			if($item == 'Roll'){
			echo '<td>';
			echo '<img width="120" height="120" src="images/'.$data[$item].'.jpg">';
			echo '</td>';
			}
			echo '<td>' . $data[$item] . '</td>';
		}
		echo '<td>';
		echo '<form action="studentprofile.php" method="post">';
		echo '<input type="hidden" name="name" value="'.$data['Fullname'].'" />';
		echo '<input type="hidden" name="batch" value="'.$batch.'" />';
		echo '<input type="submit" name="searchbyname" id="1" value="VIEW PROFILE"/>';
		echo '</form>';
		echo '</td>';
		echo '</tr>';
		}
	echo "</table>";
	}
	}
}

if((isset($_POST['searchbyname']))){
	if($_POST['person'] == "teacher"){
		
		$keyword = $_POST['name'];
		$batch = "teachers";
		if($_POST['department'] == "ECE"){
			$department = "ECE";
		}
		else if($_POST['department'] == "CSE"){
			$department = "CSE";
		}
		else if($_POST['department'] == "EEE"){
			$department = "EEE";
		}
		else if($_POST['department'] == "ETE"){
			$department = "ETE";
		}
		
		if($keyword == "ALL" || $keyword == "All" || $keyword == "all" || $keyword == $_POST['department'] || $keyword == NULL){
			$query = "SELECT Mobile,Fullname,Designation,Email FROM $batch";
		}
		else{
			$query = "SELECT Mobile,Fullname,Designation,Email FROM $batch WHERE ".$batch.".Department = '".$department."' AND ".$batch.".Fullname LIKE '%".$keyword."%'";
		}
		$result = mysqli_query($connection,$query);
	
	if(empty($result)){
		echo '<h2>DATA TABLE DOES NOT EXIST!</h2>';
		echo '<br><br>';
	}
	else{	
	$all_property = array();
	$data = array();
	echo '<table>
        <tr>';
	echo '<th>Profile Picture</th>';
	while ($property = mysqli_fetch_field($result)) {
		echo '<th>' . $property->name . '</th>';
		array_push($all_property, $property->name);
	}
	echo '<th>Profile Management</th>';
	echo '</tr>';


	while ($row = mysqli_fetch_array($result)) {
		echo "<tr>";
		foreach ($all_property as $item) {
			$data[$item] = $row[$item];
			if($item == 'Mobile'){
			echo '<td>';
			echo '<img width="120" height="120" src="images/'.$data[$item].'.jpg">';
			echo '</td>';
			}
			echo '<td>' . $data[$item] . '</td>';
		}
		echo '<td>';
		echo '<form action="teacherprofile.php" method="post">';
		echo '<input type="hidden" name="name" value="'.$data['Fullname'].'" />';
		echo '<input type="submit" name="searchbyname" id="1" value="VIEW PROFILE"/>';
		echo '</form>';
		echo '</td>';
		echo '</tr>';
		}
	echo "</table>";
	}
	}
}

if((isset($_POST['searchbyemail']))){
	
	if($_POST['person'] == "student"){
		
		$keyword = $_POST['email'];
		
		if($_POST['series'] == "14" && $_POST['department'] == "ECE"){
			$batch = "batch_1410";
		}
		else if($_POST['series'] == "15" && $_POST['department'] == "ECE"){
			$batch = "batch_1510";
		}
		else if($_POST['series'] == "16" && $_POST['department'] == "ECE"){
			$batch = "batch_1610";
		}
		else if($_POST['series'] == "17" && $_POST['department'] == "ECE"){
			$batch = "batch_1710";
		}
		
		if($keyword == "ALL" || $keyword == "All" || $keyword == "all" || $keyword == NULL){
			$query = "SELECT Roll,Fullname,Department,Series FROM $batch";
		}
		else{
			$query = "SELECT Roll,Fullname,Department,Series FROM $batch WHERE ".$batch.".Email LIKE '%".$keyword."%'";
		}
		$result = mysqli_query($connection,$query);
	if(empty($result)){
		echo '<h2>DATA TABLE DOES NOT EXIST!</h2>';
		echo '<br><br>';
	}
	else{
	$all_property = array();
	$data = array();
	echo '<table>
        <tr>';
	echo '<th>Profile Picture</th>';
	while ($property = mysqli_fetch_field($result)) {
		echo '<th>' . $property->name . '</th>';
		array_push($all_property, $property->name);
	}
	echo '<th>Profile Management</th>';
	echo '</tr>';


	while ($row = mysqli_fetch_array($result)) {
		echo "<tr>";
		foreach ($all_property as $item) {
			$data[$item] = $row[$item];
			if($item == 'Roll'){
			echo '<td>';
			echo '<img width="120" height="120" src="images/'.$data[$item].'.jpg">';
			echo '</td>';
			}
			echo '<td>' . $data[$item] . '</td>';
		}
		echo '<td>';
		echo '<form action="studentprofile.php" method="post">';
		echo '<input type="hidden" name="name" value="'.$data['Fullname'].'" />';
		echo '<input type="hidden" name="batch" value="'.$batch.'" />';
		echo '<input type="submit" name="searchbyname" id="1" value="VIEW PROFILE"/>';
		echo '</form>';
		echo '</td>';
		echo '</tr>';
		}
	echo "</table>";
	}
	}
}

if((isset($_POST['searchbyemail']))){
	if($_POST['person'] == "teacher"){
		
		$keyword = $_POST['email'];
		$batch = "teachers";
		if($_POST['department'] == "ECE"){
			$department = "ECE";
		}
		else if($_POST['department'] == "CSE"){
			$department = "CSE";
		}
		else if($_POST['department'] == "EEE"){
			$department = "EEE";
		}
		else if($_POST['department'] == "ETE"){
			$department = "ETE";
		}
		
		if($keyword == "ALL" || $keyword == "All" || $keyword == "all" || $keyword == NULL){
			$query = "SELECT Mobile,Fullname,Designation,Email FROM $batch";
		}
		else{
			$query = "SELECT Mobile,Fullname,Designation,Email FROM $batch WHERE ".$batch.".Department = '".$department."' AND ".$batch.".Email LIKE '%".$keyword."%'";
		}
		$result = mysqli_query($connection,$query);
		
	if(empty($result)){
		echo '<h2>DATA TABLE DOES NOT EXIST!</h2>';
		echo '<br><br>';
	}
	else{	
	$all_property = array();
	$data = array();
	echo '<table>
        <tr>';
	echo '<th>Profile Picture</th>';
	while ($property = mysqli_fetch_field($result)) {
		echo '<th>' . $property->name . '</th>';
		array_push($all_property, $property->name);
	}
	echo '<th>Profile Management</th>';
	echo '</tr>';


	while ($row = mysqli_fetch_array($result)) {
		echo "<tr>";
		foreach ($all_property as $item) {
			$data[$item] = $row[$item];
			if($item == 'Mobile'){
			echo '<td>';
			echo '<img width="120" height="120" src="images/'.$data[$item].'.jpg">';
			echo '</td>';
			}
			echo '<td>' . $data[$item] . '</td>';
		}
		echo '<td>';
		echo '<form action="teacherprofile.php" method="post">';
		echo '<input type="hidden" name="name" value="'.$data['Fullname'].'" />';
		echo '<input type="submit" name="searchbyname" id="1" value="VIEW PROFILE"/>';
		echo '</form>';
		echo '</td>';
		echo '</tr>';
		}
	echo "</table>";
	}
	}
}

if((isset($_POST['searchbyroll']))){
	
	if($_POST['person'] == "student"){
		
		$keyword = $_POST['roll'];
		
		if($_POST['series'] == "14" && $_POST['department'] == "ECE"){
			$batch = "batch_1410";
		}
		else if($_POST['series'] == "15" && $_POST['department'] == "ECE"){
			$batch = "batch_1510";
		}
		else if($_POST['series'] == "16" && $_POST['department'] == "ECE"){
			$batch = "batch_1610";
		}
		else if($_POST['series'] == "17" && $_POST['department'] == "ECE"){
			$batch = "batch_1710";
		}
		
		if($keyword == "ALL" || $keyword == "All" || $keyword == "all" || $keyword == NULL){
			$query = "SELECT Roll,Fullname,Department,Series FROM $batch";
		}
		else{
			$query = "SELECT Roll,Fullname,Department,Series FROM $batch WHERE ".$batch.".Roll LIKE '%".$keyword."%'";
		}
		$result = mysqli_query($connection,$query);
		
	if(empty($result)){
		echo '<h2>DATA TABLE DOES NOT EXIST!</h2>';
		echo '<br><br>';
	}
	else{
	$all_property = array();
	$data = array();
	echo '<table>
        <tr>';
	echo '<th>Profile Picture</th>';
	while ($property = mysqli_fetch_field($result)) {
		echo '<th>' . $property->name . '</th>';
		array_push($all_property, $property->name);
	}
	echo '<th>Profile Management</th>';
	echo '</tr>';


	while ($row = mysqli_fetch_array($result)) {
		echo "<tr>";
		foreach ($all_property as $item) {
			$data[$item] = $row[$item];
			if($item == 'Roll'){
			echo '<td>';
			echo '<img width="120" height="120" src="images/'.$data[$item].'.jpg">';
			echo '</td>';
			}
			echo '<td>' . $data[$item] . '</td>';
		}
		echo '<td>';
		echo '<form action="studentprofile.php" method="post">';
		echo '<input type="hidden" name="name" value="'.$data['Fullname'].'" />';
		echo '<input type="hidden" name="batch" value="'.$batch.'" />';
		echo '<input type="submit" name="searchbyname" id="1" value="VIEW PROFILE"/>';
		echo '</form>';
		echo '</td>';
		echo '</tr>';
		}
	echo "</table>";
	}
  }
}
?>
		<div class="copyright">
			<p>Created By Khalid Syfullah</p>
			</div>

	</div>
</footer>

<?php
include 'footer.php';
?>