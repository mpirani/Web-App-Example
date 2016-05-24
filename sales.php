<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sales</title>

    <div><img src= "salespage.png"></div>
    <style type = "text/css">
        body {
            background-color: #FFA07A;
            text-align: center;
        }
        #tab {
            margin: 50px 430px;
        }
        table {
            border: 5px solid white;
            background-color: white;
            font-size: 20pt;
            font-family: "Verdana", Times, sans-serif;
        }

        th {
            border-bottom: 5px solid #000;
        }

        td {
            border-bottom: 2px solid #666;
        }
        h1 {
            text-align: center;
        }
        #lab {
            margin-left: 30px;
        }
        #home {
            margin-left: 85px;
        }
    </style>
</head>
<body>

<?php

include('salesconnect.php');

$sqlget = "SELECT name,price,description,location FROM sales";
$sqldata = mysqli_query($dbcon, $sqlget) or die('error');

echo "<div><img src= currentsales.png></div>";
echo "<div id= tab>";
echo "<table>";
echo "<tr><th>Name</th><th>Price</th><th>Description</th><th>Location</th></tr>";

while($row = mysqli_fetch_array($sqldata, MYSQLI_ASSOC)) {
    echo "<tr><td>";
    echo $row['name'];
    echo "</td><td>";
    echo $row['price'];
    echo "</td><td>";
    echo $row['description'];
    echo "</td><td>";
    echo $row['location'];
    echo "</td><td>";
}
echo "</table>";
echo "</div>";
?>


<div id=lab><a href = "salesinsert.php"><img src="addsale2.png"></a></div>
<div id= search><a href = "salessearch.php"><img src="searchsaletab.png"></a></div>
<div id= home><a href = "home.html"><img src="homelink.png"></a></div>

</body>
</html>
