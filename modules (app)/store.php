<?php 

$connection = require_once('./database.php');

$judul    = $_POST['judul'];
$penulis  = $_POST['penulis'];
$genre    = $_POST['genre'];
$rilis    = date("Y-m-d", strtotime($_POST['rilis']));

$query = mysqli_query(
	$connection,
	"INSERT INTO film (judul, penulis, genre, rilis) VALUES ('$judul', '$penulis', '$genre', '$rilis')"
);

header('Location: ./../public/index.php');

 ?>