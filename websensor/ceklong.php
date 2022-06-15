<?php
    //koneksi database
        $conn = mysqli_connect("localhost","root", "", "websensor");
    
    //baca database
    $sql = mysqli_query($conn, "select * from sensor order by id desc");
    
    $data = mysqli_fetch_array($sql);
    $long = $data["long"];

    echo $long;

?>