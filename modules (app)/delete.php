<?php 

$connection = require_once(__DIR__ . './database.php');

if (!isset($_GET['id'])) {
	echo "Nomor id tidak ditemukan";
	exit();
}
 

 $id = $_GET['id'];
 $query = mysqli_query($connection, "DELET FROM films WHERE id = $id");

 header('Location: ./../public/index.php');
 ?>
