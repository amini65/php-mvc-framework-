<?php

namespace app\core;

abstract class DbModel
{
//    abstract public static function tableName(): string;
    private static $tableName;
    public static function primaryKey(): string
    {
        return 'id';
    }

    public static function save($attributes)
    {
        $tableName = static::$tableName;
        $params = array_map(fn($attr) => ":$attr", $attributes);
        $key = array_map(fn($attr) => ":$attr", $attributes);
//        var_dump($tableName);
//        die;
//        array_keys($test_array);
//        array_values($test_array);
        $statement = self::prepare("INSERT INTO $tableName (" . implode(",", array_keys($params)) . ") 
                VALUES (" . implode(",", array_values($params)) . ")");
//        var_dump($statement);
//        die;
//        $statement->prepare($statement)->execute($attributes);
        foreach ($attributes as $attribute) {
            $statement->bindValue(":$attribute", $attributes[$attributes]);
        }
//        $pdo->beginTransaction();
        $statement->execute();
        return true;
    }

    public static function prepare($sql): \PDOStatement
    {
        return Application::$app->db->prepare($sql);
    }

    public static function findOne($where)
    {
        $tableName = static::tableName();
        $attributes = array_keys($where);
        $sql = implode("AND", array_map(fn($attr) => "$attr = :$attr", $attributes));
        $statement = self::prepare("SELECT * FROM $tableName WHERE $sql");
        foreach ($where as $key => $item) {
            $statement->bindValue(":$key", $item);
        }
        $statement->execute();
        return $statement->fetchObject(static::class);
    }
    public static function getAll()
    {
        $result=[];
        $array=[];
        $table=static::$tableName;
        $statement = self::prepare("SELECT * FROM $table");
        $statement->execute();
        $result= $statement->fetchAll(\PDO::FETCH_OBJ );
        foreach($result as $key){
            $array[] =  (array)$key;
        }

        return $array;
    }
}