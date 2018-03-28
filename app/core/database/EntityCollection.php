<?php
/**
 * Created by PhpStorm.
 * User: dren3
 * Date: 3/28/2018
 * Time: 10:46 PM
 */
interface EntityCollection {
public function each($function);
public function filter($predicate);
public function map($tranformation);
public function reduce($formula);
public function slice($beginIndex, $endIndex);
public function concat($secondCollection);
}