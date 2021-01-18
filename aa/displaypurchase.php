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
<th colspan="2">OPERATIONS</th>
</tr>
<?php
	while($result = mysqli_fetch_assoc($data))
	{
		echo "<tr>
			<td> ".$result['pid']." </td>
			<td> ".$result['uid']." </td>
			<td> ".$result['pname']." </td>
			<td> ".$result['price']." </td>
			<td><a href='updatepurchase.php?pid=$result[pid]&uid=$result[uid]&pname=$result[pname]&price=$result[price]' onclick='return checkdelete()'>edit</a></td>
			<td><a href='deletepurchase.php?uid=$result[userid]' onclick='return checkdelete()'>delete</a></td>
			</tr>";
	}

}
?>
</table>
<script>
function checkdelete()
{
return confirm('Are you sure want to do this operation!!!!!');
}
</script>
<a href="adminhome.php">home</a>
</body>
</html>
			