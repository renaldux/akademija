<?php
/**
 * Created by PhpStorm.
 * User: renaldas
 * Date: 15.11.1
 * Time: 10.35
 */

class Article{
    private $article;
    private $price;
    private $anotation;
    private $date;

    public function __get($property) {
        if (property_exists($this, $property)) {
            return $this->$property;
        }
    }

    public function __set($property, $value) {
        if (property_exists($this, $property)) {
            $this->$property = $value;
        }

        return $this;
    }
}
