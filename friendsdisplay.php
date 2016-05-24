<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Friends</title>

    <div><img src= "friendspage.png"></div>
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
    #home {
        margin-left: 75px;
    }
    #friend {
        margin-left: 70px;
    }
    </style>
</head>
<body>

<?php

include('friendsconnect.php');

$sqlget = "SELECT firstname,lastname,username FROM friends";
$sqldata = mysqli_query($dbcon, $sqlget) or die('error');

echo "<div><img src= currentfriends.png></div>";
echo "<div id= tab>";
echo "<table>";
echo "<tr><th>First Name</th><th>Last Name</th><th>User Name</th></tr>";

while($row = mysqli_fetch_array($sqldata, MYSQLI_ASSOC)) {
    echo "<tr><td>";
    echo $row['firstname'];
    echo "</td><td>";
    echo $row['lastname'];
    echo "</td><td>";
    echo $row['username'];
    echo "</td><td>";
}
echo "</table>";
echo "</div>";
?>

<div id= friend><a href = "friendsinsert.php"><img src="addfriend.png"></a></div>
<div id= search><a href = "search1.php"><img src="searchtab.png"></a></div>

<div id= home><a href = "home.html"><img src="homelink.png"></a></div>

</body>
</html>
