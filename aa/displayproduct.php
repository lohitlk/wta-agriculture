<style>
td
{
padding:10px;
}
</style>
<?php
	include("db_conn.php");
	error_reporting(0);
	$query = "SELECT * FROM PRODUCT";
	$data = mysqli_query($conn, $query);
	$total = mysqli_num_rows($data);
	if($total != 0)
{
?>
<html>
<head>
</head>
<body style = "background: url(g.jpg); background-size:100% 100%;">	
<center>
<br>
      <font style="bold" color="white">:PRODUCTS LIST:</font><br>
<a href="adminhome.php">home</a>
<br><br>
<table border="5" bgcolor="white" cellpadding="5" cellspacing="5" width="1000">	
<tr>
<th>PRODUCT IMAGE</th>
<th>PRODUCT ID</th>
<th>PRODUCT NAME</th>
<th>PRICE</th>
<th colspan="2">OPERATIONS</th>
</tr>
<?php
	while($result = mysqli_fetch_assoc($data))
	{
		echo "<tr>
			<td><a href='$result[pimage]'><img src='".$result['pimage']."' height='300' width='450'/></a></td>
			<td> ".$result['pid']." </td>
			<td> ".$result['pname']." </td>
			<td> ".$result['price']." </td>
			<td><a href='deleteproduct.php?pid=$result[pid]' onclick='return checkdelete()'>delete</a></td>
			<td><a href='addproduct.php' onclick='return checkdelete()'>add</a></td>
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
			