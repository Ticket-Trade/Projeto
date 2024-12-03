<?php
$host = "localhost";
$bd = "tickettrade";

$user = "root";
$password = "";
$charset = "utf8mb4";

$dsn = "mysql:host=$host;dbname=$bd;charset=$charset";

try {
    $pdo = new PDO($dsn, "root", "");
} catch (PDOException $e) {
    throw new PDOException($e->getMessage(), $e->getCode());
}
