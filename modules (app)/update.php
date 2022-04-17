<?php 

$connection = require_once('./database.php');

$id     = $_POST['id'];
$judul  = $_POST['judul'];
$penulis= $_POST['penulis'];
$genre  = $_POST['genre'];
$rilis  = date("Y-m-d", strtotime($_POST['rilis']));

$query = mysqli_query(
	$connection,
	"UPDATE films SET judul = '$judul', penulis = '$penulis', genre = '$genre', rilis = '$rilis', WHERE id = $id"
);

header('Location: ./../public/index.php');
 ?>
