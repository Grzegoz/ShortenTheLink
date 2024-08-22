<?php

$host = 'localhost';
$dbname = 'postgres';
$user = 'postgres';
$password = '1234';

try {
    $dsn = "pgsql:host=$host;dbname=$dbname;port=5000";
    $pdo = new PDO($dsn, $user, $password, [PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION]);
} catch (PDOException $e) {
    echo "Ошибка подключения: " . $e->getMessage();
    die();
}