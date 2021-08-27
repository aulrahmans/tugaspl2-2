<h1>Input Mahasiswa</h1>

<?php

// Koneksi ke Database
include 'koneksi.php';
$db = new Database();
$con=$db->Connect();

// Perintah insert data ke Database
if(isset($_POST['proses']))
{
$query=mysqli_query($con,"insert into tbl_mahasiswa values(
'".$_POST['npm']."',
'".$_POST['nama']."'
)");

header('location:latihan1.php');
}
?>
<form action="" method="POST">
NPM <input type="text" name="npm"> 
Nama <input type="text" name="nama">
<br>
<br>
<input type="submit" name="proses" value="Simpan">
<input type='button' onclick=location.href='latihan1.php' value='Batal' />
</form>