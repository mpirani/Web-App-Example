<?php 



if(isset($_POST['submitted'])) {
	include('salesconnect.php');
	$n = $_POST['name'];
	$p = $_POST['price'];
	$des = $_POST['description'];
	$loc = $_POST['location'];
	$sqlinsert = "INSERT INTO sales (name, price, description, location) VALUES('$n','$p', '$des', '$loc')";

	if(!mysqli_query($dbcon, $sqlinsert)) {
		die('error did not insert');
	}
}
?>

<html>
<head>
	<meta charset="UTF-8">
    <title>Post Sales Page</title>
    <link rel="stylesheet" type="text/css" href="register.css">
	<link rel="shortcut icon" href="logo.png">
	<div><img src= "addsaletitle.png"></div>
	<style type = "text/css">
		label {
			display: inline-block;
    		float: left;
    		clear: left;
    		width: 250px;
    		text-align: right;
    		margin-left: 335px;
		}
		input {
  			display: inline-block;
  			float: left;
		}

		#but {
			margin-left: 650px;
		}
	</style>
</head>

<body>
    <!-- <form action="index.html">
        <div>UserName: <input type="text"></div>
        <div>Password: <input type="text"></div>
        <div>Email: <input type="text"></div>
        <input type="submit">
    </form> -->
<br />

<form method="post" action="salesinsert.php">
<input type = "hidden" name="submitted" value="true" />
<div>
<fieldset>
	<legend align="center"> Post Your Sale Below </legend>
	<label>Name:</label> <input type="text" name="name" />
	<br />
	<label>Price:</label> <input type="text" name="price" />
	<br />
	<label>Description:</label> <input type="text" name="description" />
	<br />
	<label>Location:</label> <input type="text" name="location" />
</fieldset>
</div>
<br />

<div id= but>
<input type="submit" value="Post" />
</div>
</form>

<br />
<a href = "sales.php"><img src="afterpost.png"></a>
</body>

</html>