<?php
$host = "localhost";
        $username = "root";
        $password ="";
        $database_in_use = "test";

        $mysqli = new mysqli($host, $username, $password, $database_in_use);

        $mysqli = new mysqli("127.0.0.1", $username, $password,  $database_in_use, 3306);

?>