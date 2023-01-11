<?php

try {
    //Conexión a la BD.
    $host = "localhost";
    $dbname = "jobboard";
    $user = "root";
    $pass = "";

    $conn = new PDO("mysql:host = $host; dbname = $dbname", $user, $pass);
    //Linea sacada de la documentación de php. Solo se cambió la variable $conn
    $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e) {
    echo $e -> getMessage();
}
