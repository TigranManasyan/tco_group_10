<?php

/*class A {
    public function __construct() {
        echo 'Hello';
    }
}

$OB = new A();*/

/*class A {
    public static $x = 10;
    public $y = 20;
    public function sum() {
        echo $this->y + self::$x;
    }
}

$ob = new A();
echo $ob->sum();
echo A::$x;*/


/*class Cars {
    protected $model;
    public function __construct($model)
    {
        $this->model = $model;
    }
}

class Mercedes extends Cars {
    protected $price;
    public function __construct($model, $price)
    {
        parent::__construct($model);
        $this->price = $price;
    }

    public function getCar() {
        return $this->model . ' ' . $this->price;
    }
}*/

/*interface Shablon {
    public function getUser();
    public function setUser($username);
}

class Users {
    public function __construct() {
        echo 'Hello';
    }
}

class Guest extends Users implements Shablon {
    public $username;
    public function getUser() {
        return $this->username;
    }
    public function setUser($username) {
        $this->username = $username;
    }
}

$user = new Guest();
$user->setUser("John Smith");
echo $user->getUser();*/


