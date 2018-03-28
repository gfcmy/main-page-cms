<?php
/**
 * Created by PhpStorm.
 * User: dren3
 * Date: 3/28/2018
 * Time: 10:47 PM
 */
interface DatabaseAdapter {
    /**
     * @param $tableName -
     * @return DatabaseTable - object representing existing database table
     */
public function from($tableName);

    /**
     * @param $config -  db configuration array
     * @return database adatper instance
     */
public static function create($config);
}