<style>
td
{
padding:10px;
}
</style>
<?php
	include("db_conn.php");
	error_reporting(0);
	$query = "SELECT * FROM PURCHASE";
	$data = mysqli_query($conn, $query);
	$total = mysqli_num_rows($data);
	if($total != 0)
{
?>
<html>
<head>
</head>
<body style = "background: url(l.jpg); background-size:100% 100%;">	
	
<center>
      <font style="bold" color="red">:PURCHASE DETAILS:</font>
<table border="5" bgcolor="white" cellpadding="5" cellspacing="5">
<tr>
<th>PURCHASE ID</th>
<th>USER ID</th>
<th>PRODUCT NAME</th>
<th>PRICE</th>
</tr>
<?php
	while($result = mysqli_fetch_assoc($data))
	{
		echo "<tr>
			<td> ".$result['pid']." </td>
			<td> ".$result['uid']." </td>
			<td> ".$result['pname']." </td>
			<td> ".$result['price']." </td>
			</tr>";
	}

}
?>
</table>

<a href="index.html">home</a>
</body>
</html>
			