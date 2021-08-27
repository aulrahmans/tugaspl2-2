<h1>Edit Data Mahasiswa</h1>

<?php
// Koneksi ke Database
include 'koneksi.php';
$db = new Database();
$con=$db->Connect();
$nik= $_GET['nik'];

// Mengambil data dari Database
$query=mysqli_query($con,"SELECT * FROM tbl_dosen WHERE nik='$nik'")or die(mysql_error());
while($data=mysqli_fetch_array($query)){

// Perintah update ke Database
if(isset($_POST['proses']))
{
$nama= $_POST['nama'];
$query=mysqli_query($con,"UPDATE tbl_dosen SET nik='$nik', nama='$nama' WHERE nik='$nik'");
header('location:latihan5.php');
}

?>

<form action="" method="POST">
NIK <input type="text" name="nik" value="<?php echo $data['nik'] ?>">
Nama <input type="text" name="nama" value="<?php echo $data['nama'] ?>">
<br>
<br>
<input type="submit" name="proses" value="Simpan">
<input type='button' onclick=location.href='latihan5.php' value='Batal' />
</form>

<?php } ?>