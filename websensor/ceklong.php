<?php
    //koneksi database
        $conn = mysqli_connect("localhost","id19112920_root", "<6*HszStx#EF*@km", "id19112920_websensor");
    
    //baca database
    $sql = mysqli_query($conn, "select * from sensor order by id desc");
    
    $data = mysqli_fetch_array($sql);
    $lng = $data["lng"];

    echo $lng;

?>