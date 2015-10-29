<?php

class Person {
    private $name;
    private $email;
    private $gender;

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

class Bid {

    private $user;
    private $value;
    private $date;
    private $article;

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

$person1 = new Person();
$person1->name = "Bert Rose";
$person1->email = "rose@phoroneus.com";
$person1->gender = "female";

$person2 = new Person();
$person2->name = "Rush Tommy";
$person2->email = "rush@chronos.com";
$person2->gender = "male";

$article1 = new Article();
$article1->article = "Gold Watch";
$article1->price = 10;
$article1->anotation = "New with tags: A brand-new, unused, and unworn item (including handmade items) in the original packaging
    (such as the original box or bag) and/or with the original tags attached";
$article1->date = '2015-10-26 15:45';

$article2 = new Article();
$article2->article = "Silver Watch";
$article2->price = 5;
$article2->anotation = "New with tags: A brand-new, unused, and unworn item (including handmade items) in the original packaging
    (such as the original box or bag) and/or with the original tags attached";
$article2->date = '2015-10-26 15:45';

$article3 = new Article();
$article3->article = "Bronze Watch";
$article3->price = 2;
$article3->anotation = "New with tags: A brand-new, unused, and unworn item (including handmade items) in the original packaging
    (such as the original box or bag) and/or with the original tags attached";
$article3->date = '2015-10-26 15:45';

$bid1 = new Bid();
$bid1->user = $person1;
$bid1->value = 12;
$bid1->article = $article1;
$bid1->date = '2015-10-25 12:22';

$bid2 = new Bid();
$bid2->user = $person2;
$bid2->value = 13;
$bid1->article = $article1;
$bid2->date = '2015-10-25 12:22';

$bid3 = new Bid();
$bid3->user = $person1;
$bid3->value = 15.5;
$bid3->article = $article1;
$bid3->date = '2015-10-25 12:22';

$bid4 = new Bid();
$bid4->user = $person2;
$bid4->value = 6;
$bid4->article = $article1;
$bid4->date = '2015-10-25 12:22';

$bid5 = new Bid();
$bid5->user = $person1;
$bid5->value = 6.5;
$bid5->article = $article2;
$bid5->date = '2015-10-25 12:22';

$bid6 = new Bid();
$bid6->user = $person1;
$bid6->value = 3;
$bid6->article = $article3;
$bid6->date = '2015-10-25 12:22';

$bid7 = new Bid();
$bid7->user = $person2;
$bid7->value = 3.5;
$bid7->article = $article3;
$bid7->date = '2015-10-25 12:22';


echo "<dl>";
echo "<dt>{$article1->article}</dt>
    <dd><p>{$article1->$anotation}</p>
    <p>Price: {$article1->price}&euro;</p>
    <p>Ended {$article1->date}</p>
    <p><ul>
        <li>{$bid3->user->name}; {$bid3->value}&euro;; {$bid3->date}; Sold;</li>
        <li>{$bid2->user->name}; {$bid3->value}&euro;; {$bid3->date}</li>
        <li>{$bid1->user->name}; {$bid1->value}&euro;; {$bid1->date}</li>
    </ul></p>
    </dd>";

$person3 = new Person();
$person3->name = "Miguel Howard";
$person3->email = "howard@aurigae.com";
$person3->gender = "male";


$article4 = new Article();
$article4->article = "Linen Jacket";
$article4->anotation = "It has a smooth chalk stripe pattern which gives the suit a refined look. The 6 buttons of his double
    breasted jacket are all buttoned up with the exception of one, it adds a casual touch to an elegant look.<br>
    The jacket is the same length all around, it has vents at either side, there's a pocket on either side and there's
    a breast pocket which contains a stylish pocket square.";
$article4->price = 135;
$article4->time = "2015-10-29 12:00";

$bid8 = new Bid();
$bid8->user = $person3;
$bid8->value = 140;
$bid8->date = '2015-10-28 13:58';
$bid8->article = $article4;

$bid9 = new Bid();
$bid9->user = $person2;
$bid9->value = 155;
$bid9->date = '2014-10-29 9:13';
$bid9->article = $article4;

echo "<dt>{$article4->article}</dt>
    <dd><p>{$article4->anotation}</p>
    <p>Price: {$article4->price}&euro;</p>
    <p>Ends {$article4->time}</p>
    <p><ul>
        <li>{$bid9->user->name}; {$bid9->value}&euro;; {$bid9->date}</li>
        <li>{$bid8->user->name}; {$bid8->value}&euro;; {$bid8->date}</li>
    </ul></p>
    </dd>";
echo "</dl>";
