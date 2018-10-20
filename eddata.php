<?php
	include('konek.php');
	session_start();
	$edit = $_SESSION['edit'];
	$sql = mysqli_query($db, "SELECT * FROM t_jurnal7 WHERE nim = '$edit';");
	$row = mysqli_fetch_array($sql);
	if (isset($_POST['submit2'])) {
		$nama=$_POST['nama'];
		$nim=$_POST['nim'];
		$tgl=$_POST['tgl'];
		$jk=$_POST['jk'];
		$program_studi=$_POST['program_studi'];
		$fk=$_POST['fk'];
		$asal=$_POST['asal'];
		$moto=$_POST['moto'];
		
		if (empty($nim)) {
			$nim = $edit;
		}
		if (!empty($nama)) {
			mysqli_query($db, "UPDATE t_jurnal7 SET nama = '$nama' WHERE nim = '$edit';");
		}
		if (!empty($tgl)) {
			mysqli_query($db, "UPDATE t_jurnal7 SET tgl = '$tgl' WHERE nim = '$edit';");
		}
		if (!empty($jk)) {
			mysqli_query($db, "UPDATE t_jurnal7 SET jk = '$jk' WHERE nim = '$edit';");
		}
		if (!empty($program_studi)) {
			mysqli_query($db, "UPDATE t_jurnal7 SET program_studi = '$program_studi' WHERE nim = '$edit';");
		}
		if (!empty($fk)) {
			mysqli_query($db, "UPDATE t_jurnal7 SET fk = '$fk' WHERE nim = '$edit';");
		}
		if (!empty($asal)) {
			mysqli_query($db, "UPDATE t_jurnal7 SET asal = '$asal' WHERE nim = '$edit';");
		}
		if (!empty($moto)) {
			mysqli_query($db, "UPDATE t_jurnal7 SET moto = '$moto' WHERE nim = '$edit';");
		}
		if (!empty($nim)) {
			mysqli_query($db, "UPDATE t_jurnal7 SET nim = '$nim' WHERE nama = '".$row['nama']."';");
		}
		header("Location: edit.php?nim2=".$nim);
	}
?>