<?php
	include "koneksi.php";

	$id = $_GET['id'];
	$data = mysqli_query($koneksi,	"SELECT*FROM data_relawan where No_Hp='$id'");
	while($d = mysqli_fetch_array($data)){
?>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Data Anggota</title>
		
		<link href="bootstrap.min.css" type="text/css" rel="stylesheet" />

		<style type="text/css">
			.jumbotron {
				background: transparent;
			}
		</style>
	</head>
	<body>
		<center><br><h1>EDIT DATA COVID19</h1></center>
		<form method="post" action="prosesedit.php">
				<div class="container">
				<div class="form-group">
					<label>Nama Lengkap</label>
					<input type="text" name="Nama_Lengkap" class="form-control" 
					value="<?php echo $d['Nama_Lengkap']; ?>">
				</div>
				<div class="form-group">
					<label>Alamat Rumah</label>
					<input type="text" name="Alamat_Rumah" class="form-control" placeholder="Alamat" value="<?php echo $d['Alamat_Rumah']; ?>">
				</div>
				<div class="form-group">
					<label>Nama Wilayah</label>

					<select name="Propinsi" style="width: 100%; height: 40px;" value="<?php echo $d['Propinsi']; ?>">
						<option disabled selected value>Nama Wilayah</option>
		                <option value="Aceh">Aceh</option>
		                <option value="Sumatra Utara">Sumatra Utara</option>
		                <option value="Sumatra Barat">Sumatra Barat</option>
		                <option value="Riau">Riau</option>
		                <option value="Kepulauan Riau">Kepulauan Riau</option>
		                <option value="Jambi">Jambi</option>
		                <option value="Bengkulu">Bengkulu</option>
		                <option value="Sumatra Selatan">Sumatra Selatan</option>
		                <option value="Kepulauan Bangka Belitung">Kepulauan Bangka Belitung</option>
		                <option value="Lampung">Lampung</option>
		                <option value="Banten">Banten</option>
		                <option value="Jawa Barat">Jawa Barat</option>
		                <option value="Jawa Tengah">Jawa Tengah</option>
		                <option value="Jakarta">Jakarta</option>
		                <option value="Semarang">Semarang</option>
		                <option value="Yogyakarta">Yogyakarta</option>
		                <option value="Jawa Timur">Jawa Timur</option>
		                <option value="Bali">Bali</option>
		                <option value="Nusa Tenggara Barat">Nusa Tenggara Barat</option>
		                <option value="Nusa Tenggara Timur">Nusa Tenggara Timur</option>
		                <option value="Kalimantan Barat">Kalimantan Barat</option>
		                <option value="Kalimantan Selatan">Kalimantan Selatan</option>
		                <option value="Kalimantan Tengah">Kalimantan Tengah</option>
		                <option value="Kalimantan Timur">Kalimantan Timur</option>
		                <option value="Kalimantan Utara">Kalimantan Utara</option>
		                <option value="Gorontalo">Gorontalo</option>
		                <option value="Sulawesi Barat">Sulawesi Barat</option>
		                <option value="Sulawesi Selatan">Sulawesi Selatan</option>
		                <option value="Sulawesi Tengah">Sulawesi Tengah</option>
		                <option value="Sulawesi Tenggara">Sulawesi Tenggara</option>
		                <option value="Sulawesi Utara">Sulawesi Utara</option>
		                <option value="Maluku">Maluku</option>	
		                <option value="Maluku Utara">Maluku Utara</option>
		                <option value="Papua Barat">Papua Barat</option>
		                <option value="Papua">Papua</option>

		            </select>
				</div>
				<div class="form-group">
					<label>Email</label>
					<input type="text" name="Email" class="form-control" value="<?php echo $d['Email']; ?>">
				</div>
				<div class="form-group">
					<label>No HP</label>
					<input type="hidden" name="No_Hp" value="<?php echo $d['No_Hp']; ?>">
					<input type="text" name="No_Hp" class="form-control" value="<?php echo $d['No_Hp']; ?>"> 
				</div>
				<div class="form-group">
					<label>Keahlian</label>
					<input type="text" name="Keahlian" class="form-control" value="<?php echo $d['Keahlian']; ?>">
				</div>
				<div class="form-group">
					<input type="submit" name="button" value="Kirim"  class="btn btn-primary tombol ml-auto">
				</div>		
			</table>
		</form>
		<?php 
	}
	?>
 
</body>
</html>