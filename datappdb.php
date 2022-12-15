<html>
<head>
<title>DATA PPDB</title>
</head>
<body>
<tr>
<h1>Data Formulir PPDB</h1>
</tr>
<table width="400" border="1">
<?php
error_reporting(0);
$nama=$_POST['nama'];
$tempat=$_POST['tempat'];
$tanggal=$_POST['tanggal'];
$bulan=$_POST['bulan'];
$tahun=$_POST['tahun'];
$alamat=$_POST['alamat'];
$agama=$_POST['agama'];
$gender=$_POST['gender'];
$telepon=$_POST['telepon'];
$email=$_POST['email'];
$sekolah=$_POST['sekolah'];
$nun=$_POST['nun'];
?>
<td>Nama Lengkap</td><td><?php echo $nama;?></td>
</tr>
<td>Tempat Tanggal Lahir</td><td><?php echo $tempat;?>

<?php echo $tanggal;?> <?php echo $bulan;?> <?php echo
$tahun;?></td>
</tr>
<td>Alamat Lengkap</td><td><?php echo $alamat;?></td>
</tr>
<td>Agama</td><td><?php echo $agama;?></td>
</tr>
<td>Jenis Kelamin</td><td><?php echo $gender;?></td>
</tr>
<td>No Telepon</td><td><?php echo $telepon;?></td>
</tr>
<td>Email</td><td><?php echo $email;?></td>
</tr>
<td>Asal Sekolah</td><td><?php echo $sekolah;?></td>
</tr>
<td>Nilai UN</td><td><?php echo $nun;?></td>
</tr>
<?php
if ($submit=="$submit"){
echo "Terima Kasih "."$nama"." Sudah Melakukan

Pendaftaran";
}
?>
</table>
</h1>
<a href="ppdb.php">Back to Home</a>
</body>
</html>