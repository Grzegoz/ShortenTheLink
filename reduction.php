<?php

include('connect.php');

$url = trim($_POST['long_url']);
$sql = $pdo->prepare("INSERT INTO urls(url) VALUES ('$url') RETURNING id ");
if ($sql) {
    $sql->execute();
    $results = $sql->fetch(PDO::FETCH_ASSOC);
    $id = $results['id'];
    echo "сокращенная ссылка: http://localhost:8000/" . $id;
}
