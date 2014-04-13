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
	<h2>Welcome to <?php echo SVRNAME; ?> UCP</h2><p>Please type in your correct user name and password for the SA:MP server to be redirected to your live stats page. Remember: Never give out your password or attempt to log in to other peoples accounts..</p>
	</div>
	<div id="container">
                <form action="login_process.php" method="post">
                    <label for="loginmsg" style="color:hsla(0,100%,50%,0.5); font-family:"Helvetica Neue",Helvetica,sans-serif;"><?php  echo @$_GET['msg'];?></label>
                    <center><label for="user">Username:</label></center>
                    <input type="text" id="user" name="user">
                    <center><label for="pass">Password:</label></center>
                    <input type="password" id="password" name="password">
                    <div id="lower">
                        <center><input type="submit" value="Login"></center>
                    </div>
                </form>
            </div>
	 <div id="copyright" >Your copyright slogan here || <?php echo SVRNAME; ?> || Owner: <?php echo OWNER; ?> || <?php echo YEAR; ?></div>
	 
	 
 </body>
 