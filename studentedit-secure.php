<?php include 'infoserver.php'; 
$Emailpass = $_POST['emailpass'];
?>
<html>
<head><title>Student Profile></title>
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
					<a href="start.php" class="logo"><i class="fa fa-spinner w3-spin" style="font-size:24px"></i><strong>InfoDesk</strong> RUET</a>
					
					<nav id="nav">
					<form action="studentprofile-secure.php" method="post">
						<?php echo '<input type="hidden" name="batch" value="'.$batch.'" />'; ?>
						<input type="hidden" name="backpass" value="<?php echo $Roll; ?>" />
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
	 
	  <div class="panel-heading">  <h4 >Student Profile</h4></div>
	  
	    <div class="panel-body">
       
		  <div class="box box-info">
        
            <div class="box-body">
			<form action="studentprofile-secure.php" method="post" enctype="multipart/form-data">
                <div class="col-sm-6">
                     <div  align="center">
					 <img alt="User Pic" <?php echo 'src=images/'.$Roll.'.jpg';?> id="profile-image1" class="img-circle img-responsive"> 
					 </div>
					<br>
					<!-- /input-group -->
				</div>
				<div class="col-sm-6">
            <h4 style="color:#00b1b1;"><?php echo $Fullname;?> </h4></span>
              <span><p>Student</p></span>
			  <h2>Change Picture</h2>
			  <div class="col-sm-5 col-xs-6 tital " ><input type="file" name="picture" id="picture" />
			  </div>
			  <br>
			  <br>
			  <input type="submit" name="saveprofile" value="Save Profile" />
			  <?php echo '<input type="hidden" name="batch" value="'.$batch.'" />'; ?>
			  <input type="hidden" name="savepass" value="<?php echo $Roll; ?>" />
			  <input type="hidden" name="emailpass" value="<?php echo $Emailpass;?>" />
			<br>
			<br>
            </div>

			<div class="clearfix"></div>

			<div class="col-sm-5 col-xs-6 tital " >Full Name:</div><div class="col-sm-7 col-xs-6 "><input name="fullname" type="text" value="<?php echo $Fullname; ?>" placeholder="<?php echo $Fullname; ?>"></div>
			<br />
			<br />
			<div class="clearfix"></div>

			<div class="col-sm-5 col-xs-6 tital " >Nickname:</div><div class="col-sm-7"><input name="nickname" type="text" value="<?php echo $Nickname;?>" placeholder="<?php echo $Nickname;?>"></div>
			<br />
			<br />
			<div class="clearfix"></div>
			<div class="col-sm-5 col-xs-6 tital " >Roll:</div><div class="col-sm-7"><input name="roll" type="text" value="<?php echo $Roll;?>" placeholder="<?php echo $Roll;?>"></div>
			<br />
			<br />
			<div class="clearfix"></div>
			<div class="col-sm-5 col-xs-6 tital " >Department:</div>
			<div class="col-sm-7">
				<select name="department">
					<option <?php if($Department == "CSE") echo 'selected';?>>CSE</option>
					<option <?php if($Department == "ECE") echo 'selected';?>>ECE</option>
					<option <?php if($Department == "EEE") echo 'selected';?>>EEE</option>
					<option <?php if($Department == "ETE") echo 'selected';?>>ETE</option>
				</select>
			</div>
			<br />
			<br />
			<br />
			<div class="clearfix"></div>
			<div class="col-sm-5 col-xs-6 tital " >Series:</div>
			<div class="col-sm-7">
				<label class="radiocontainer" style="color:black; font-weight:50">14
				<input type="radio" <?php if($Series == 14) echo 'checked';?> name="series" value="14">
				<span class="radiocheckmark"></span>
				</label>
				<label class="radiocontainer" style="color:black; font-weight:50">15
				<input type="radio" <?php if($Series == 15) echo 'checked';?> name="series" value="15">
				<span class="radiocheckmark"></span>
				</label>
				<label class="radiocontainer" style="color:black; font-weight:50">16
				<input type="radio" <?php if($Series == 16) echo 'checked';?> name="series" value="16">
				<span class="radiocheckmark"></span>
				</label>
				<label class="radiocontainer" style="color:black; font-weight:50">17
				<input type="radio" <?php if($Series == 17) echo 'checked';?> name="series" value="17">
				<span class="radiocheckmark"></span>
				</label>
			</div>
			<br />
			<br />
			<div class="clearfix"></div>
			<div class="col-sm-5 col-xs-6 tital " >Date Of Birth:</div><div class="col-sm-7"><input name="birthdate" type="date" value="<?php echo $Birthdate;?>"></div>
			<br />
			<br />
			<div class="clearfix"></div>

			<div class="col-sm-5 col-xs-6 tital " >Phone Number:</div><div class="col-sm-7"><input name="phone" type="text" value="<?php echo $Phone;?>" placeholder="<?php echo $Phone;?>"></div>
			<br />
			<br />
			<div class="clearfix"></div>
			
			

			<div class="col-sm-5 col-xs-6 tital " >Email:</div><div class="col-sm-7"><input name="email" type="text" value="<?php echo $Email;?>" placeholder="<?php echo $Email;?>"></div>
			<br />
			<br />
			<div class="clearfix"></div>
			<div class="col-sm-5 col-xs-6 tital " >School:</div><div class="col-sm-7"><input name="school" type="text" value="<?php echo $School;?>" placeholder="<?php echo $School;?>"></div>
			<br />
			<br />
			<div class="clearfix"></div>
			<div class="col-sm-5 col-xs-6 tital " >College:</div><div class="col-sm-7"><input name="college" type="text" value="<?php echo $College;?>" placeholder="<?php echo $College;?>"></div>
			<br />
			<br />
			<div class="clearfix"></div>
			<div class="col-sm-5 col-xs-6 tital " >Nationality:</div><div class="col-sm-7"><input name="nationality" type="text" value="<?php echo $Nationality;?>" placeholder="<?php echo $Nationality;?>"></div>
			<br />
			<br />
			<div class="clearfix"></div>
			<div class="col-sm-5 col-xs-6 tital " >Religion:</div><div class="col-sm-7"><input name="religion" type="text" value="<?php echo $Religion;?>" placeholder="<?php echo $Religion;?>"></div>
			<br />
			<br />
			<div class="clearfix"></div>
			<div class="col-sm-5 col-xs-6 tital " >Blood Group:</div>
			<div class="col-sm-7">
				<select name="blood">
					<option value="A+" <?php if($Blood == "A+") echo 'selected';?>>A+</option>
					<option value="B+" <?php if($Blood == "B+") echo 'selected';?>>B+</option>
					<option value="AB+" <?php if($Blood == "AB+") echo 'selected';?>>AB+</option>
					<option value="A-" <?php if($Blood == "A-") echo 'selected';?>>A-</option>
					<option value="B-" <?php if($Blood == "B-") echo 'selected';?>>B-</option>
					<option value="AB-" <?php if($Blood == "AB-") echo 'selected';?>>AB-</option>
					<option value="O+" <?php if($Blood == "O+") echo 'selected';?>>O+</option>
					<option value="O-" <?php if($Blood == "O-") echo 'selected';?>>O-</option>
				</select>
			</div>
            <!-- /.box-body -->
			<br />
			<br />
			<div class="clearfix"></div>
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



         