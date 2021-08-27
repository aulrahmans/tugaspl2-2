<h1>Input Matakuliah</h1>

<?php

// Koneksi ke Database
include 'koneksi.php';
$db = new Database();
$con=$db->Connect();

// Perintah insert data ke Database
if(isset($_POST['proses']))
{
$query=mysqli_query($con,"insert into tbl_matkul values(
'".$_POST['kode_mk']."',
'".$_POST['nama_mk']."',
'".$_POST['sks']."'
)");

header('location:latihan9.php');
}
?>
<form action="" method="POST">
Kode <input type="text" name="kode_mk"> 
Matakuliah <input type="text" name="nama_mk">
SKS <input type="text" name="sks">
<br>
<br>
<input type="submit" name="proses" value="Simpan">
<input type='button' onclick=location.href='latihan9.php' value='Batal' />
</form>