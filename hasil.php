<?php
	include_once("koneksi.php");

	$query = $conn->prepare("SELECT * FROM pendaftaran");
	$query->execute();

	$data = $query->fetchAll();
?>	
<!DOCTYPE html>
<html>
<head>
	<title>Hasil</title>
</head>
<body>
	<center><h2>Data Siswa</h2></center>
	<table>
	<tr>
		<th>
			Nama
		</th>
		<th>
			Kelas
		</th>
		<th>
			Aksi
		</th>
	</tr>
	<?php
		$result = $conn->query("SELECT * FROM pendaftaran");

		while($row = $result->fetch()){
			echo "<tr><td>$row[1]</td><td>$row[2]</td><td><a href='delete.php?id=$row[0]'><button>Delete</button></a></td></tr>";
		}
	?>
	</table>
	<center><a href="./"><button>Home</button></a></center>
</body>
</html>