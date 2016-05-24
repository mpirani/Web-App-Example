<?php 



if(isset($_POST['submitted'])) {
	include('friendsconnect.php');
	$f = $_POST['firstname'];
	$l = $_POST['lastname'];
	$us = $_POST['username'];
	$sqlinsert = "INSERT INTO friends (firstname, lastname, username) VALUES('$f','$l','$us')";

	if(!mysqli_query($dbcon, $sqlinsert)) {
		die('error did not insert');
	}//end of nest
}
?>

<html>
<head>
	<meta charset="UTF-8">
    <title>Add a Friend</title>
    <link rel="stylesheet" type="text/css" href="register.css">
	<link rel="shortcut icon" href="logo.png">
	<div><img src= "addfriendtitle.png"></div>
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

<form method="post" action="friendsinsert.php">
<input type = "hidden" name="submitted" value="true" />
<div>
<fieldset>
	<legend align="center"> Add A New Friend </legend>
	<label>First Name: </label><input type="text" name="firstname" />
	<br />
	<label>Last Name:</label> <input type="text" name="lastname" />
	<br />
	<label>Username: </label><input type="text" name="username" />
</fieldset>
</div>
<br />

<div id= but>
<input type="submit" value="Add" />
</div>

</form>
<br />
<div><a href = "friendsdisplay.php"><img src="afteradd.png"></a></div>
</body>
</html>