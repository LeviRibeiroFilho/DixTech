<?php
    $servidor = "Localhost";
    $usuario = "dixtech";
    $senha = "12345678";
    $banco = "dbDixPhp";

    $cn = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);
?>