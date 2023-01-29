<?php

	session_start();
	$database = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($database,"ruet");

?>