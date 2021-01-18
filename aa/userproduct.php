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
      <font style="bold" color="white">:PRODUCTS AVAILABLE:</font>                    
<br><a href="index.html">home</a>
<br><br>
<table border="5" bgcolor="white" cellpadding="5" cellspacing="5" width="950">	
<tr>
<th>PRODUCT IMAGE</th>
<th>PRODUCT ID</th>
<th>PRODUCT NAME</th>
<th>PRICE</th>
<th colspan="2">ACTION</th>
</tr>
<?php
	while($result = mysqli_fetch_assoc($data))
	{
		echo "<tr>
			<td><a href='$result[pimage]'><img src='".$result['pimage']."' height='300' width='400'/></a></td>
			<td><font color='red'> ".$result['pid']." </font></td>
			<td><font color='red'> ".$result['pname']." </font></td>
			<td><font color='red'> ".$result['price']." </font></td>
			<td><a href='purchase.php' onclick='return checkdelete()'>BUY NOW!!!!</a></td>
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
<a href="index.html">home</a>
</body>
</html>
			