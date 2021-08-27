<h1>Edit Matakuliah</h1>

<?php
// Koneksi ke Database
include 'koneksi.php';
$db = new Database();
$con=$db->Connect();
$kode_mk= $_GET['kode_mk'];

// Mengambil data dari Database
$query=mysqli_query($con,"SELECT * FROM tbl_matkul WHERE kode_mk='$kode_mk'")or die(mysql_error());
while($data=mysqli_fetch_array($query)){

// Perintah update ke Database
if(isset($_POST['proses']))
{
$nama_mk= $_POST['nama_mk'];
$sks =$_POST['sks'];
$query=mysqli_query($con,"UPDATE tbl_matkul SET kode_mk='$kode_mk', nama_mk='$nama_mk', sks='$sks' WHERE kode_mk='$kode_mk'");
header('location:latihan9.php');
}

?>

<form action="" method="POST">
Kode <input type="text" name="kode_mk" value="<?php echo $data['kode_mk'] ?>">
Matakuliah <input type="text" name="nama_mk" value="<?php echo $data['nama_mk'] ?>">
SKS <input type="text" name="sks" value="<?php echo $data['sks'] ?>">
<br>
<br>
<input type="submit" name="proses" value="Simpan">
<input type='button' onclick=location.href='latihan9.php' value='Batal' />
</form>

<?php } ?>