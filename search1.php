<html>
<head>
	<title> Friend Search </title>
	<div><img src= "searchtitle.png" width="900"></div>
	<style type="text/css">
	body {
		background-color: #FFA07A;
		text-align: center;
	}
	#tab {
        margin: 50px 430px;
    }
	table {
		background-color: white;
	}

	th {
		width: 150px;
		text-align: left;
	}

	</style>
</head>
<body>


<form method="post" action="search1.php">
<input type="hidden" name="submitted" value="true" />

<label> Search Category:

<select name="category">
	<option value="lastname">Last Name</option>
	<option value="firstname">First Name</option>
	<option value="username">User Name</option>
</select>
</label>


<label>Search Criteria: <input type="text" name="criteria" /></label>

<input type="submit" />
</form>

<?php

if(isset($_POST['submitted'])) {

//connect to database
	include('searchconnect.php');

	$category = $_POST['category'];
	$criteria = $_POST['criteria'];
	$query = "SELECT * FROM friends WHERE $category = '$criteria'";
	$sqldata = mysqli_query($dbcon, $query) or die('error');

	echo "<div id= tab>";
	echo "<table>";
	echo "<tr> <th>Last Name</th> <th>First Name</th> <th>UserName</th></tr>";

	while ($row = mysqli_fetch_array($sqldata, MYSQLI_ASSOC)) {
		echo "<tr><td>";
		echo $row['lastname'];
		echo "</td><td>";
		echo $row['firstname'];
		echo "</td><td>";
		echo $row['username'];
		echo "</td></tr>";
	}

	echo "</table>";
	echo "</div>";

}//end of if statement


?>


</body>

<div id= friend><a href = "friendsdisplay.php"><img src="backsearch.png"></a></div>
</html>