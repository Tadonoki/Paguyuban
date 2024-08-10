<html> 
<head> 
 <title>CRUD Data Anggota</title> 
 <link rel="stylesheet" type="text/css" href="style.css">
</head> 
<body> 
 <h1 class="tambah-siswa">Tambah Data Anggota</h1> 
 <form action="proses_simpan.php" method="post" enctype="multipart/form-data">
 <table cellpadding="8"> 
 <tr> 
  <td>NIS</td> 
  <td><input type="text" name="nis"></td> 
 </tr> 
 <tr> 
  <td>Nama</td> 
  <td><input type="text" name="nama"></td> 
 </tr> 
 <tr> 
  <td>Jenis Kelamin</td> 
  <td> 
  <input type="radio" name="jenis_kelamin" value="Laki-laki"> Laki-laki 
  <input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan 
  </td> 
 </tr> 
 <tr> 
  <td>Telepon</td> 
  <td><input type="text" name="telp"></td> 
 </tr> 
 <tr> 
  <td>Alamat</td> 
  <td><textarea name="alamat"></textarea></td> 
 </tr> 
 <tr> 
  <td>Foto</td> 
  <td><input type="file" name="foto"></td> 
 </tr> 
 </table> 
 <hr> 
 <input type="submit" value="Simpan" href="home.php"> 
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