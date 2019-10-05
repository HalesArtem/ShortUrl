<?php


class Url
{
    protected $object;

public function getAll()
{
    $pdo = new DatabaseConnect();

    $sql = 'select * from urlTable';

    $query = $pdo->connection->query($sql);

    return $objectUrls = $query->fetchAll(PDO::FETCH_ASSOC);
}


}