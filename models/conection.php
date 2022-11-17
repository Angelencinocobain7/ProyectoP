<?php

    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "login_register_db";


    $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname );
    if(mysqli_connect_error()) {
        die('connect Error('.
        mysqli_connect_errno().')'.mysqli_connect_error());

    }