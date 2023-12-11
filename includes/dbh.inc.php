<?php

$dsn = "mysql:host=localhost;dbname=mydatabase"; //data source name address

$dbusername = "root"; //database username
$dbpassword = ""; //database password

try {
    $pdo = new PDO($dsn, $dbusername, $dbpassword);  //php data object is one of three ways to connect
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //
} catch (PDOException $e) {
    echo "connection failed: " . $e->getMessage();
}