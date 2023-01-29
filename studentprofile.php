<?php
include 'infoserver.php';
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
					<a href="index.php" class="logo"><i class="fa fa-spinner w3-spin" style="font-size:24px"></i><strong>InfoDesk</strong> RUET</a>
					
					<nav id="nav">
						<a href="index.php">Go Back</a>						
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
            </div>
			<div class="clearfix"></div>
            
            

			<div class="col-sm-5 col-xs-6 tital " >Full Name:</div><div class="col-sm-7 col-xs-6 "><?php echo $Fullname;?></div>
			<div class="clearfix"></div>

			<div class="col-sm-5 col-xs-6 tital " >Nickname:</div><div class="col-sm-7"> <?php echo $Nickname;?></div>
			<div class="clearfix"></div>
			<div class="col-sm-5 col-xs-6 tital " >Roll:</div><div class="col-sm-7"> <?php echo $Roll;?></div>
			<div class="clearfix"></div>
			<div class="col-sm-5 col-xs-6 tital " >Department:</div><div class="col-sm-7"><?php echo $Department;?></div>
			<div class="clearfix"></div>
			<div class="col-sm-5 col-xs-6 tital " >Series:</div><div class="col-sm-7"><?php echo $Series;?></div>
			<div class="clearfix"></div>
			<div class="col-sm-5 col-xs-6 tital " >Date Of Birth:</div><div class="col-sm-7"><?php echo $Birthdate;?></div>
			<div class="clearfix"></div>

			<div class="col-sm-5 col-xs-6 tital " >Phone Number:</div><div class="col-sm-7"><?php echo $Phone;?></div>
			<div class="clearfix"></div>
			
			

			<div class="col-sm-5 col-xs-6 tital " >Email:</div><div class="col-sm-7"><?php echo $Email;?></div>
			<div class="clearfix"></div>
			<div class="col-sm-5 col-xs-6 tital " >School:</div><div class="col-sm-7"><?php echo $School;?></div>
			<div class="clearfix"></div>
			<div class="col-sm-5 col-xs-6 tital " >College:</div><div class="col-sm-7"><?php echo $College;?></div>
			<div class="clearfix"></div>
			<div class="col-sm-5 col-xs-6 tital " >Nationality:</div><div class="col-sm-7"><?php echo $Nationality;?></div>
			<div class="clearfix"></div>
			<div class="col-sm-5 col-xs-6 tital " >Religion:</div><div class="col-sm-7"><?php echo $Religion;?></div>
			<div class="clearfix"></div>
			<div class="col-sm-5 col-xs-6 tital " >Blood Group:</div><div class="col-sm-7"><?php echo $Blood;?></div>
            <!-- /.box-body -->
			<div class="clearfix"></div>
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



         