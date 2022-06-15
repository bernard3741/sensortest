<<?php
    //koneksi database
        $conn = mysqli_connect("localhost","root", "", "websensor");
    
    //baca database
    $sql = mysqli_query($conn, "select * from sensor");
    $data = mysqli_fetch_array($sql);
    $nilai = $data["nilai_sensor"];

    echo $nilai;

?>