<style>
td
{
padding:10px;
}
</style>
<?php
	include("db_conn.php");
	error_reporting(0);
	$query = "SELECT * FROM USERS";
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
      <font style="bold" color="red">:REGISTERED USER DETAILS:</font>
<table border="5" bgcolor="white" cellpadding="5" cellspacing="5">
<tr>
<th>USER ID</th>
<th>USERNAME</th>
<th>PASSWORD</th>
<th>NAME</th>
<th colspan="2">OPERATIONS</th>
</tr>
<?php
	while($result = mysqli_fetch_assoc($data))
	{
		echo "<tr>
			<td> ".$result['id']." </td>
			<td> ".$result['user_name']." </td>
			<td> ".$result['password']." </td>
			<td> ".$result['name']." </td>
			<td><a href='updateuser.php?id=$result[id]&user_name=$result[user_name]&password=$result[password]&name=$result[name]' onclick='return checkdelete()'>edit</a></td>
			<td><a href='deleteuser.php?uid=$result[id]' onclick='return checkdelete()'>delete</a></td>
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
			