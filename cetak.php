
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Data covid19</title>
		
		<link href="bootstrap.min.css" type="text/css" rel="stylesheet" />

		<style type="text/css">
			.jumbotron {
				background: transparent;
			}
		</style>
	</head>
	<body>
		<div class="text-center">
			<h3 style="margin-top: 50px; margin-bottom: 20px;">DATA RELAWAN COVID 19 Wilayah
			<br>
			PER
			<?php
			date_default_timezone_set('Asia/Jakarta');
			echo date('d-m-Y H:i:s');
			?>
			</h3>
		</div>

		</form>
			<div class="card-body table-responsive p-0">
              <table class="table table-bordered">
                <thead>
                  <tr style="background-color: silver">
                    <th>Nomor</th>
                    <th>Nama Lengkap</th>
                    <th>Alamat Rumah</th>
                    <th>Propinsi</th>
                    <th>Email</th>
                    <th>No Hp</th>
                    <th>Keahlian</th>               
                   </tr>
              </thead>
		
<?php
include "koneksi.php";
$no=1;
$sql = mysqli_query ($koneksi, "SELECT*FROM data_relawan");
while ($sql2= mysqli_fetch_array($sql)){
?>

<tr>
	<td><?php echo $no++; ?></td>
	<td><?php echo $sql2 ['Nama_Lengkap']; ?></td>
	<td><?php echo $sql2 ['Alamat_Rumah']; ?></td> 
	<td><?php echo $sql2 ['Propinsi']; ?></td>  
	<td><?php echo $sql2 ['Email']; ?></td> 
	<td><?php echo $sql2 ['No_Hp']; ?></td> 
	<td><?php echo $sql2 ['Keahlian']; ?></td>
</tr>

<?php
}
?>
</table>
<script>
	window.print();
</script>
</div>
		<script src="bootstrap.min.js"></script>
	</body>
</html>