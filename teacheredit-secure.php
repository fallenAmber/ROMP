<?php include 'infoserver-teacher.php';
$Emailpass = $_POST['emailpass'];
?>
<html>
<head><title>Teacher Profile></title>
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link href="assets-profile/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<script src="assets-profile/bootstrap.min.js"></script>
		<script src="assets-profile/query-1.11.1.min.js"></script>
		<link rel="stylesheet" href="assets/css/main.css">
		<link rel="stylesheet" href="assets/css/w3.css">
<!------ Include the above in your HEAD tag ---------->
</head>
<body class="subpage">
	<header id="header">
				<div class="inner">
					<a href="index.php" class="logo"><i class="fa fa-spinner w3-spin" style="font-size:24px"></i><strong>InfoDesk</strong> RUET</a>
					
					<nav id="nav">
						<form action="teacherprofile-secure.php" method="post">
						<input type="hidden" name="backpass" value="<?php echo $Email; ?>" />
						<input type="hidden" name="emailpass" value="<?php echo $Emailpass;?>" />
						<input style="color:White !important;" type="submit" name="goback" value="Go Back" />
						<a href="generic.php">Insert Record</a>
					</form>								
					</nav>
					<a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
				</div>
			</header>


<footer id="footer" style="color: #3c3c3c">
<div class="inner" id="goinfo">
	<div class="row">
        
	<div class="col-md-7 " style="margin: 0% 20%;width: 60%;">

	 <div class="panel panel-default">
	 
	  <div class="panel-heading">  
		<h4 >Teacher Profile</h4>
	  </div>
	  
	    <div class="panel-body">
       
		  <div class="box box-info">
        
            <div class="box-body">
			<form action="teacherprofile-secure.php" method="post" enctype="multipart/form-data">
                <div class="col-sm-6">
                     <div  align="center">
					 <img alt="User Pic" <?php echo 'src=images/'.$Mobile.'.jpg';?> id="profile-image1" class="img-circle img-responsive"> 
					 </div>
					<br>
					<!-- /input-group -->
				</div>
				<div class="col-sm-6">
            <span><h4 style="color:#00b1b1;"><?php echo $Fullname;?> </h4></span>
			<span><p><?php echo $Designation;?></p></span>
			<h2>Change Picture</h2>
			  <div class="col-sm-5 col-xs-6 tital " >
				<input type="file" name="picture" id="picture" />
			  </div>
			  <br>
			  <br>
			  <input type="submit" name="saveprofile" value="Save Profile" />
			  <input type="hidden" name="savepass" value="<?php echo $Email; ?>" />
			  <input type="hidden" name="emailpass" value="<?php echo $Emailpass;?>" />
                          
            </div>
			<div class="clearfix"></div>
            
            

			<div class="col-sm-5 col-xs-6 tital " >Full Name:</div><div class="col-sm-7 col-xs-6 "><input name="fullname" type="text" value="<?php echo $Fullname; ?>" placeholder="<?php echo $Fullname; ?>"></div>
			<div class="clearfix"></div>
			<br>
			<div class="col-sm-5 col-xs-6 tital " >Designation:</div><div class="col-sm-7 col-xs-6 "><input name="designation" type="text" value="<?php echo $Designation; ?>" placeholder="<?php echo $Designation; ?>"></div>
			<div class="clearfix"></div>
			<br>
			<div class="col-sm-5 col-xs-6 tital " >Department:</div><div class="col-sm-7 col-xs-6 "><input name="department" type="text" value="<?php echo $Department; ?>" placeholder="<?php echo $Department; ?>"></div>
			<div class="clearfix"></div>
			<br>
			<div class="col-sm-5 col-xs-6 tital " >Position Held:</div><div class="col-sm-7 col-xs-6 "><textarea name="position" type="text" cols="40" rows="5"><?php echo $Position_Held; ?></textarea></div>
			<div class="clearfix"></div>
			<br>
			<div class="col-sm-5 col-xs-6 tital " >Date of Joining:</div><div class="col-sm-7 col-xs-6 "><input name="joiningdate" type="date" value="<?php echo $Date_of_Joining; ?>" placeholder="<?php echo $Date_of_Joining; ?>"></div>
			<div class="clearfix"></div>
			<br>
			<div class="col-sm-5 col-xs-6 tital " >Mobile:</div><div class="col-sm-7 col-xs-6 "><input name="mobile" type="text" value="<?php echo $Mobile; ?>" placeholder="<?php echo $Mobile; ?>"></div>
			<div class="clearfix"></div>
			<br>
			<div class="col-sm-5 col-xs-6 tital " >Email:</div><div class="col-sm-7 col-xs-6 "><input name="email" type="text" value="<?php echo $Email; ?>" placeholder="<?php echo $Email; ?>"></div>
			<div class="clearfix"></div>
			<br>
			<div class="col-sm-5 col-xs-6 tital " >Educational Background:</div><div class="col-sm-7 col-xs-6 "><textarea name="education" type="text" cols="40" rows="5" ><?php echo $Educational_Background; ?></textarea></div>
			<div class="clearfix"></div>
			<br>
			<div class="col-sm-5 col-xs-6 tital " >Research Interest:</div><div class="col-sm-7 col-xs-6 "><textarea name="interest" type="text" cols="40" rows="5"><?php echo $Interest; ?></textarea></div>
			<div class="clearfix"></div>
			<br>
			<div class="col-sm-5 col-xs-6 tital " >Awards/Scholarships:</div><div class="col-sm-7 col-xs-6 "><textarea name="awards-scholarships" type="text" cols="40" rows="5"><?php echo $Awards_Scholarships; ?></textarea></div>
			<div class="clearfix"></div>
			<br>
			<div class="col-sm-5 col-xs-6 tital " >Professional Experiences:</div><div class="col-sm-7 col-xs-6 "><textarea name="experiences" type="text" cols="40" rows="5"><?php echo $Professional_Experiences; ?></textarea></div>
			<div class="clearfix"></div>
			<br>
			<div class="col-sm-5 col-xs-6 tital " >Research Publications:</div><div class="col-sm-7 col-xs-6 "><textarea name="research" type="text" cols="40" rows="5"><?php echo $Research_Publications; ?></textarea></div>
			<div class="clearfix"></div>
			<br>
			<div class="col-sm-5 col-xs-6 tital " >Religion:</div><div class="col-sm-7 col-xs-6 "><input name="religion" type="text" value="<?php echo $Religion; ?>" placeholder="<?php echo $Religion; ?>"></div>
			<div class="clearfix"></div>
			<br>
			<div class="col-sm-5 col-xs-6 tital " >Nationality:</div><div class="col-sm-7 col-xs-6 "><input name="nationality" type="text" value="<?php echo $Nationality; ?>" placeholder="<?php echo $Nationality; ?>"></div>
			<div class="clearfix"></div>
			<br>
			</form>
			</div>
        <!-- /.box -->

    </div>
       
            
    </div> 
   </div>
  </div>  

   </div>
</div>
</footer>
</body>
</html>



         