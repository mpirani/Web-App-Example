<?php 

if(isset($_POST['submitted'])) {
	include('connect.php');

	$user = $_POST['username'];
	$pword = $_POST['pass'];
	$mail = $_POST['email'];
	$sqlinsert = "INSERT INTO registration (pass, username, email) VALUES('$pword','$user', '$mail')";

	if(!mysqli_query($dbcon, $sqlinsert)) {
		die('error did not insert');
	}//end of nest
}
?>

<html>
<head>
	<meta charset="UTF-8">
    <title>Registration Page</title>
    <link rel="stylesheet" type="text/css" href="register.css">
	<link rel="shortcut icon" href="logo.png">
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

<div><img src="logo.png" width="200" height="200"></div>
    <!-- <form action="index.html">
        <div>UserName: <input type="text"></div>
        <div>Password: <input type="text"></div>
        <div>Email: <input type="text"></div>
        <input type="submit">
    </form> -->
<br />



<form method="post" action="insert.php">
<input type = "hidden" name="submitted" value="true" />
<div>
<fieldset>
	<legend align="center"> Register Below </legend>
	<label>Username: </label><input type="text" name="username" />
	<br />
	<label>Password:</label> <input type="password" name="pass" />
	<br />
	<label>Email: </label><input type="text" name="email" />
</fieldset>
</div>
<br />
<div id= but>
<input type="submit" value="Register" />
</div>
</form>

<br />
<div><a href = "index.html"><img src="afterregister.png"></a></div>
</body>
</html>
