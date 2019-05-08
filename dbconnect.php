<?php
    //1.create connection
    $host = "localhost";
    $db_username = "root";
    $db_passwd = "";
    $db_name = "horoscope";

    $conn;

    try {
        $conn = mysqli_connect($host, $db_username, $db_passwd, $db_name);


    } catch (Exception $exp) {
        echo "Connection error: " . $exp.getMessage();
    }

    //set character set utf-8
     mysqli_query($conn, 'SET CHARACTER SET UTF8');


?>