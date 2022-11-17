<?php
    $conexion = mysqli_connect("localhost", "root", "", "paginavinos");

    if(mysqli_connect_errno()){
        echo 'Conexion Fallida : ', mysqli_connect_error();
        exit();
    }
?>