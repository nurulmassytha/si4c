<?php
        //include koneksi
        include "DB.php";
        //buat sql
        $sql="INSERT INTO `mahasiswa` (`nim`, `nama`, `alamat`, `jkl`, `agama`, `email`,
         `pwd`, `created_at`, `update_at`) VALUES ('123457', 'nurul', 'medan', 
         'perempuan', 'islam', 'nurul@gmail.com', '123456', current_timestamp(),
          '2024-04-22 05:13:36.000000')";

        //proses sql ke database
        $q=mysqli_query($koneksi,$sql)or die('SQL_error()');
        if($q){
            echo "Data Berhasil disimpan";
        }else{
            echo "Gagal menyimpan data! "  . mysqli_error();
        }
?>