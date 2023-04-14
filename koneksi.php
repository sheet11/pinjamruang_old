<?php

$koneksi = mysqli_connect("localhost","root","","db_jadwal_cbt");

if (mysqli_connect_error()){
    echo "koneksi database gagal : ".mysqli_connect_error;
}

?>
