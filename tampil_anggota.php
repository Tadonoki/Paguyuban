<html> 
<head> 
 <title>CRUD Data Anggota</title> 
 <link rel="stylesheet" type="text/css" href="style.css">
</head> 
<body> 
 <h2>Data Anggota</h2> 
 <a href="form_simpan.php" class="add-data-link">Tambah Data</a><br><br> 
 <a href="home.php" class="add-data-link">Kembali</a><br><br> 
 <table border="1" width="100%"> 
 <tr> 
  <th>Foto</th> 
  <th>NIS</th> 
  <th>Nama</th> 
  <th>Jenis Kelamin</th> 
  <th>Telepon</th> 
  <th>Alamat</th> 
  <th colspan="2">Aksi</th> 
 </tr> 
 <?php 
 // Menghubungkan ke file koneksi.php 
 include "koneksi.php";

 $query = "SELECT * FROM paguyuban"; // Query untuk menampilkan semua Data Anggota 
 $sql = mysqli_query($connect, $query); // Eksekusi query 
  
 while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil query 

echo "<tr>"; 
  echo "<td><img src='images/{$data['foto']}' width='100' height='100'></td>"; 
  echo "<td>".$data['nis']."</td>"; 
  echo "<td>".$data['nama']."</td>"; 
  echo "<td>".$data['jenis_kelamin']."</td>"; 
  echo "<td>".$data['telp']."</td>"; 
  echo "<td>".$data['alamat']."</td>"; 
  echo "<td><a href='form_ubah.php?nis=".$data['nis']."'>Ubah</a></td>"; 
  echo "<td><a href='proses_hapus.php?nis=".$data['nis']."'>Hapus</a></td>"; 
  echo "</tr>"; 
 } 
 ?> 
 </table> 
 <nav> 
        <ul> 
            <li><a href="index.php">Logout</a></li> 
        </ul> 
    </nav> 
</body> 
</html>
