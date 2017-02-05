<?php  
    include 'koneksi.php';

    if(isset($_GET["id"])){
        $query = $conn->prepare("DELETE FROM pendaftaran WHERE id=:id");
        $query->bindParam(":id", $_GET["id"]);
        $query->execute();
        header("location: hasil.php");
    }
?>