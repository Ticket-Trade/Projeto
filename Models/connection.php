<?php
$host = 'localhost';
$bd = 'ticket_trade';

$user = 'root';
$password = 'Fatec@123';
$charset = 'utf8mb4';

$dsn = "mysql:host->$host;dbname=$bd;charset=$charset";

try {
    $pdo = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    throw new PDOException($e->getMessage(), $e->getCode());
}
?>