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
<td> Nama siswa</font></td><td width="294"><input name="Nama" type="text"></td></tr> 
<tr>
<td>Kelas</font></td><td width="294"><input name="Kelas" type="text"></td></tr>
<tr>
<td> Email</td><td><input name="email" type="text"></td></tr>
<tr>
<td>Jenis kelamin</td><td><select name="Jeniskelamin">
			<option value="-pilih-">-pilih-</option>
			<option value="laki-laki">laki-laki</option>
            <option value="permpuan">perempuan</option></select></td></tr>
<tr>
<td>Agama</td><td><input name="Agama" type="text"></td></tr>
<tr>
<td>Alamat</td><td><input name="Alamat" type="text"></td></tr>
<tr>
<td> Tempat,tanggal lahir</td><td><input name="Tempat" placeholder="tempat,tanggal lahir">
<tr><td> </td>
</tr>
<tr>
<td>Alasan menjadi OSIS</td><td><textarea name="Alasan" ></textarea></td></tr>
<td> </td><td><input type="submit" value="daftar"/></td></td></tr>
</table>
</form>
</body>
</html>