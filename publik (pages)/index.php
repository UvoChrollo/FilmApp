<?php $films = require_once('./../modules/list_film.php'); ?>

<table border="1" style="width: 100%; border-collapse: collapse;">
	<thead>
		<tr>
			<th>No</th>
			<th>Judul Film</th>
			<th>Penulis</th>
			<th>Genre</th>
			<th>Tanggal Rilis</th>
			<th></th>
		</tr>
	</thead>
	<tbody>

		<?php 
		$nomor = 1;
		foreach ($films as $film):  ?>
			<tr>
				<td><?php echo $nomor++; ?></td>
				<td><?php echo $film['judul'] ?></td>
				<td><?php echo $film['penulis'] ?></td>
				<td><?php echo $film['genre'] ?></td>
				<td><?php echo date("d / m / Y", strtotime($film['rilis'])) ?></td>
				<td>
					<a href="./edit.php?id=<?php echo $film['id']  ?>">Edit</a>
					<a href="./../modules/delete.php?id=<?php echo $film['id'] ?>">Hapus</a>
				</td>
			</tr>
		<?php endforeach ?>
	</tbody>
</table>