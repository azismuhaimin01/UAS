<?php
include "koneksi.php";

$Nama_Lengkap = $_POST['Nama_Lengkap'];
$Alamat_Rumah= $_POST ['Alamat_Rumah'];
$Propinsi = $_POST ['Propinsi'];
$Email = $_POST ['Email'];
$No_Hp = $_POST ['No_Hp'];
$Keahlian = $_POST ['Keahlian'];

$query = mysqli_query($koneksi, "INSERT INTO data_relawan (Nama_Lengkap,Alamat_Rumah,Propinsi,Email,No_Hp,Keahlian) VALUES 
	('$Nama_Lengkap','$Alamat_Rumah','$Propinsi','$Email','$No_Hp','$Keahlian')");

header("Location: data.php");
?>

