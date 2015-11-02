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

    /**
     * @return User $user
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param User $user
     */
    public function setUser(Person $user)
    {
        $this->user = $user;
        return $this;
    }

    /**
     * @return int
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param int $value
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }

    /**
     * @return date
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param date $date
     */
    public function setDate($date)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * @return string
     */
    public function getArticle()
    {
        return $this->article;
    }

    /**
     * @param string $article
     */
    public function setArticle(Article $article)
    {
        $this->article = $article;
        return $this;
    }

    /**
     * @return string
     */
    public function getSold()
    {
        return $this->sold;
    }

    /**
     * @param string $sold
     */
    public function setSold($sold)
    {
        $this->sold = $sold;
        return $this;
    }


}