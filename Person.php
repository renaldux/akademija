<?php
/**
 * Created by PhpStorm.
 * User: renaldas
 * Date: 15.11.1
 * Time: 10.35
 */
namespace Person;

class Person {
    private $name;
    private $email;
    private $gender;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return enum 'male','female'
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @param string $gender ['male','female']
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
        return $this;
    }

    /**
     * @return string lastName
     */
    public function getLastName(){
        if(!empty($this->name)){
            $nameArr = explode(' ', $this->name);
            return end($nameArr);
        }
        return '';
    }
}