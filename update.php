<?php
//Disini akan digunakan kode PHP untuk memproses data
//Ambil koneksi ke basisdata, karena data ini akan disimpan didalambasisdata.
require_once "DB.php";
//cek form yang di kirim
if($_SERVER['REQUEST_METHOD']=="POST"){
//ambil data dari form, simpan dalam variabel
$nim=$_POST['nim']; 
//yg didalam tanda kutip harus sama dengan name diform
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$jkl=$_POST['jkl'];
$agama=$_POST['agama'];
$email=$_POST['email'];
$pwd=$_POST['pwd'];
//buat SQL untuk simpan data
$sqlupdate="UPDATE mahasiswa SET nama='$nama',
alamat='$alamat',email='$email',pwd='$pwd' WHERE nim='$nim'";
//Proses ke mysql server, menggunakan mysqli_query()
if(mysqli_query($koneksi,$sqlupdate)){
//redirect ke halaman read.php jika proses simpan berhasil
echo "<script> alert('Data sudah diupdate');
window.location.assign('read.php'); </script>";
 }
 }
//Sampai disini program sudah siap, kita coba jalankan.
 //Ok. program untuk tambah data (save) sudah selesai.
 //ketika input jgn menggunakan nim yg sama karena nim adalah primary key,jiik ingin kontrol dari sistem jg bisa...kita bahas pertemuan beriku