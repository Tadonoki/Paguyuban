<?php 
$dbname='paguyuban1'; 
$host='localhost'; 
$password=''; 
$username='root'; 
//Koneksi Ke MySQL 
$cnn = mysqli_connect($host,$username,$password,$dbname);   
//Membuat Koneksi  
if(!$cnn){  
 die("Koneksi Failed : ".mysqli_connect_error()); }  
//Membuat Tabel 
$sql ="CREATE TABLE paguyuban (
    nis CHAR(10) PRIMARY KEY,
    nama VARCHAR(255) NOT NULL,
    jenis_kelamin VARCHAR(10) NOT NULL,
    telp VARCHAR(20) NOT NULL,
    alamat TEXT NOT NULL,
    foto VARCHAR(255) NOT NULL
)";
 
if (mysqli_query($cnn, $sql)){  
 echo "Table Berhasil di Buat";  
 } else {  
 echo "Table Gagal di Buat :".mysqli_error($cnn); }  
 mysqli_close($cnn);  
 ?>