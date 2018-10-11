<?php
	include 'koneksi.php';
	session_start();
	$user = $_SESSION['user'];
	$pass = $_SESSION['pass'];

	$sql = "SELECT * FROM datamahasiswa";
	$query = mysqli_query($conn, $sql);

	$mhs = mysqli_fetch_assoc($query);

	$nama = $mhs['nama'];
	$nim = $mhs['nim'];

	$sql = "SELECT * FROM posting";
	$query = mysqli_query($conn, $sql);

	$post = mysqli_fetch_assoc($query);

	$judul = $post['judul'];
	$posting = $post['isi'];
	$gambar = $post['gambar'];

?>
<form method="POST">
	<table>
		<?php for ($i=0; $i < count($post)-1; $i++) { ?>
			# code...
			<tr>
				<td>Pemilik</td>
				<td>:</td>
				<td><?php echo $mhs['nama']; ?></td>
			</tr>
			<tr>
				<td>Judul</td>
				<td>:</td>
				<td><?php echo $post['judul']; ?></td>
			</tr>
		<?php } ?>
	</table>
</form>