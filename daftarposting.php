<?php 
	include 'koneksi.php';
	session_start();
	$user = $_SESSION['user'];
	$pass = $_SESSION['pass'];

	$sql = "SELECT * FROM datamahasiswa WHERE username = '$user'";
	$query = mysqli_query($conn, $sql);

	$row = mysqli_fetch_assoc($query);

	$nama = $row['nama'];
	$nim = $row['nim'];

	$sql = "SELECT * FROM posting WHERE nim = '$nim'";
	$query = mysqli_query($conn, $sql);

	$row = mysqli_fetch_assoc($query);

	$judul = $row['judul'];
	$posting = $row['isi'];
	$gambar = $row['gambar'];
?>
<form method="POST">
	<table width="30%">
		<tr>
			<td>Pembuat</td>
			<td>:</td>
			<td><?php echo $nama; ?></td>
		</tr>
		<tr>
			<td>Judul</td>
			<td>:</td>
			<td><?php echo $judul; ?></td>
		</tr>
		<tr>
			<td>Cerita</td>
			<td>:</td>
			<td><?php echo $posting; ?></td>
		</tr>
		<tr>
			<td colspan="3"><img src="gambar/<?php echo $gambar; ?>" width='100%'></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td><button formaction="halamanawal.php">KEMBALI</button></td>
		</tr>
	</table>
</form>