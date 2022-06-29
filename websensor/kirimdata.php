<?php
    //koneksi database
    $conn = mysqli_connect("localhost","root", "", "websensor");

    //read data dari esp
    $id = $_GET['id'];
    $lng = $_GET['lng'];
    $lat = $_GET['lat'];

    $simpan = mysqli_query($conn, "UPDATE sensor SET lng='$lng', lat='$lat' WHERE id='$id' ");

    if($simpan)
        echo"Berhasil dikirim";
    else
        echo"Gagal Terikirim"

?>
