<h1>Daftar Mahasiswa</h1>
<br>
<a href='latihan2.php?npm=$data[npm]'>Tambah</a>
<table border="1 px">
<tr>
<th> NO </th>
<th> NPM </th>
<th> Nama </th>
<th> Aksi </th>
</tr>

<?php

// Koneksi ke Database
include 'koneksi.php';
$db = new Database();
$con=$db->Connect();
$no=1;

// Mengambil data dari Database
$query=mysqli_query($con,"select * from tbl_mahasiswa");
while($data=mysqli_fetch_array($query)){

// Menampilkan data dari Database	
echo "<tr>";
echo "<th>"; echo $no; echo"</th>";
echo "<td>"; echo $data['npm']; echo "</td>";
echo "<td>"; echo $data['nama']; echo "</td>";
echo "<td>"; echo "<a href='latihan3.php?npm=$data[npm]'>Edit</a> | <a href='latihan4.php?npm=$data[npm]'>Hapus</a>"; echo "</td>";
echo "</tr>";
$no++;

}
?>

</table>