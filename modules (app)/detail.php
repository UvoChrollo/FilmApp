<?php 

$connection = require_once(__DIR__ . './database.php');

$id = $_GET['id'];
$query = mysqli_query($connection, "SELECT * FROM films WHERE id = $id");

if (!$query) return [];

return mysqli_fetch_assoc($query) ?? [] ;

 ?>
