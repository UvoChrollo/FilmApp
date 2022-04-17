<?php 

$connection = require_once(__DIR__ . './database.php');

$result = [];
$query = mysqli_query($connection, "SELECT * FROM films");

if (!$query) return $result;

while ($fetch = mysqli_fetch_assoc($query)) {
	$result[] = $fetch;
}

return $result;
 ?>

