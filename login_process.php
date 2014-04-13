<link rel="stylesheet" href="style.css">
<link rel="icon" href="images/favicon.ico" type="image/x-icon"/>
<?php 
include("settings.php");


		$con = mysql_connect(SQL_SERVER, SQL_USERNAME, SQL_PASSWORD);
		  mysql_select_db(SQL_DB, $con);
		  if(isset($_POST['password']) && isset($_POST['user']))
		  {
			  $pass = hash( 'whirlpool', htmlentities(mysql_real_escape_string($_POST['password'])));
		  	  $user = htmlentities(mysql_real_escape_string($_POST['user']));
		  }
		  else
		  {
		  	  $user = htmlentities(mysql_real_escape_string(getuser()));
		  }
		  if(isset($_POST['password']) && isset($_POST['user'])) 
		  {
			  $result = mysql_query("SELECT `admin` FROM `users` WHERE `name` = '$user' AND `pass` = '$pass'");
			  if(mysql_num_rows($result) !=0)
			  {
				   while ($row2 = mysql_fetch_array($result, MYSQL_ASSOC)) $alvl = $row2['admin'];
			  }
		  }
		  if(!isset($_POST['password']) && !isset($_POST['user'])) 
		  {
			  $user = getuser();
			  $result = mysql_query("SELECT `name` FROM `users` WHERE `name` = '$user'");
		  }
		  if(!mysql_num_rows($result)) echo "<center><strong>Incorrect Username Or Password!</strong></br>Hit back to be redirected to the home page</br>
		  
		  <form action='login.php' method='post'>
		  <input type='submit' value='Go Back'></center>";

		  else
		  {
			  $result = mysql_query("SELECT * FROM `users` WHERE `name` = '$user' LIMIT 1");
			  while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) 
			  {
				  $user = $row['name'];
				  $id = $row['id'];
				  $health = $row['health'];
				  $money = $row['money'];
				  $X = $row['X'];
				  $Y = $row['Y'];
				  $Z = $row['Z'];
				  $A = $row['A'];
				  $gun1 = $row['weaponslot1'];
				  $gun2 = $row['weaponslot2'];
				  $gun3 = $row['weaponslot3'];
				  $gun4 = $row['weaponslot4'];
				  $gun5 = $row['weaponslot5'];
				  $hours = $row['hours'];
				  $mins = $row['mins'];
				  $seconds = $row['seconds'];
				  $gender = $row['gender'];
				  $email = $row['email'];
				  $pot = $row['pot'];
				  $bmoney = $row['bankmoney'];
				  $age = $row['age'];
				  //$vw = $row['vw'];
				  $vw = ((($row['interior']>= 1) ? 'Inside' : 'Default'));
			      $interior = ((($row['interior']>= 1) ? 'Inside' : 'No'));
				  $gunlic = ((($row['gunlic']>= 1) ? 'Acquired' : 'No'));
			      $helper = ((($row['helper']>= 1) ? 'Granted' : 'No'));
				  $admin = ((($row['admin']>= 1) ? 'Yes' : 'No'));
				  $adminlvl = $row['admin'];
				  $helperlvl = $row['helper'];
				  $skin = $row['skin'];
				  $_SESSION['user'] = 'user';

				  
			  }
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
		<h2>Welcome To The <?php echo SVRNAME; ?>'s UCP, <?php echo "$user"; ?></h2>
		</div>
		
		<div id="infodiv" >
			<?php echo "</br><img src='/images/skins/$skin.png' height='280' width='100'/><font color='#192b40'><p><b>Skin ID: $skin</font></p></b>";?>
		</div>
		
		<div id="maindiv" >
			<center><p><b><u>General Information:</u></b></p></center>
		<p>
			<strong>Name: </strong><font color="#192b40"><?php echo "$user" ?></font></br>
			<strong>Player ID: </strong><font color="#192b40"><?php echo "#$id" ?></font></br>
			<strong>E-Mail: <font color="#192b40"></strong><?php echo "$email" ?></font></br>
			<strong>Last Known Location: <font color="#192b40"></strong><?php echo "$X, $Y, $Z, $A" ?></font></br>
			<strong>Online Time: <font color="#192b40"></strong><?php echo "$hours Hours $mins Minutes and $seconds Seconds" ?></font></br>
			<strong>Last Known HP: <font color="#192b40"></strong><?php echo "$health%" ?></font></br>
		</p>
			<center><p><b><u>Extra Information:</u></b></p></center>
		<p>
			<strong>On Hand Money: </strong><font color="#192b40"><?php echo "$$money" ?></font></br>
			<strong>Banked Money: </strong><font color="#192b40"><?php echo "$$bmoney" ?></font></br>
			<strong>Interior/VW: </strong><font color="#192b40"><?php echo "$interior, $vw" ?></font></br>
			<strong>Gender: </strong><font color="#192b40"><?php echo "$gender" ?></font></br>
			<strong>Age: </strong><font color="#192b40"><?php echo "$age" ?></font></br>
		</p>
		
		<div id="rightdiv" >
		<p>
			<strong>Admin: </strong><font color="#192b40"><?php echo "$admin ($adminlvl)" ?></font></br>
			<strong>Helper: </strong><font color="#192b40"><?php echo "$helper ($helperlvl)" ?></font></br>
			<strong>Gun License: </strong><font color="#192b40"><?php echo "$gunlic" ?></font></br>
			<strong>Pot: </strong><font color="#192b40"><?php echo "$pot" ?> Grams</font></br>
		</p>
		
		<div id="wepdiv" >
		<?php 
			 echo "</br><img src='/images/weapons/$gun1.png' height='50' width='50'/><font color='#192b40'><p><b>Gun ID: $gun1</font></p></b>";
			 echo "<img src='/images/weapons/$gun2.png' height='50' width='50'/><font color='#192b40'><p><b>Gun ID: $gun2</font></p></b>";
			 echo "<img src='/images/weapons/$gun3.png' height='50' width='50'/><font color='#192b40'><p><b>Gun ID: $gun3</font></p></b>";
		 ?>
		</div>
	</div>
</div>
	
	 <div id="copyright" >Your copyright slogan here || <?php echo SVRNAME; ?> || Owner: <?php echo OWNER; ?> || <?php echo YEAR; ?></div>
	 
	 
 </body>
 
		<?php		
		}	
	mysql_close($con);		 
?>