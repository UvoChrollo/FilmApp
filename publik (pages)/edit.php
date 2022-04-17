<?php

if (!isset($_GET['id'])) {
	echo "Nomor id tidak ditemukan";
	exit();
}

$film = require_once('./../mmodules/detail.php');	
?>

<form action="./../modules/update.php" method="post">
	<input type="hidden" name="id" value="<?php echo $film['id'] ?>">
	<div>
		<label style="width: 120px; display: inline-block; margin-bottom: 12px;">Judul Film</label>
		<input type="text" name="judul" value="<?php echo $film['judul'] ?>">
	</div>
	<div>
		<label style="width: 120px; display: inline-block; margin-bottom: 12px;">Penulis</label>
		<input type="text" name="penulis" value="<?php echo $film['penulis'] ?>">
	</div>
	<div>
		<label style="width: 120px; display: inline-block; margin-bottom: 12px" >Genre</label>
		<textarea name="genre"><?php echo $film['genre'] ?></textarea>
	</div>
	<div>
		<label style="width: 120px; display: inline-block; margin-bottom 12px">Tanggal Rilis</label>
		<input type="date" name="rilis" value="<?php echo $film['rilis'] ?>">
	</div>
	<div>
		<button type="submit">Perbaharui</button>
	</div>
</form>