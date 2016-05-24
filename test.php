<html>
	<head>
	<title>Write to a text file</title>
	</head>
	<body>

	<h1>Adding a text block to a text file:</h1>
	<form action="test.php" method='post1'>
	<textarea name='textblock'></textarea>
	<input type='submit' value='Add text'>
	</form>


	<h1>Enter the item:</h1>
	<form action="test.php" method='post2'>
	<textarea name='textblock1'></textarea>
	<input type='submit' value='Add text'>
	</form>

	<h1>Enter a price:</h1>
	<form action="test.php" method='post3'>
	<textarea name='textblock2'></textarea>
	<input type='submit' value='Add text'>
	</form>

	<?php

	// Open the text file
	$f = fopen("textfile.txt", "w");

	// Write text
	fwrite($f, $_POST["textblock"]);
	fwrite($f, $_POST["textblock1"]);
	fwrite($f, $_POST["textblock2"]);

	// Close the text file
	fclose($f);

	// Open file for reading, and read the line
	$f = fopen("textfile.txt", "c+");

	// Read text
	echo fgets($f); 
	fclose($f);

	?>
	
	</body>
</html>