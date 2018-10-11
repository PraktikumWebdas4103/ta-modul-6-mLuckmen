<?php 
	include 'koneksi.php';
	session_start();
	$user = $_SESSION['user'];
	$pass = $_SESSION['pass'];

	$sql = "SELECT * FROM datamahasiswa WHERE username = '$user' AND pass = '$pass'";
	$query = mysqli_query($conn, $sql);

	$cek  = mysqli_num_rows($query);
	$row = mysqli_fetch_assoc($query);
?>
<!DOCTYPE html>
<html>
<head>
	<title>POST</title>
</head>
<style type="text/css">
	td {
		vertical-align: top;
	}
	.
</style>
<body>
	<form method="POST" enctype="multipart/form-data">
		<table>
			<tr>
				<td width="100px">JUDUL</td>
				<td>:</td>
				<td><input type="text" name="judul"></td>
			</tr>
			<tr>
				<td>Text</td>
				<td>:</td>
				<td><textarea rows="20" cols="80" name="posting"></textarea></td>
			</tr>
			<tr>
				<td>Gambar</td>
				<td>:</td>
				<td><input type="file" name="gambar"></td>
			</tr>
			<tr>
				<td colspan="3" align="right">
					<button formaction="halamanawal.php">KEMBALI</button>
					<input type="submit" name="submit" value="POST">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>
<?php
	if(isset($_POST['submit'])){
		$nim = $row['nim'];
		$nama = $row['nama'];
		$judul = $_POST['judul'];
		$posting = $_POST['posting'];

		$file_name = $_FILES['gambar']['name'];
		$tmp_name = $_FILES['gambar']['tmp_name'];
		$file_move_success = move_uploaded_file($tmp_name, 'gambar/'.$file_name);

		$sql = "INSERT INTO posting (nim,nama, judul, isi, gambar) VALUES ('$nim', '$nama', '$judul', '$posting', '$file_name')";
		$query = mysqli_query($conn, $sql);

		if ($query) {
			header('Location: halamatawal.php');
		}else{
			echo "Post Gagal Disimpan";
		}
	}
?>