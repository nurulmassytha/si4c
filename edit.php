<!-- Mengambil data yang akan diedit, berdasarkan nim yang dipilih dan
dikirim melalui link (get) -->
<?php
$nim=$_GET['nim'];
 //membuat sql tampil data
$sqldata="SELECT * FROM mahasiswa WHERE nim='$nim'";
//ambil koneksi data
require_once "DB.php";
//proses sql
$query=mysqli_query($koneksi,$sqldata);
//mengubah data ke array asosiatif, tidak menggunakan perulangan karenadatanya hanya 1.
 $data=mysqli_fetch_assoc($query);
//selanjutnya tampilkan pada field dibawah.
?>
<h2>Update Data Mahasiswa</h2>
<!-- tag form -->
 <form action="update.php" method="POST">
<label>Nomor Induk Mahasiswa :</label>
<input type="text" name="nim" value="<?=$data['nim']?>"
placeholder="Nomor Induk Mahasiswa" required>
<br>
<label>Nama Mahasiswa :</label>
<input type="text" name="nama" id="nama" value="<?=$data['nama']?>"
placeholder="Nama Lengkap" required>
<br>
<label for="">Alamat :</label>
<input type="text" name="alamat" id="alamat" value="<?=$data['alamat']?>" placeholder="Alamat Lengkap" required>
<br>
<label for="">Jenis Kelamin :</label>
<select name="jkl" id="jkl">
<option value="<?=$data['jkl']?>"
selected><?=$data['jkl']?></option>
<option value="PRIA">PRIA</option>
<option value="WANITA">WANITA</option>
</select>
<br>
<label for="">Agama :</label>
<select name="agama" id="agama">
<option value="<?=$data['agama']?>"
selected><?=$data['agama']?></option>
<option value="islam">islam</option>
<option value="kristen khatolik">kristen khatolik</option>
 <option value="krsiten protestan">kristen protestan</option>
 <option value="krsiten protestan">Budha</option>
 <option value="krsiten protestan">Hindu</option>
 <option value="krsiten protestan">Konghucu</option>
</select>
<br>
<label for="">Email :</label>
<input type="text" name="email" id="email" value="<?=$data['email']?>"
required>
<br>
<label for="">Password :</label>
<input type="text" name="pwd" id="pwd" value="<?=$data['pwd']?>"
required>
<br>
<button type="submit" name="kirim" value="kirim">Update Data</button>
</form>