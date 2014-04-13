<?php
	include("settings.php");
?>
 <head>
	<link rel="icon" href="images/favicon.ico" type="image/x-icon"/>
	<link rel="stylesheet" href="style.css">
	<title>SA-MP Template</title>
 </head>
 
 <body>
	<a href="index.php"><div id="tab1" >Home</div></a>
	<a href="forum.php"><div id="tab2" >Forum</div></a>
	<a href="login.php"><div id="tab3" >UCP</div></a>
	<div id="headdiv" ></div>
	
	<div id="bodydiv" >
	<h2>Welcome to <?php echo SVRNAME; ?></h2><p>Add some general server information blah blah</p>
	</div>
	
	 <div id="copyright" >Your copyright slogan here || <?php echo SVRNAME; ?> || Owner: <?php echo OWNER; ?> || <?php echo YEAR; ?></div>
	 
	 
 </body>
 