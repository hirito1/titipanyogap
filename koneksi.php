<?php
try{
	$conn = new PDO("mysql:host=localhost;dbname=yoga","root","");
	$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	echo "<font style='display:none;'>berhasil</font>";
}catch(PDOExceotion $sembarang){
	echo "gagal" .$sembarang->getMessage ();
}
?>