<?php

require_once '../classes/DatabaseConnect.php';

$pdo = new DatabaseConnect();


try {

    $sql = '
    CREATE TABLE urlTable (
        `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY, 
        `originalUrl` VARCHAR(255),
        `shortUrl` VARCHAR(255),
        `created` VARCHAR(255)
    )
';
    $pdo->connection->exec($sql);

} catch (PDOException $e) {

    echo 'problem with migrate';
}
echo 'migrate complete';
