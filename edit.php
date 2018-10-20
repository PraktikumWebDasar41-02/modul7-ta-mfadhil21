<?php
	include('konek.php');
	
	$edit = $_GET['nim2'];
	session_start();
	$_SESSION['edit'] = $edit;
	
	$hasil = mysqli_query($db, "SELECT * FROM t_jurnal7 WHERE nim = '$edit';");
	foreach ($hasil as $key) {
		echo "Nama: ".$key['nama']."<br>";
		echo "Nim: ".$key['nim']."<br>";
		echo "Tanggal Lahir: ".$key['tgl_lahir']."<br>";
		echo "Jenis Kelamin: ".$key['jenis_kelamin']."<br>";
		echo "Program Studi: ".$key['program_studi']."<br>";
		echo "Fakultas: ".$key['fakultas']."<br>";
		echo "Asal: ".$key['asal']."<br>";
		echo "Motto Hidup: ".$key['moto']."<br>";
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h2>EDIT DATA</h2>
	<form action="eddata.php" method="POST">
		<input type="text" name="nama" placeholder="nama"><br>
		<input type="text" name="nim" placeholder="nim"><br>
		<input type="date" name="tgl"><br>
		<select name="jk"><br>
			<option value="laki-laki">Laki-laki</option>
			<option value="perempuan">Perempuan</option>
		</select><br>
		<select name="program_studi"><br>
			<option value="MI">Manajemen Informatika</option>
			<option value="TK">Teknik Komputer</option>
			<option value="IF">Informatika</option>
		</select><br>
		<input type="radio" name="fk" value="FIT">FIT
		<input type="radio" name="fk" value="FIK">FIK<br>
		<input type="text" name="asal" placeholder="asal"><br>
		<textarea name="moto" placeholder="apa moto hidupmu?"></textarea><br>
		<input type="submit" name="submit2" value="submit"><br>
	</form>
	<a href="jurnal7.php">BACK</a>
</body>
</html>
