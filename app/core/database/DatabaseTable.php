<?php
/**
 * Created by PhpStorm.
 * User: dren3
 * Date: 3/28/2018
 * Time: 10:32 PM
 */
interface DatabaseTable{
    public function getById($id);
    public function getByProperty($propertyName, $value);
    public function search($propertyName, $value);
    public function update($collection);
    public function add($collection);
    public function delete($collection);
}