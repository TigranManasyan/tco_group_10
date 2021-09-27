<?php
//static
//    class Users {
//        public static $first_name = 'John';
//
//        public static function getUser() {
//            return self::$first_name;
//        }
//    }
////    echo Users::$first_name;
//echo Users::getUser();


//final
//final class Animal {
//    protected $name;
//    public function __construct($name)
//    {
//        $this->name = $name;
//    }
//
//    final public function getName()
//    {
//        return $this->name;
//    }
//}
//
//class Dogs extends Animal {
//    public function getName()
//    {
//        return 'Hello Dog, your name ' . $this->name;
//    }
//}
//
//class Cats extends Animal {
//}
////$dog1 = new Dogs('Rex');
//$cat1 = new Cats('Tom');
////echo $dog1->getName();
//echo $cat1->getName();


//__get, __set
//class A {
//    private $x;
//    private $y;
//    private $z;
//    public function __set($key, $value) {
//        $this->$key = $value;
//    }
//    public function __get($key) {
//        echo $this->$key . '<br>';
//    }
//}
//$obj1 = new A();
//$obj1->x = 10;
//$obj1->y = 230;
//echo $obj1->x;
//echo $obj1->y;




