<?php
include("db_conn.php");
error_reporting(0);
?>
<html>
<head>
<title>add product</title>
</head>
<body style = "background: url(g.jpg); background-size:100% 100%;">
<form action="" method="post" enctype="multipart/form-data">

<center>
<br>
<font color="red"><h3>ENTER PRODUCTS DETAILS!!!!</h3></font>
<br>
PRODUCT IMAGE : <input type="file" name="uploadfile" value""/><br><br>
PRODUCT ID : <input type="text" name="pid" value""/><br><br>
PRODUCT NAME : <input type="text" name="pname" value""/><br><br>
PRICE : <input type="text" name="price" value""/><br><br>


<br><input type="submit" value="SUBMIT" name="submit"/>
<br><br>

</form>
<?php
	if($_POST['submit'])
	{

		$filename = $_FILES["uploadfile"]["name"];
		$tempname = $_FILES["uploadfile"]["tmp_name"];
		$folder = "images/".$filename;
		move_uploaded_file($tempname,$folder);
		$pid = $_POST['pid'];
		$pname = $_POST['pname'];
		$price = $_POST['price'];

		


		if($filename!="" && $pid!="" && $pname!="" && $price!="")
		{
			$query = "INSERT INTO PRODUCT VALUES('$folder','$pid','$pname','$price')";
			$data = mysqli_query($conn, $query);


			if($data)
			{
 				echo "data inserted into database successfully!!!!";
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