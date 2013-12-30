<?php

	$host="dbs.cs.hacettepe.edu.tr"; // Host name 
	$username="b20926888"; // Mysql username 
	$password="rebankyor"; // Mysql password 
	$db_name="b20926888"; // Database name 
	$tbl_name="kullanici"; // Table name 

	// Connect to server and select databse.
	$dbconn = pg_connect("host=dbs.cs.hacettepe.edu.tr dbname=b20926888 user=b20926888 password=rebankyor")
	    or die('Could not connect: ' . pg_last_error());

	// username and password sent from form 
	$myusername=$_POST['myusername']; 
	$mypassword=$_POST['mypassword']; 

	// To protect MySQL injection (more detail about MySQL injection)
	$myusername = stripslashes($myusername);
	$mypassword = stripslashes($mypassword);
	//$myusername = pg_real_escape_string($myusername);
	//$mypassword = pg_real_escape_string($mypassword);
	$mypassword = md5($mypassword);
	$sql="SELECT user_id FROM $tbl_name WHERE username='$myusername' and password='$mypassword'";
	$result=pg_query($sql);

	// Mysql_num_row is counting table row
	$count=pg_num_rows($result);
	$row=pg_fetch_row($result);

	// If result matched $myusername and $mypassword, table row must be 1 row
	if($count==1){

		session_start();

		// Register $myusername, $mypassword and redirect to file "login_success.php"
		$_SESSION['user']=$myusername;
		$_SESSION['password']=$mypassword;

		$sqlAdmin="SELECT user_id FROM kulladmin WHERE user_id=$row[0]";
		$resultAdmin=pg_query($sqlAdmin);
		$countAdmin=pg_num_rows($resultAdmin);
		$row2=pg_fetch_row($resultAdmin);
		if($countAdmin==1)
		{
			$_SESSION['admin']=$myusername;
		}

		header("location:LoginSuccess.php");
	}
	else {
		echo "Wrong Username or Password";
	}
?>