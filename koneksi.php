<?php
    $koneksi =new mysqli("localhost","root","","iot_bb");
    if($koneksi -> connect_error){
        echo "koneksi belum terhubung";
    }
    ?>