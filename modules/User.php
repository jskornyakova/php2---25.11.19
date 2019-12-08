<?php

namespace app\modules;

class User extends Model
{
    /**
     * Возвращает имя таблицы в БД
     * @return string
     */
    public function getTableName(): string
    {
        return 'users';
    }
}