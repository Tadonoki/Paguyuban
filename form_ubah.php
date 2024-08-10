<html> 
<head> 
 <title>CRUD Data Anggota</title> 
 <link rel="stylesheet" type="text/css" href="style.css">
</head> 
<body> 
 <h1 class="ubah-siswa">Ubah Data Anggota</h1> 
  
 <?php 
 // Load file koneksi.php 
 include "koneksi.php"; 
  
 // Ambil data NIS yang dikirim oleh index.php melalui URL 
 $nis = $_GET['nis']; 
  
 // Query untuk menampilkan Data Anggota berdasarkan NIS yang dikirim 
 $query = "SELECT * FROM paguyuban WHERE nis='".$nis."'"; 
 $sql = mysqli_query($connect, $query);  // Eksekusi/Jalankan query dari variabel $query 
 $data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi 
$sql 
 ?> 
  
 <form method="post" action="proses_ubah.php?nis=<?php echo $nis; ?>" 
enctype="multipart/form-data"> 
 <table cellpadding="8"> 
 <tr> 
  <td>Nama</td> 
  <td><input type="text" name="nama" value="<?php echo $data['nama']; 
?>"></td> 
 </tr> 
 <tr> 
  <td>Jenis Kelamin</td> 
  <td> 
  <?php 
  if($data['jenis_kelamin'] == "Laki-laki"){ 
   echo "<input type='radio' name='jenis_kelamin' value='laki
laki' checked='checked'> Laki-laki"; 
   echo "<input type='radio' name='jenis_kelamin' 
value='perempuan'> Perempuan"; 
  }else{ 
   echo "<input type='radio' name='jenis_kelamin' value='laki
laki'> Laki-laki"; 
   echo "<input type='radio' name='jenis_kelamin' 
value='perempuan' checked='checked'> Perempuan"; 
  } 
  ?> 
  </td> 
 </tr> 
 <tr> 
  <td>Telepon</td> 
  <td><input type="text" name="telp" value="<?php echo $data['telp']; 
?>"></td> 
 </tr> 
 <tr> 
  <td>Alamat</td> 
  <td><textarea name="alamat"><?php echo $data['alamat']; 
?></textarea></td> 
 </tr>
 <tr> 
<td>Foto</td> 
<td> 
<input type="checkbox" name="ubah_foto" value="true"> Ceklis 
jika ingin mengubah foto<br> 
<input type="file" name="foto"> 
</td> 
</tr> 
</table> 
<hr> 
<a href="home.php"><input type="submit" value="Ubah"></a>
<a href="home.php"><input type="button" value="Batal"></a> 
</form> 
<nav> 
        <ul> 
            <li><a href="home.php">Back to Home</a></li> 
            <li><a href="index.php">Logout</a></li> 
        </ul> 
    </nav> 

</body> 
</html>