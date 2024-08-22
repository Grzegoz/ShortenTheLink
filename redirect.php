<?php

function redirect($id)
{
    include('connect.php');
    $sql = $pdo->prepare("SELECT url FROM urls WHERE id = $id");
    $sql->execute();
    $result_url = $sql->fetch(PDO::FETCH_ASSOC);
    if (!$result_url) {
        echo "Ссылка не найдена.";
        die();
    }
    $originalUrl = $result_url['url'];
    header("Location: $originalUrl");
}
