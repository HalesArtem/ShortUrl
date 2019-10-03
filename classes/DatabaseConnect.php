<?php


class DatabaseConnect

{
    public $connection ;
    public function __construct()
    {
        try {
            $this->connection = new PDO(
                'mysql:host=localhost;dbname=hillel_user',
                'hillel_user',
                '1111'
            );
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch (PDOException $error){
            echo 'problem with connect DatabaseConnect ';
        }
    }
}