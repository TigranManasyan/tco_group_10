<?php

    /*class User {
        public $first_name;
        public $last_name;
        public function __construct($fname, $lname)
        {
            echo 'hi i am construct <br>';
            $this->first_name = $fname;
            $this->last_name = $lname;
        }
        public function getValues()
        {
            return '<p>' . $this->first_name . ' ' . $this->last_name . '</p>';
        }
        public function __destruct() {
            echo 'Hello i am destruct <br>';
        }
    }

    $user1 = new User('John', 'Smith');
    $user2 = new User('John', 'Doe');
    echo $user1->getValues();
    echo $user2->getValues();*/


//inheritance

//class Cars {
//    protected $model;
//    protected $price;
//    public function __construct($model, $price)
//    {
//        $this->model = $model;
//        $this->price = $price;
//    }
//    public function getModel()
//    {
//        return $this->model;
//    }
//    public function getPrice()
//    {
//        return $this->price . '$';
//    }
//    public function getCar()
//    {
//        return '<p>Car model` ' . $this->model .  ', price`  ' . $this->price . '$. </p> ';
//    }
//}
//
//    class Mercedes extends Cars {
//
//    }
//
//    class BMW  extends Cars {
//
//    }
//
//    class Ferrari  extends Cars {
//
//    }
//
//    $mercedes1 = new Mercedes('S-Class', 18000);
//    $BMW = new BMW('AAAA', 4500);
//    echo $mercedes1 -> getPrice();
//    echo $mercedes1 -> getCar();
//    echo $BMW -> getPrice();
//    echo $BMW -> getCar();


/*class Cars {
    protected $model;
    public function __construct($model)
    {
        $this->model = $model;
    }

    public function getValue()
    {
        return $this->model;
    }
}

class Mercedes extends Cars {
    protected $price;
    public function __construct($model, $price)
    {
        parent::__construct($model);
        $this->price = $price;
    }

    public function getCar()
    {
        return '<p>Car model` ' . $this->model .  ', price`  ' . $this->price . '$. </p> ';

    }
}

$ob1 = new Mercedes('S-Class',18000);
echo $ob1->getCar();
echo $ob1->getValue();*/


/*class DB {
    private const DB_HOST = 'localhost';
    private const DB_USER = 'root';
    private const DB_PASSWORD = '';
    private const DB_NAME = 'edu';
    private $conn;

    public function __construct()
    {
        $this->conn = mysqli_connect(
            self::DB_HOST,
            self::DB_USER,
            self::DB_PASSWORD,
            self::DB_NAME
        );

        if(!$this->conn) {
            echo 'Fail! ~ ' . mysqli_connect_error($this->conn);
        }
    }

    public function select_categories($table_name)
    {
        $sql = "SELECT * FROM $table_name";
        $result = mysqli_query($this->conn, $sql);
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    }

    public function insert_category($name) {
        $sql = "INSERT INTO `categories` (`name`) VALUES ('$name')";
        mysqli_query($this->conn, $sql);
    }

    public function select_name($name) {
        $sql = "SELECT * FROM `categories` WHERE `name` = '$name'";
        $result = mysqli_query($this->conn, $sql);
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    }

}

$db = new DB();*/

/*echo '<pre>';
//    print_r($db->select_categories('products'));
echo '</pre>';*/
/*$db->insert_category('RAM1');

echo '<pre>';
   print_r($db->select_categories('categories'));
echo '</pre>';*/

/*echo '<pre>';
print_r($db->select_name('PC'));
echo '</pre>';*/



//CREATE TABLE categories (id INT AUTO_INCREMENT PRIMARY KEY, name VARCHAR(30));

// SELECT products.prod_name, products.price, products.quantity, categories.name FROM `products`
//INNER JOIN `categories` ON products.categ_id = categories.id WHERE products.categ_id = $id b