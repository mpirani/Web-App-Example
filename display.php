<html>
<head>
<title> Display data </title>
<style type = "text/css">



</style>
</head>
<body>

<h1> Display Data from DB</h1>

<?php

include('salesconnect.php');

$sqlget = "SELECT name FROM sales";
$sqldata = mysqli_query($dbcon, $sqlget) or die('error');

echo "<table>";
echo "<tr><th>Name</th></tr>";

while($row = mysqli_fetch_array($sqldata, MYSQLI_ASSOC)) {
	echo "<tr><td>";
	echo $row['name'];
	echo "</td><td>";

}
echo "</table>";
?>

</body>
</html>




