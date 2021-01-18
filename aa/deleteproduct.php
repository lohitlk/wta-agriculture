<?php
include("db_conn.php");
?>
<html>
<head>
</head>
<body style = "background: url(l.jpg); background-size:100% 100%;">
<center>
<form method="GET" action="">
ENTER ID TO DELETE : <input type="text" name="pid" value=""/>
<input type="submit" name="submit" value="SUBMIT QUERY"/>
</form>
<center>
<?php
	if($_GET['submit'])
	{
		$pid = $_GET['pid'];
		
		$query = "DELETE FROM PRODUCT WHERE PID = '$pid'";
		$data = mysqli_query($conn, $query);
		if($data)
		{
 			echo "record deleted successfully";
		}
		else
		{
		echo "enter correct id";
		}

	}
?>
<br><br><br>
<a href="displayproduct.php">CHECK DATABASE DATA!!!!</a>
</center>
</body>
</html>
