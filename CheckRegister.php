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
$regusername=$_POST['regusername']; 
$regpassword=$_POST['regpassword'];

// To protect MySQL injection (more detail about MySQL injection)
$regusername = stripslashes($regusername);
$regpassword = stripslashes($regpassword);

	$sql="SELECT * FROM $tbl_name WHERE username='$regusername'";
	$result=pg_query($sql);

	// Mysql_num_row is counting table row
	$count=pg_num_rows($result);

	// If result matched $myusername and $mypassword, table row must be 1 row
	if($count==1){

		// Register $myusername, $mypassword and redirect to file "login_success.php"
		echo "Username already exist. Please try another one. <br>"; 
	}
	else {
		//$myusername = pg_real_escape_string($myusername);
		//$mypassword = pg_real_escape_string($mypassword);
		$sql="INSERT INTO $tbl_name VALUES (3,'$regusername','$regpassword',0,'NULL',0,0);";
		//$sql="SELECT * FROM $tbl_name WHERE username='$myusername' and password='$mypassword'";
		$result=pg_query($sql);

		// Mysql_num_row is counting table row
		$count=pg_num_rows($result);
		header("location:RegisterSuccess.php");
	}

?>

<head>
	<script type="text/javascript">
		function goRegister()
		{
			window.location.href='Register.php';
		}
	</script>

</head>

<input type="button" name="Back" value="Back" onclick="goRegister()"></td>