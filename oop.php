<?php

require_once "Article.php";
require_once "Bid.php";
require_once "Person.php";

$articlesArray = array();
$bidArr = array();

$person1 = new Person();
$person1->name = "Bert Rose";
$person1->email = "rose@phoroneus.com";
$person1->gender = "female";

$person2 = new Person();
$person2->name = "Rush Tommy";
$person2->email = "rush@chronos.com";
$person2->gender = "male";

$person3 = new Person();
$person3->name = "Miguel Howard";
$person3->email = "howard@aurigae.com";
$person3->gender = "male";

$article1 = new Article();
$article1->article = "Gold Watch";
$article1->price = 10;
$article1->anotation = "New with tags: A brand-new, unused, and unworn item (including handmade items) in the original packaging
    (such as the original box or bag) and/or with the original tags attached";
$article1->date = '2015-10-26 15:45';
$articlesArray[] = $article1;

$article2 = new Article();
$article2->article = "Silver Watch";
$article2->price = 5;
$article2->anotation = "New with tags: A brand-new, unused, and unworn item (including handmade items) in the original packaging
    (such as the original box or bag) and/or with the original tags attached";
$article2->date = '2015-12-13 15:45';
$articlesArray[] = $article2;

$article3 = new Article();
$article3->article = "Bronze Watch";
$article3->price = 2;
$article3->anotation = "New with tags: A brand-new, unused, and unworn item (including handmade items) in the original packaging
    (such as the original box or bag) and/or with the original tags attached";
$article3->date = '2015-10-26 15:45';
$articlesArray[] = $article3;

$article4 = new Article();
$article4->article = "Linen Jacket";
$article4->anotation = "It has a smooth chalk stripe pattern which gives the suit a refined look. The 6 buttons of his double
    breasted jacket are all buttoned up with the exception of one, it adds a casual touch to an elegant look.<br>
    The jacket is the same length all around, it has vents at either side, there's a pocket on either side and there's
    a breast pocket which contains a stylish pocket square.";
$article4->price = 135;
$article4->time = "2015-10-29 12:00";
$articlesArray[] = $article4;

$bid1 = new Bid();
$bid1->user = $person1;
$bid1->value = 12;
$bid1->article = $article1;
$bid1->date = '2015-10-25 12:22';
$bidArr[$article1->article][] = $bid1;

$bid2 = new Bid();
$bid2->user = $person2;
$bid2->value = 13;
$bid1->article = $article1;
$bid2->date = '2015-10-25 12:22';
$bidArr[$article1->article][] = $bid2;

$bid3 = new Bid();
$bid3->user = $person1;
$bid3->value = 15.5;
$bid3->article = $article1;
$bid3->date = '2015-10-25 12:22';
$bid3->sold = 'Sold';
$bidArr[$article1->article][] = $bid3;

$bid4 = new Bid();
$bid4->user = $person2;
$bid4->value = 6;
$bid4->article = $article2;
$bid4->date = '2015-10-25 12:22';
$bidArr[$article2->article][] = $bid4;

$bid5 = new Bid();
$bid5->user = $person1;
$bid5->value = 6.5;
$bid5->article = $article2;
$bid5->date = '2015-10-25 12:22';
$bidArr[$article2->article][] = $bid5;

$bid6 = new Bid();
$bid6->user = $person1;
$bid6->value = 3;
$bid6->article = $article3;
$bid6->date = '2015-10-25 12:22';
$bidArr[$article3->article][] = $bid6;

$bid7 = new Bid();
$bid7->user = $person2;
$bid7->value = 3.5;
$bid7->article = $article3;
$bid7->date = '2015-10-25 12:22';
$bidArr[$article3->article][] = $bid7;

$bid8 = new Bid();
$bid8->user = $person3;
$bid8->value = 140;
$bid8->date = '2015-10-28 13:58';
$bid8->article = $article4;
$bidArr[$article4->article][] = $bid8;

$bid9 = new Bid();
$bid9->user = $person2;
$bid9->value = 155;
$bid9->date = '2014-10-29 9:13';
$bid9->article = $article4;
$bidArr[$article4->article][] = $bid9;


    $html = "<dl>";
foreach ($articlesArray as $article) {

    $html .= "<dt>{$article->article}</dt>
    <dd><p>{$article->anotation}</p>
    <p>Price: {$article->price}&euro;</p>";

    if(strtotime($article->date) < time()){

        $html .= "<p>Ended {$article->date}</p>";
    }else{
        $html .= "<p>Ends {$article->date}</p>";
    }


    $html .= "<p><ul>";
    $bids = array_reverse($bidArr[$article->article]);

        foreach($bids as $bid){
            $html .= "
            <li>{$bid->user->getLastName()};
             {$bid->value}&euro;
             {$bid->date};";
             $html .= ($bid->sold)?' '.$bid->sold.';':'';
             $html .= "</li>";
        }

    $html .= "</ul></p>
    </dd>";

}
    $html .= "</dl>";

echo $html;