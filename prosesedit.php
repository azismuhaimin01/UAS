<?php 
// koneksi database
include "koneksi.php";
 
// menangkap data yang di kirim dari form
// $id = $_POST['id'];
$Nama_Lengkap = $_POST['Nama_Lengkap'];
$Alamat_Rumah = $_POST['Alamat_Rumah'];
$Propinsi = $_POST['Propinsi'];
$Email = $_POST['Email'];
$id = $_POST['No_Hp'];
$Keahlian = $_POST['Keahlian'];

 
// update data ke database
mysqli_query($koneksi,"UPDATE data_relawan set Nama_Lengkap='$Nama_Lengkap', Alamat_Rumah='$Alamat_Rumah', Propinsi='$Propinsi', Email='$Email', Keahlian='$Keahlian' where No_Hp='$id'");



// mengalihkan halaman kembali ke index.php
header("location: data.php");
 
?> 