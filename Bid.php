<?php
/**
 * Created by PhpStorm.
 * User: renaldas
 * Date: 15.11.1
 * Time: 10.36
 */

class Bid {

    private $user;
    private $value;
    private $date;
    private $article;
    private $sold ;

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