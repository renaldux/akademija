<?php

namespace oop;

require_once "Person.php";
require_once "Bid.php";
require_once "Article.php";

use Article;
use Person;
use Bid;

$articlesArray = [];
$bidArr = [];

$person1 = new Person\Person;
$person1->setName("Bert Rose")
        ->setEmail("rose@phoroneus.com")
        ->setGender("female");

$person2 = new Person\Person;
$person2->setName("Rush Tommy")
        ->setEmail("rush@chronos.com")
        ->setGender("male");

$person3 = new Person\Person;
$person3->setName("Miguel Howard")
        ->setEmail("howard@aurigae.com")
        ->setGender("male");

$article1 = new Article\Article;
$article1->setArticle("Gold Watch")
            ->setPrice(10)
            ->setAnotation("New with tags: A brand-new, unused, and unworn item (including handmade items) in the original packaging
    (such as the original box or bag) and/or with the original tags attached")
            ->setDate('2015-10-26 15:45');
$articlesArray[] = $article1;

$article2 = new Article\Article;
$article2->setArticle("Silver Watch")
            ->setPrice(5)
            ->setAnotation("New with tags: A brand-new, unused, and unworn item (including handmade items) in the original packaging
    (such as the original box or bag) and/or with the original tags attached")
            ->setDate('2015-12-13 15:45');
$articlesArray[] = $article2;

$article3 = new Article\Article;
$article3->setArticle("Bronze Watch")
            ->setPrice(2)
            ->setAnotation("New with tags: A brand-new, unused, and unworn item (including handmade items) in the original packaging
    (such as the original box or bag) and/or with the original tags attached")
            ->setDate('2015-10-26 15:45');
$articlesArray[] = $article3;

$article4 = new Article\Article;
$article4->setArticle("Linen Jacket")
            ->setAnotation("It has a smooth chalk stripe pattern which gives the suit a refined look. The 6 buttons of his double
    breasted jacket are all buttoned up with the exception of one, it adds a casual touch to an elegant look.<br>
    The jacket is the same length all around, it has vents at either side, there's a pocket on either side and there's
    a breast pocket which contains a stylish pocket square.")
    ->setPrice(135)
    ->setDate("2015-10-29 12:00");
$articlesArray[] = $article4;

$bid1 = new Bid\Bid;
$bid1->setUser($person1)
        ->setValue(12)
        ->setArticle($article1)
        ->setDate('2015-10-25 12:22');
$bidArr[$article1->getArticle()][] = $bid1;

$bid2 = new Bid\Bid;
$bid2->setUser($person2)
    ->setValue(13)
    ->setArticle($article1)
    ->setDate('2015-10-25 12:22');

$bidArr[$bid2->getArticle()->getArticle()][] = $bid2;

$bid3 = new Bid\Bid;
$bid3->setUser($person1)
    ->setValue(15.5)
    ->setArticle($article1)
    ->setDate('2015-10-25 12:22')
    ->setSold('Sold');
$bidArr[$bid3->getArticle()->getArticle()][] = $bid3;

$bid4 = new Bid\Bid;
$bid4->setUser($person2)
    ->setValue(6)
    ->setArticle($article2)
    ->setDate('2015-10-25 12:22');
$bidArr[$bid4->getArticle()->getArticle()][] = $bid4;

$bid5 = new Bid\Bid;
$bid5->setUser($person1)
    ->setValue(6.5)
    ->setArticle($article2)
    ->setDate('2015-10-25 12:22');
$bidArr[$bid5->getArticle()->getArticle()][] = $bid5;

$bid6 = new Bid\Bid;
$bid6->setUser($person1)
    ->setValue(3)
    ->setArticle($article3)
    ->setDate('2015-10-25 12:22');
$bidArr[$bid6->getArticle()->getArticle()][] = $bid6;

$bid7 = new Bid\Bid;
$bid7->setUser($person2)
    ->setValue(4)
    ->setArticle($article3)
    ->setDate('2015-10-25 12:22');
$bidArr[$bid7->getArticle()->getArticle()][] = $bid7;

$bid8 = new Bid\Bid;
$bid8->setUser($person3)
    ->setValue(140)
    ->setArticle($article4)
    ->setDate('2015-10-28 13:58');
$bidArr[$bid8->getArticle()->getArticle()][] = $bid8;

$bid9 = new Bid\Bid;
$bid9->setUser($person2)
    ->setValue(155)
    ->setArticle($article4)
    ->setDate('2014-10-29 9:13');
$bidArr[$bid9->getArticle()->getArticle()][] = $bid9;


    $html = "<dl>";
foreach ($articlesArray as $article) {

    $html .= "<dt>{$article->getArticle()}</dt>
    <dd><p>{$article->getAnotation()}</p>
    <p>Price: {$article->getPrice()}&euro;</p>";

    if(strtotime($article->getDate()) < time()){

        $html .= "<p>Ended {$article->getDate()}</p>";
    }else{
        $html .= "<p>Ends {$article->getDate()}</p>";
    }


    $html .= "<p><ul>";
    $bids = array_reverse($bidArr[$article->getArticle()]);

        foreach($bids as $bid){
            $html .= "
            <li>{$bid->getUser()->getLastName()};
             {$bid->getValue()}&euro;
             {$bid->getDate()};";
             $html .= ($bid->getSold())?' '.$bid->getSold().';':'';
             $html .= "</li>";
        }

    $html .= "</ul></p>
    </dd>";

}
    $html .= "</dl>";

echo $html;