<html>
<head>
	<title> Sales Search </title>
	<div><img src= "searchsales.png" width="900"></div>
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


<form method="post" action="salessearch.php">
<input type="hidden" name="submitted" value="true" />

<label> Search Category:

<select name="category">
	<option value="name">Name</option>
	<option value="price">Price</option>
	<option value="description">Description</option>
	<option value="location">Location</option>
</select>
</label>


<label>Search Criteria: <input type="text" name="criteria" /></label>

<input type="submit" />
</form>

<?php

if(isset($_POST['submitted'])) {

//connect to database
	include('salessearchconnect.php');

	$category = $_POST['category'];
	$criteria = $_POST['criteria'];
	$query = "SELECT * FROM sales WHERE $category = '$criteria'";
	$sqldata = mysqli_query($dbcon, $query) or die('error');

	echo "<div id= tab>";
	echo "<table>";
	echo "<tr> <th>Name</th> <th>Price</th> <th>Description</th> <th>Location</th> </tr>";

	while ($row = mysqli_fetch_array($sqldata, MYSQLI_ASSOC)) {
		echo "<tr><td>";
		echo $row['name'];
		echo "</td><td>";
		echo $row['price'];
		echo "</td><td>";
		echo $row['description'];
		echo "</td></tr>";
		echo $row['location'];
		echo "</td></tr>";
	}

	echo "</table>";
	echo "</div>";

}//end of if statement


?>


</body>

<div id= friend><a href = "sales.php"><img src="backsearchsales.png"></a></div>
</html>