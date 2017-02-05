<?php
	include 'koneksi.php';

	if(isset($_GET['id'])){
		die("Error: ID tidak dimasukkan");
	}
	$query = $conn->prepare("SELECT * FROM pendaftaran WHERE id = :id");
	$query->bidnparam(":id", $_GET['id']);
	$query->execute();
	if($query->rowCount() == 0){
		die("Error: ID tidak ditemukan");
	}else{
		$data = $query->fetch();
	}

	if(isset($_POST['submit'])){
		$Nama = $_POST['Nama'];
$Kelas = $_POST['Kelas'];
$email = $_POST['email'];
$JK = $_POST['Jeniskelamin'];
$Agama = $_POST['Agama'];
$Alamat = $_POST['Alamat'];
$Tempat = $_POST['Tempat'];
$Alasan = $_POST['Alasan'];

$query = $conn->prepare("UPDATE pendaftaran SET Nama=:nama, Kelas=:kelas, email=:email, Jeniskelamin=:jk, Agama=:agama, Alamat=:alamat, Tempat=:tempat, Alasan=:alasan WHERE :id");
$query->bindparam(":nama", $Nama);
$query->bindparam(":kelas", $Kelas);
$query->bindparam(":jk", $JK);
$query->bindparam(":agama", $Agama);
$query->bindparam(":alamat", $Alamat);
$query->bindparam(":tempat", $Tempat);
$query->bindparam(":alasan", $Alasan);
$query->execute();
header("location: hasil.php");
	}

?>
<!doctype html>
<html>
<head>
<title>Pendaftaran anggota OSIS</title>
</head>
<body bgcolor="#FFFFCC">
<?php include "koneksi.php" ?>
<form method="POST" action="action.php">
<table align="center" height="50" width="624" border="1" bgcolor="#666666">
<tr><td><font face="Times New Roman, Times, serif" size="+3"><center>Pendaftaran anggota OSIS</center></font></td></tr>
</table>
<form method="get">
<table align="center" width="624" height="300" bgcolor="#3366FF" border="0" cellpadding="10" style="padding:10px;">
<tr>
<td> Nama siswa</font></td><td width="294"><input name="Nama" type="text" value="<?php echo $data['Nama']?>"></td></tr> 
<tr>
<td>Kelas</font></td><td width="294"><input name="Kelas" type="text" value="<?php echo $data['Kelas']?>"></td></tr>
<tr>
<td> Email</td><td><input name="email" type="text" value="<?php echo $data['email'] ?>"></td></tr>
<tr>
<td>Jenis kelamin</td><td><select name="Jeniskelamin">
			<option value="-pilih-">-pilih-</option>
			<option value="laki-laki">laki-laki</option>
            <option value="permpuan">perempuan</option></select></td></tr>
<tr>
<td>Agama</td><td><input name="Agama" type="text" value="<?php echo $data['Agama'] ?>"></td></tr>
<tr>
<td>Alamat</td><td><input name="Alamat" type="text" value="<?php echo $data['Alamat'] ?>"></td></tr>
<tr>
<td> Tempat,tanggal lahir</td><td><input name="Tempat" placeholder="tempat,tanggal lahir" value="<?php echo $data['Tempat'] ?>">
<tr><td> </td>
</tr>
<tr>
<td>Alasan menjadi OSIS</td><td><textarea name="Alasan" value="<?php echo $data['Alasan'] ?>"></textarea></td></tr>
<td> </td><td><input type="submit" value="daftar" name="submit" /></td></td></tr>
</table>
</form>
</body>
</html>