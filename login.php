<?php include 'server.php' ?>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<link href="assets/css/style.css" rel="stylesheet" type="text/css">
</head>

<body class="subpage">
	<footer id="footer">
		<div class="inner" id="goinfo">
		<h3>Login</h3>
	<form method="post" action="login.php">
	<?php include('errors.php'); ?>
	<div class="field half first">
			<label for="name">Name</label>
			<input name="username" id="name" type="text" placeholder="Name">
			</div>
	  
	  <div class="field half first">
		  <label>Password</label>
		  <input type="password" name="password" placeholder="Password">
	  </div>
	  
	  <div class="field half first">
		<button type="submit" name="login" class="btn">Login</button>
		</div>
		<div class="field half first">
		<p>
			<ul class="actions">
			Not yet a member?
			<br />
			<li><a href="register.php">Sign Up</a></li>
			<li><a href="start.php">Go Home</a></li>
			</ul>
		</p>
		</div>
    </form>
	</div>
	</footer>
</body>
</html>