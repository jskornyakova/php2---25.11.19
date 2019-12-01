<?php

namespace app\services;

class DB implements IDB
{
    public $connection = null;
    function getConnection(){
        if (is_null($this->connection)){
            $this->connection = mysqli_connect('localhost', 'root', '', 'shop');
        }
        echo "Подключаюсь к БД...<br>";
        return $this->connection;
    }
    public function find(string $sql){
        return $sql;
    }

    public function findAll (string $sql){
        return $sql;
    }

    public function insert()
    {
        // TODO: Implement insert() method.
    }

}