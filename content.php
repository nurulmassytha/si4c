<?php
//chek data dari link dengan variabel page
if(empty($_GET['page'])){
//jika page kosong
include "home.php";
}else{
    //jika page berisi
$page=$_GET['page'];
$file=$page.".php";  //exp page=about -> about.php

// cek file ada atau tidak
if(file_exists($file)){
    //jika ada
    include $file;
}else{
    //jika file tidak ada include home.php
    include "home.php";
}
}

?>