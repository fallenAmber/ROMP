<html>
	<head>
		<title>Student Database</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="subpage">
		<header id="header">
				<div class="inner">
					<a href="index-secure.php" class="logo"><strong>InfoDesk</strong> RUET</a>
					<nav id="nav">
						<a href="generic.php">Go Back</a>
						<a href="header-secure.php?logout" style="color: red;">Logout</a>
					</nav>
					<a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
				</div>
			</header>
	
		
		<footer id="footer">
		<?php include 'genericstudentserver.php';?>
				<div class="inner" id="goinfo">
					<fieldset>
					<h3>Insert Student Record</h3>
					<?php include('success.php'); ?>
					<?php include('errors.php'); ?>
					</fieldset>
					<br>
					<form action="genericstudent.php" method="post" enctype="multipart/form-data">
						<fieldset>
						<legend> Personal Information: </legend>
						<div>
						<div>
							<label>First Name</label>
							<input name="firstname" type="text" placeholder="Given Name">
						</div>
						<br>
						<div>
							<label>Last Name</label>
							<input name="lastname" type="text" placeholder="Family Name">
						</div>
						<br>
						</div>
						<div>
							<label>Nickname</label>
							<input name="nickname" type="text" placeholder="Popular Name">
						</div>
						<br>
						</fieldset>
						<br>
						<fieldset>
						<legend> Academic Information: </legend>
						<div>
							<label>Roll</label>
							<input name="roll" type="text" placeholder="Roll">
						</div>
						<br>
						<div style="float:left">
							<label>Series</label>
							<label class="radiocontainer">14
							<input type="radio" checked="checked" name="radio" value="14">
							<span class="radiocheckmark"></span>
							</label>
							<label class="radiocontainer">15
							<input type="radio" name="radio" value="15">
							<span class="radiocheckmark"></span>
							</label>
							<label class="radiocontainer">16
							<input type="radio" name="radio" value="16">
							<span class="radiocheckmark"></span>
							</label>
							<label class="radiocontainer">17
							<input type="radio" name="radio" value="17">
							<span class="radiocheckmark"></span>
							</label>
						</div>
						<div style="float:right">
							<label>Profile Picture</label>
							<input type="file" name="picture" id="picture">
						</div>
						
						<br><br>
						<br><br>
						<br><br>
						<br><br>
						<br>
						<div>
							<label>Department</label>
							<select name="department">
								<option value="ECE">ECE</option>
								<option value="CSE">CSE</option>
								<option value="EEE">EEE</option>
								<option value="ETE">ETE</option>
							</select>
						</div>
						<br>
						<div>
							<label>School</label>
							<input name="school" type="text" placeholder="School">
						</div>
						<br>
						<div>
							<label>College</label>
							<input name="college" type="text" placeholder="College">
						</div>
						<br>
						</fieldset>
						<br>
						<fieldset>
						<legend> Contact Information: </legend>
						<div style="display:inline-block">
							<label>Phone</label>
							<input name="phone" type="text" placeholder="Phone">
						</div>
						<div style="display:inline-block">
							<label>Email</label>
							<input name="email" type="text" placeholder="Email">
						</div>
						<br>
						<br>
						</fieldset>
						<br>
						<fieldset>
						<legend> Legal Information: </legend>
						<div style="float:left">
							<label>Date of Birth</label>
							<input name="birthdate" type="date">
						</div>
						<div style="float:right">
							<label>Blood Group</label>
							<select name="blood">
								<option value="A+">A+</option>
								<option value="B+">B+</option>
								<option value="AB+">AB+</option>
								<option value="A-">A-</option>
								<option value="B-">B-</option>
								<option value="AB-">AB-</option>
								<option value="O+">O+</option>
								<option value="O-">O-</option>
							</select>
						</div>
						<br>
						<br>
						<br>
						<div>
							<label>Religion</label>
							<input name="religion" type="text" placeholder="Religion">
						</div>
						<br>
						<div>
							<label>Nationality</label>
							<input name="nationality" type="text" placeholder="Nationality">
						</div>
						<br>
						</fieldset>
						<br>
						
			
						</div>
	
						<ul class="actions">
							<li><input name="insert" value="Inlcude To Database" class="button alt" type="submit"></li>
						</ul>
					</form>

					<div class="copyright">
						<p>Created By Khalid Syfullah</p>
					</div>

				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>


	</body>
</html>