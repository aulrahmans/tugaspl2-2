<h1>Daftar Matakuliah</h1>
<br>
<a href='latihan10.php?kode_mk=$data[kode_mk]'>Tambah</a>
<table border="1 px">
<tr>
<th> NO </th>
<th> Kode </th>
<th> Matakuliah </th>
<th> SKS </th>
<th> Aksi </th>
</tr>

<?php

// Koneksi ke Database
include 'koneksi.php';
$db = new Database();
$con=$db->Connect();
$no=1;

// Mengambil data dari Database
$query=mysqli_query($con,"select * from tbl_matkul");
while($data=mysqli_fetch_array($query)){

// Menampilkan data dari Database	
echo "<tr>";
echo "<th>"; echo $no; echo"</th>";
echo "<td>"; echo $data['kode_mk']; echo "</td>";
echo "<td>"; echo $data['nama_mk']; echo "</td>";
echo "<td>"; echo $data['sks']; echo "</td>";
echo "<td>"; echo "<a href='latihan11.php?kode_mk=$data[kode_mk]'>Edit</a> | <a href='latihan12.php?kode_mk=$data[kode_mk]'>Hapus</a>"; echo "</td>";
echo "</tr>";
$no++;

}
?>

</table>