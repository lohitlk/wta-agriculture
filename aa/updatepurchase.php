<?php
include("db_conn.php");
error_reporting(0);
$_GET['pid'];
$_GET['uid'];
$_GET['pname'];
$_GET['price'];

?>
<html>
<head>
<title>update purchase page</title>
</head>
<body style = "background: url(l.jpg); background-size:100% 100%;">
<form method="GET" action="">

<center>
<br>
<br>
<br>
<br>
 ENTER DETAILS TO UPDATE!!!!
<br>
<br>
<br>
<br>
	PURCHASE ID : <input type="text" name="pid" value"<?php echo $_GET['pid']; ?>"/><br/><br/>
	USER ID     : <input type="text" name="uid" value"<?php echo $_GET['uid']; ?>"/><br/><br/>
	PRODUCT NAME :<input type="text" name="pname" value"<?php echo $_GET['pname']; ?>"/><br/><br/>
	PRICE        :<input type="text" name="price" value"<?php echo $_GET['price']; ?>"/><br/><br/>
	

<br>    <input type="submit" value="UPDATE QUERY" name="submit"/>
<br><br>

</form>
<?php
	if($_GET['submit'])
	{

		$pid = $_GET['pid'];
		$uid = $_GET['uid'];
		$pname = $_GET['pname'];
		$price = $_GET['price'];
		



			$query = "UPDATE PURCHASE SET PID='$pid' , UID='$uid' , PNAME='$pname' , PRICE='$price' WHERE PID='$pid'";
			$data = mysqli_query($conn, $query);


			if($data)
			{
 				echo "record updated successfully!!!!<a href='displaypurchase.php'>check updated list</a>";
			}
			else
			{
			 echo "record not updated!!!!!";
			}
		


	}
?>

<br>
<br>
<br>


<a href="index.html">HOME</a>
</body>
</html>