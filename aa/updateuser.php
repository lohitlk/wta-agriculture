<?php
include("db_conn.php");
error_reporting(0);
$_GET['id'];
$_GET['user_name'];
$_GET['password'];
$_GET['name'];

?>
<html>
<head>
<title>update user</title>
</head>
<body style = "background: url(l.jpg); background-size:100% 100%;">
<form method="GET" action="">

<center>
ENTER DETAILS TO UPDATE!!!!!!!
<br>
USER ID <input type="text" name="id" value"<?php echo $_GET['id'];?>"/><br><br>
USERNAME <input type="text" name="user_name" value"<?php echo $_GET['user_name'];?>"/><br><br>
PASSWORD <input type="text" name="password" value"<?php echo $_GET['password'];?>"/><br><br>
NAME <input type="text" name="name" value"<?php echo $_GET['name'];?>"/><br><br>
<br><input type="submit" value="UPDATE QUERY" name="submit"/>
<br><br>

</form>
<?php
	if($_GET['submit'])
	{

		$uid = $_GET['id'];
		$uname = $_GET['user_name'];
		$password = $_GET['password'];
		$name = $_GET['name'];
		

		$query = "UPDATE USERS SET USER_NAME='$uname',PASSWORD='$password',NAME='$name' WHERE ID='$uid'";
			$data = mysqli_query($conn, $query);


			if($data)
			{
 				echo "record updated successfully!!!!<a href='displayuser.php'>check updated list</a>";
			}
		else
		{
			echo "record not updated!!!!!";
		}


	}
?>


<br><br><br>

<a href="home.php">HOME</a>
</body>
</html>