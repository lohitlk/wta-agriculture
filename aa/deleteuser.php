<?php
include("db_conn.php");
?>
<html>
<head>
</head>
<body style = "background: url(l.jpg); background-size:100% 100%;">
<center>
<form method="GET" action="">
ENTER ID TO DELETE : <input type="text" name="uid" value=""/>
<input type="submit" name="submit" value="SUBMIT QUERY"/>
</form>
<center>
<?php
	if($_GET['submit'])
	{
		$id = $_GET['uid'];
		
		$query = "DELETE FROM USERS WHERE ID = '$id'";
		$data = mysqli_query($conn, $query);
		if($data)
		{
 			echo " record deleted successfully " ;
			
		}
		else
		{
		echo "enter correct id";
		}

	}
?>
<br><br><br>
<a href="displayuser.php">CHECK DATABASE DATA!!!!</a>
</center>
</body>
</html>
