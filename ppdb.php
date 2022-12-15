<html>
<head>
<title>PPDB</title>
</head>
<body>
<h1>Formulir PPDB</h1>
<form action="datappdb.php" method="POST">
<br>Isi Data Dibawah Ini:</br>
<table border="0">
<tr>
<td>Nama Lengkap</td>
<td><input type="text" name="nama"></td>
</tr>
<tr>
<td>Tempat Tanggal Lahir</td>
<td><input type="text" name="tempat"></td>
<td><select name="tanggal">
<?php
for ($d=1;$d<=31;$d+=1){
echo"<option value=$d>$d</option>";
}
?>
</select>
<td><select name="bulan">
<?php
$bulan=array("Januari","Februari","Maret","April
","Mei","Juni","Juli","Agustus","September","Oktober","November","De
sember");

$jlh_bln=count($bulan);
for($m=0; $m<$jlh_bln; $m+=1){
echo"<option value=$bulan[$m]> $bulan[$m]

</option>";
}
?>
</select>
<td><select name="tahun">
<?php
$now=date("Y");
for ($y=1990;$y<=$now;$y++){
echo "<option value='$y'>$y</option>";
}
?>
</select>
</tr>
<tr>
<td>Alamat Lengkap</td>
<td><input type="text" name="alamat"</td>
</tr>
<tr>
<td>Agama</td>
<td><select name="agama">
<option value="Islam">Islam</option>
<option value="Protestan">Protestan</option>
<option value="Katolik">Katolik</option>
<option value="Hindu">Hindu</option>
<option value="Buddha">Buddha</option>
<option value="Khonghucu">Khonghucu</option>
</select>
</tr>
<tr>
<td>Jenis Kelamin</td>

<td><input type="radio" name="gender" value="Laki-
Laki">Laki-Laki <input type="radio" name="gender"

value="Perempuan">Perempuan</td>

</tr>
<tr>
<td>No Telepon</td>
<td><input type="text" name="telepon"></td>
</tr>
<tr>
<td>Email</td>
<td><input type="text" name="email"></td>
</tr>
<tr>
<td>Asal Sekolah</td>
<td><input type="text" name="sekolah"></td>
</tr>
<tr>
<td>Nilai UN</td>
<td><input type="text" name="nun"></td>
</tr>
<tr>
<td><input type="submit" value="Daftar"</td>
</tr>
</table>
</form>
</body>
</html>