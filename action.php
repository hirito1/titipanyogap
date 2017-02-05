<!DOCTYPE html>
<head>
<title>Hasil Pendaftaran OSIS</title>
</head>

<body>
<?php
include "koneksi.php"
?>

<?php
$Nama = $_POST['Nama'];
$Kelas = $_POST['Kelas'];
$email = $_POST['email'];
$Jeniskelamin = $_POST['Jeniskelamin'];
$Agama = $_POST['Agama'];
$Alamat = $_POST['Alamat'];
$Tempat = $_POST['Tempat'];
$Alasan = $_POST['Alasan'];

echo "<center><div style='background:red;color:#fff;width:615px;height:40px;border:2px solid #000;'><font style='font-size:33px;'>Hasil Pendaftaran</font></div><table width='624' height='300' bgcolor='#fff' cellpadding='10' border='1'>
<tr>
<td>Nama Lengkap</td>
<td>".$Nama."</td>
</tr>
<tr>
<td>Kelas</td>
<td>".$Kelas."</td>
</tr>
<tr>
<tr>
<td>Email</td>
<td>".$email."</td>
</tr>
<tr>
<td>Jenis Kelamin</td>
<td>".$Jeniskelamin."</td>
</tr>
<tr>
<td>Agama</td>
<td>".$Agama."</td>
</tr>
<tr>
<td>Alamat</td>
<td>".$Alamat."</td>
</tr>
<tr>
<td>TTL</td>
<td>".$Tempat."</td>
</tr>
<td>Alasan menjadi OSIS</td>
<td>".$Alasan."</td>
</tr>
</table></center>"
?>

<?php
	$sql ="INSERT INTO pendaftaran(Nama,Kelas,email,Jeniskelamin,Agama,Alamat,Tempat,Alasan)
VALUES('{$_POST['Nama']}','{$_POST['Kelas']}','{$_POST['email']}','{$_POST['Jeniskelamin']}','{$_POST['Agama']}','{$_POST['Alamat']}','{$_POST['Tempat']}','{$_POST['Alasan']}')";
	$query = $conn->prepare($sql);
	if ($query->execute())
	echo "<a href='hasil.php'><button>Hasil</button></a>";
	else
	echo "terdapat kesalahan";
?>
</body>
</html>																								