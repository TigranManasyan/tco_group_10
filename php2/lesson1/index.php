<?php

   /* class Users {
        public $user = 'John Smith';
    }

    $obj1 = new Users();
    $obj2 = new Users();
    echo $obj1->user;
    echo '<br>';
    echo $obj2->user;

    echo '<br>';
    echo '<br>';

    $obj1->user = 'John Doe';
    echo '<br>';
    echo $obj2->user;*/


//class Users {
////    protected $user = 'John Smith';
//    private $user = 'John Smith';
//}
//
//$obj1 = new Users();
//$obj2 = new Users();
//echo $obj1->user;
//echo '<br>';
//echo $obj2->user;
//
//echo '<br>';
//echo '<br>';
//
//$obj1->user = 'John Doe';
//echo '<br>';
//echo $obj2->user;

//Tesaneliutyan tiruytner` scope

//public bac drsum karox enq ogtagorcel
//protected karox enq ogtagorcel tvyal class-i nersum ka, jarang classerum
//private karox enq ogtagorcel tvyal class-um

//class Users {
////    public $username = 'John';
//    private $username = 'John';
//    public function getName()
//    {
//        return $this->username;
//    }
//}
//
//$user1 = new Users();
//
//echo $user1->getName();



/*class Person {
    public $first_name;
    public $last_name;
    public function setValues($first_name, $last_name)
    {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
    }

    public function getValues()
    {
        return 'Hello ' . $this->first_name . ' ' . $this->last_name . '<br>';
    }
}

$person1 = new Person();
$person1->setValues('John', 'Doe');
echo $person1->getValues();
$person2 = new Person();
$person2->setValues('Tom', 'Smith');
echo $person2->getValues();*/


/*class Shop {
    private $products = [
        ['id' => 1, 'name' => 'Notebook', 'price' => 140000, 'quantity' => 5],
        ['id' => 2, 'name' => 'Netbook', 'price' => 140000, 'quantity' => 15],
        ['id' => 3, 'name' => 'Notebook', 'price' => 180000, 'quantity' => 75],
        ['id' => 4, 'name' => 'Notebook', 'price' => 1200000, 'quantity' => 5],
        ['id' => 5, 'name' => 'PC', 'price' => 180000, 'quantity' => 65],
        ['id' => 6, 'name' => 'Mouse', 'price' => 12000, 'quantity' => 15],
        ['id' => 7, 'name' => 'Notebook', 'price' => 145000, 'quantity' => 35]
    ];

    public function getProductOfPrice($price)
    {
        for($i = 0; $i < count($this->products);$i++) {
            if($this->products[$i]['price'] == $price) {
                echo $this->products[$i]['name'] . '<br>';
            }
        }
    }
}

$prod1 = new Shop();
$prod1->getProductOfPrice(140000);*/


/*class User {
    public function getClassName()
    {
        return __CLASS__;
    }
}

$ob = new User();
echo $ob->getClassName();*/

//class User {
//    public const USER = 'John';
//    public function getClassName()
//    {
//        return self::USER;
//    }
//    /*public function getClassName()
//    {
//        return __CLASS__;
//    }*/
//}
//
//$ob = new User();
//echo $ob->getClassName();


//https://www.php.net/manual/ru/oop5.intro.php
//https://www.php.net/manual/ru/language.oop5.properties.php
//https://www.php.net/manual/ru/language.oop5.constants.php
//https://www.php.net/manual/ru/language.oop5.visibility.php
