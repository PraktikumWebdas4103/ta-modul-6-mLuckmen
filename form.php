<?php
	include 'aksi.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>FORM MAHASISWA</title>
</head>
<style>
	.red {
		font-size: 10pt;
		color: red;
	}
	td { vertical-align: top; padding: 5px 5px 5px 5px;}
	table {
		margin: auto;
		width: 30%;
		border-collapse: collapse;
		border: 1px solid #888;
	}
	.save {
		width: 100%;
		height: 30px;
	}
</style>
<body>
	<form action="" method="POST">
		<table>
			<tr>
				<td colspan="3" align="left"><h2>FORM MAHASISWA ==============</h2></td>
			</tr>
			<tr>
				<td>Nama Lengkap</td>
				<td>:</td>
				<td>
					<input type="text" name="nama"><br>
					<span class="red"><?php if(isset($erNama)){ echo $erNama; } ?></span>
				</td>
			</tr>
			<tr>
				<td>NIM</td>
				<td>:</td>
				<td>
					<input type="text" name="nim"><br>
					<span class="red"><?php if(isset($erNim)){ echo $erNim; } ?></span>
				</td>
			</tr>
			<tr>
				<td valign="top">Kelas</td>
				<td valign="top">:</td>
				<td>
					<input type="hidden" name="kelas" checked>
					<input type="radio" name="kelas" value="D3 MI 41-01">D3 MI 41-01<br>
					<input type="radio" name="kelas" value="D3 MI 41-02">D3 MI 41-02<br>
					<input type="radio" name="kelas" value="D3 MI 41-03">D3 MI 41-03<br>
					<input type="radio" name="kelas" value="D3 MI 41-04">D3 MI 41-04<br>

				</td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td>
					<input type="hidden" name="jenisKel" checked>
					<input type="radio" name="jenisKel" value="Pria">Pria
					<input type="radio" name="jenisKel" value="Wanita">Wanita<br>
					
				</td>
			</tr>
			<tr>
				<td valign="top">Hobi</td>
				<td valign="top">:</td>
				<td>
					<input type="hidden" name="hobi[]" value="">
					<input type="checkbox" name="hobi[]" value="Tidur">Tidur<br>
					<input type="checkbox" name="hobi[]" value="Salto">Salto<br>
					<input type="checkbox" name="hobi[]" value="Nafas">Nafas<br>
					<input type="checkbox" name="hobi[]" value="Kayang">Kayang<br>
					<input type="checkbox" name="hobi[]" value="Tenggelam">Tenggelam<br>

				</td>
			</tr>
			<tr>
				<td>Fakultas</td>
				<td>:</td>
				<td>
					<select name="fakultas">
						<option value="">Pilih Fakultas</option>
						<option value="FIT">Fakultas Ilmu Terapan</option>
						<option value="FKB">Fakultas Komunikasi Bisnis</option>
						<option value="FEB">Fakultas Ekonomi Bisnis</option>
						<option value="FIK">Fakultas Industri Kreatif</option>
						<option value="FIF">Fakultas Informatika</option>
						<option value="FTE">Fakultas Teknik Elektri</option>
						<option value="FRI">Fakultas Rekayasa Industri</option>
					</select><br>

				</td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td>
					<input type="textarea" name="alamat">
				</td>
			</tr>
			<tr>
				<td>Username</td>
				<td>:</td>
				<td>
					<input type="text" name="username"><br>
					<span class="red"><?php if(isset($erUser)){ echo $erUser; } ?></span>
				</td>
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td>
					<input type="password" name="pass"><br>
					<span class="red"><?php if(isset($erPass)){ echo $erPass; } ?></span>
				</td>
			</tr>
			<tr>
				<td colspan="3">
					<br>
					<input type="submit" name="save" value="REGISTER" class="save"><br>
					<span class="red"><b><u><?php if(isset($err)){ echo $err; } ?></b></u></span>
				</td>
			</tr>
			<tr>
				<td colspan="3">
					<button class="save" formaction="login.php">LOGIN</button>
				</td>
			</tr>
		</table>
	</form>
</body>
</html>
