<?php
/**
 * Created by PhpStorm.
 * User: renaldas
 * Date: 15.11.1
 * Time: 10.35
 */

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
     * @param enum $gender ['male','female']
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
            return end(explode(' ', $this->name));
        }
        return '';
    }
}