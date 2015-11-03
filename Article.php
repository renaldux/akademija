<?php
/**
 * Created by PhpStorm.
 * User: renaldas
 * Date: 15.11.1
 * Time: 10.35
 */

namespace Article;

class Article{
    private $article;
    private $price;
    private $anotation;
    private $date;

    /**
     * @return Article object
     */
    public function getArticle()
    {
        return $this->article;
    }

    /**
     * @param string $article
     */
    public function setArticle($article)
    {
        $this->article = $article;
        return $this;
    }

    /**
     * @return price
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param int $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
        return $this;
    }

    /**
     * @return string $anotation
     */
    public function getAnotation()
    {
        return $this->anotation;
    }

    /**
     * @param string $anotation
     */
    public function setAnotation($anotation)
    {
        $this->anotation = $anotation;
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
     * @param string $date
     */
    public function setDate($date)
    {
        $this->date = $date;
        return $this;
    }


}
