<form action="./../modules/store.php" method="post">
	<div>
		<label style="width: 120px; display: inline-block; margin-bottom: 12px;">Judul Film</label>
		<input type="text" name="judul">
	</div>
	<div>
		<label style="width: 120px; display: inline-block; margin-bottom: 12px;">Penulis</label>
		<input type="text" name="penulis">
	</div>
	<div>
		<label style="width: 120px; display: inline-block; margin-bottom: 12px" >Genre</label>
		<textarea name="genre"></textarea>
	</div>
	<div>
		<label style="width: 120px; display: inline-block; margin-bottom: 12px">Tanggal Rilis</label>
		<input type="date" name="rilis">
	</div>
	<div>
		<button type="submit">Simpan</button>
	</div>
</form>