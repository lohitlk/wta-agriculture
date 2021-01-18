<?php
include("db_conn.php");
?>
<html>
<head>
<title>admin login page</title>
</head>
<body style = "background: url(ad.jpg); background-size:100% 100%;">
<form action="" method="POST">
<center>

<div id="l1">
<br>
<br>
<br>
<br>
<h2><font color="red">-: ADMIN LOGIN PAGE :-</font></h2>
<br>
<br>
<br>
<font color="white">ADMIN NAME : </font><input type="text" name="name" placeholder="admin name" value="">
<br>
<br>
  <font color="white">PASSWORD : </font><input type="text" name="password" placeholder="password" value="">
<br><br/>
<input type="submit" name="submit" value=" ADMIN LOGIN">
</div>
<br>
<br>
<br>
<br>
<br>
<br>

<a href="index.html">home</a>
<br>
<br>

</center>
</form>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
	$admin = $_POST['name'];
	$pwd = $_POST['password'];
	$query = "SELECT * FROM ADMIN WHERE USERNAME='$admin' AND PASSWORD='$pwd'";
	$data = mysqli_query($conn,$query);
	$total = mysqli_num_rows($data);
	if($total==1)
	{
	header('location:adminhome.php');
	}
	else
	{
	echo "login failed";
	}

}
?>