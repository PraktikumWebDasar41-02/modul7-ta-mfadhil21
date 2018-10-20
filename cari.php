<?php  
	include ('konek.php');
	session_start();

		$cari = $_SESSION['cr'];
		$hasil= mysqli_query($db, "SELECT * FROM t_jurnal7 WHERE nim LIKE '%$cari%'");
		echo "HASIL CARI";

		session_unset($_SESSION['cr']);

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table>
		<?php  
			foreach ($hasil as $key) {
				echo "<tr><td>". $key['nama']. "</td>";
				echo "<td>". $key['nim']. "</td>";
				echo "<td>". $key['program_studi']. "</td>";
				echo "<td><a href='del.php?nim=".$key['nim']."'>DELETE</a></td></tr>";
				echo "<td><a href='edit.php?nim2=".$key['nim']."'>EDIT</a></td><tr>";
			}
		?>
	</table>
	<a href="view.php">BACK</a>
</body>
</html>