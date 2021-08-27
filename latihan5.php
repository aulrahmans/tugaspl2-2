<h1>Daftar Nama Dosen</h1>
<br>
<a href='latihan6.php?npm=$data[nik]'>Tambah</a>
<br>
<br>
<table border="1 px">
<tr>
<th> NO </th>
<th> NIK </th>
<th> Nama Dosen </th>
<th> Aksi </th>
</tr>

<?php

// Koneksi ke Database
include 'koneksi.php';
$db = new Database();
$con=$db->Connect();
$no=1;

// Mengambil data dari Database
$query=mysqli_query($con,"select * from tbl_dosen");
while($data=mysqli_fetch_array($query)){

// Menampilkan data dari Database	
echo "<tr>";
echo "<th>"; echo $no; echo"</th>";
echo "<td>"; echo $data['nik']; echo "</td>";
echo "<td>"; echo $data['nama']; echo "</td>";
echo "<td>"; echo "<a href='latihan7.php?nik=$data[nik]'>Edit</a> | <a href='latihan8.php?nik=$data[nik]'>Hapus</a>"; echo "</td>";
echo "</tr>";
$no++;

}
?>

</table>