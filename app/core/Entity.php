<?php
/**
 * Created by PhpStorm.
 * User: dren3
 * Date: 3/28/2018
 * Time: 10:32 PM
 */
abstract class Entity {
    private $id;

    function __construct(){
    }

    public function getId(){
        return $this->id;
    }

    public abstract function toArray();
}