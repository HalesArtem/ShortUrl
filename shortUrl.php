<?php
require_once 'classes/DatabaseConnect.php';
try {
$pdo = new DatabaseConnect();

$sql = 'select originalUrl from urlTable where created=:created';

$query = $pdo->connection->prepare($sql);

$query->bindValue(':created', $_GET['shortUrl']);

$query->execute();

$arrayViewer = $query->fetchAll();
$getOriginalUrl = $arrayViewer['0']['originalUrl'];
header('Location: ' . "$getOriginalUrl" . '');

} catch (PDOException $e) {
    echo 'problem with redirect to page';
}