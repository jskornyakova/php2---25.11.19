<?php

namespace app\modules;

class Good extends Model
{
    /**
     * Возвращает имя таблицы в БД
     * @return string
     */
    public function getTableName(): string
    {
        return 'goods';
    }


}