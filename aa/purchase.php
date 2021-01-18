<?php
include("db_conn.php");
error_reporting(0);
?>
<html>
<head>
<title>purchase page</title>
</head>
<body style = "background: url(k.jpg); background-size:100% 100%;">
<form method="GET" action="">

<center>
 <font color="white"><h3>ENTER PURCHASE DETAILS!!!! TO PURCHASE!!!!!</h3></font>
<br>
	<font color="black">PURCHASE ID :</font>      <input type="text" name="pid" value""/><br/><br/>
	<font color="black">USER ID :   </font>      <input type="text" name="uid" value""/><br/><br/>
	<font color="black">PRODUCT NAME : </font>   <input type="text" name="pname" value""/><br/><br/>
	<font color="black">PRICE :    </font>       <input type="text" name="price" value""/><br/><br/>
	

<br>    <input type="submit" value="SUBMIT_QUERY" name="submit"/>
<br><br>

</form>
<?php
	if($_GET['submit'])
	{

		$pid = $_GET['pid'];
		$uid = $_GET['uid'];
		$pname = $_GET['pname'];
		$price = $_GET['price'];
		



		if($pid!="" && $uid!="" && $pname!="" && $price!="")
		{
			$query = "INSERT INTO PURCHASE VALUES('$pid','$uid','$pname','$price')";
			$data = mysqli_query($conn, $query);


			if($data)
			{
 				echo "item purchased successfully!!!!";
			}
		}
		else
		{
			echo "all fields are required!!!!!";
		}


	}
	?>
<br>
<a href="index.html">home</a>
</body>
</html>