<?php

$conn = mysqli_connect('db', 'user', 'test', 'myDb', '3306');
if ($conn == false) {
	die("ERROR: Could not connect to MySQL database");
}

echo "Successfully connected to MySQL database";

//$result = mysqli_query($conn, "select * from pet;");
//echo mysqli_num_rows($result);
//new mysqli();

//phpinfo();

/*
$counter = 0;
while ($counter < 5) {
	echo "String\n";
	$counter++;
}
*/

?>
