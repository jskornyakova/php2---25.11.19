<?php


namespace app\modules;


class Basket extends Model
{

    /**
     * Возвращает имя таблицы в БД
     * @return string
     */
    public function getTableName(): string
    {
        return 'basket';
    }
}