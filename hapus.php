<?php
include "koneksi.php";
$id = $_GET['id'];
$query = "DELETE FROM data_relawan where No_Hp=$id";
$hasil=mysqli_query ($koneksi,$query);

if($hasil){
	header("location: data.php?pesan=hapus");
}else{
	echo "hapus data gagal";
}
?>