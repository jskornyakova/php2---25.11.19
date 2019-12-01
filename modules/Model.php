<?php


namespace app\modules;


use app\services\DB;
use app\services\IDB;

/**
 * Class Model
 * @package app\modules
 * @property string tableName
 */
abstract class Model
{
    /**
     * @var DB
     */

    protected $db;

    public function __construct(IDB $db)
    {
        $this->db = $db;
    }

    /**
     * Возвращает имя таблицы в БД
     * @return string
     */
    abstract public function getTableName(): string;

    public function getOne($id){
        $tableName = $this->getTableName();
        $sql = "SELECT * FROM {$tableName} WHERE id = {$id}";
        return $this->db->find($sql);
    }
    public function getAll(){
        $tableName = $this->getTableName();
        $sql = "SELECT * FROM {$tableName}";
        return $this->db->findAll($sql);
    }
}