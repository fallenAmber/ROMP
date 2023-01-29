<html>
	<head>
		<title>Teacher Database</title>
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
		<?php include 'genericteacherserver.php';?>
				<div class="inner" id="goinfo">
					<fieldset>
					<h3>Insert Teacher Record</h3>
					<?php include('success.php'); ?>
					<?php include('errors.php'); ?>
					</fieldset>
					<br>
					<form action="genericteacher.php" method="post" enctype="multipart/form-data">
						<fieldset>
						<legend> Personal Information: </legend>
						<div>
						<div>
							<label>First Name</label>
							<input name="firstname" type="text" placeholder="Given Name">
						</div>
						<div>
							<label>Last Name</label>
							<input name="lastname" type="text" placeholder="Family Name">
						</div>
						<br>
						</div>
						</fieldset>
						<br>
						<fieldset>
						<legend> Academic Information: </legend>
						<div>
							<label>Designation</label>
							<select name="designation">
								<option value="Lecturer">Lecturer</option>
								<option value="Course Advisor">Course Advisor</option>
								<option value="Associate Professor">Associate Professor</option>
								<option value="Assistant Professor">Assistant Professor</option>
								<option value="Professor">Professor</option>
								<option value="Head">Head</option>
								<option value="Dean">Dean</option>
							</select>
						</div>
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
							<label>Position Held: </label>
							<textarea name="position" type="text" cols="40" rows="5" placeholder="Position Held"></textarea>
						</div>
						<br>
						<div >
							<label>Profile Picture</label>
							<input type="file" name="picture" id="picture">
						</div>
						<br>
						<div>
							<label>Date of Joining</label>
							<input name="joiningdate" type="date">
						</div>
						
						<br>
						<div>
							<label>Educational Background: </label>
							<textarea name="education" type="text" placeholder="Educational Background" cols="40" rows="5"></textarea>
						</div>
						<br>
						<div>
							<label>Research Interest: </label>
							<textarea name="interest" type="text" placeholder="Research Interest" cols="40" rows="5"></textarea>
						</div>
						<br>
						<div>
							<label>Awards/Scholarships: </label>
							<textarea name="awards-scholarships" type="text" placeholder="Awards/Scholarships" cols="40" rows="5"></textarea>
						</div>
						<br>
						<div>
							<label>Professional Experiences: </label>
							<textarea name="experiences" type="text" placeholder="Professional Experiences" cols="40" rows="5"></textarea>
						</div>
						<br>
						<div>
							<label>Research Publications: </label>
							<textarea name="research" type="text" placeholder="Research Publications" cols="40" rows="5"></textarea>
						</div>
						
						<br>
						<br>
						</fieldset>
						<br>
						<fieldset>
						<legend> Contact Information: </legend>
						<div>
							<label>Mobile</label>
							<input name="mobile" type="text" placeholder="Mobile">
						</div>
						<br>
						<div>
							<label>Email</label>
							<input name="email" type="text" placeholder="Email">
						</div>
						<br>
						</fieldset>
						<br>
						<fieldset>
						<legend> Legal Information: </legend>
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