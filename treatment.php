<?php

if ($_POST['isset'] == 1 && !$_POST['url'] == null){
    require_once 'classes/DatabaseConnect.php';
    session_start();

    $token = md5(uniqid($_POST['url']));
    $originalUrl = $_POST['url'];
    $shortUrl = 'home.local/shortUrl.php?shortUrl=' . "$token" . '';

    $pdo = new DatabaseConnect();
    $sql = '
    INSERT INTO urlTable SET
        `originalUrl`=:originalUrl,
        `shortUrl`=:shortUrl,
        `created`=:created
        ';
    $query = $pdo->connection->prepare($sql);
    $query->bindValue(':originalUrl', $_POST['url']);
    $query->bindValue(':shortUrl', $shortUrl);
    $query->bindValue(':created', $token);
    $query->execute();
    $_SESSION = ['shortUrl' => $shortUrl];
    header('Location: ../index.php');
}else
{
    header('Location: ../index.php');
}