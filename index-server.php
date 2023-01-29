<html>
<head>
</head>
<body>
<?php
$keyword = $_POST['keyword'];
if(isset($_POST['search'])){
	if((isset($_POST['with'])) && $_POST['with'] == "name"){
		
		if((isset($_POST['person'])) && $_POST['person'] == "student"){
			
				echo '<form action="userprofile.php" method="post">';
				echo '<input type="hidden" name="person" value="'.$_POST['person'].'" />';
				echo '<input type="hidden" name="name" value="'.$keyword.'" />';
				echo '<input type="hidden" name="department" value="'.$_POST['department'].'" />';
				echo '<input type="hidden" name="series" value="'.$_POST['series'].'" />';
				echo '<input type="submit" name="searchbyname" id="1"/>';
				echo '</form>';
				echo '<script type="text/javascript">
					document.getElementById("1").click();
					</script>';
		}
		if((isset($_POST['person'])) && $_POST['person'] == "teacher"){
			echo '<form action="userprofile.php" method="post">';
			echo '<input type="hidden" name="person" value="'.$_POST['person'].'" />';
			echo '<input type="hidden" name="name" value="'.$keyword.'" />';
			echo '<input type="hidden" name="department" value="'.$_POST['department'].'" />';
			echo '<input type="submit" name="searchbyname" id="2"/>';
			echo '</form>';
			echo '<script type="text/javascript">
				document.getElementById("2").click();
				</script>';
		}
		
	}
	
	if((isset($_POST['with'])) && $_POST['with'] == "email"){
		if((isset($_POST['person'])) && $_POST['person'] == "student"){
			echo '<form action="userprofile.php" method="post">';
			echo '<input type="hidden" name="person" value="'.$_POST['person'].'" />';
			echo '<input type="hidden" name="email" value="'.$keyword.'" />';
			echo '<input type="hidden" name="department" value="'.$_POST['department'].'" />';
			echo '<input type="hidden" name="series" value="'.$_POST['series'].'" />';
			echo '<input type="submit" name="searchbyemail" id="3"/>';
			echo '</form>';
			echo '<script type="text/javascript">
				document.getElementById("3").click();
				</script>';
		}
		if((isset($_POST['person'])) && $_POST['person'] == "teacher"){
			echo '<form action="userprofile.php" method="post">';
			echo '<input type="hidden" name="person" value="'.$_POST['person'].'" />';
			echo '<input type="hidden" name="email" value="'.$keyword.'" />';
			echo '<input type="hidden" name="department" value="'.$_POST['department'].'" />';
			echo '<input type="submit" name="searchbyemail" id="4"/>';
			echo '</form>';
			echo '<script type="text/javascript">
				document.getElementById("4").click();
				</script>';
		}
	}
	
	if((isset($_POST['with'])) && $_POST['with'] == "roll"){
		if((isset($_POST['person'])) && $_POST['person'] == "student"){
			echo '<form action="userprofile.php" method="post">';
			echo '<input type="hidden" name="person" value="'.$_POST['person'].'" />';
			echo '<input type="hidden" name="roll" value="'.$keyword.'" />';
			echo '<input type="hidden" name="department" value="'.$_POST['department'].'" />';
			echo '<input type="hidden" name="series" value="'.$_POST['series'].'" />';
			echo '<input type="submit" name="searchbyroll" id="5"/>';
			echo '</form>';
			echo '<script type="text/javascript">
				document.getElementById("5").click();
				</script>';
		}
	}
}
?>
</body>
</html>