<?php
/*class index  {

}*/

//Abstract class
//https://www.php.net/manual/ru/language.oop5.abstract.php

/*abstract class Users {
    public function hello() {
        echo 'Hello';
    }
    abstract public function welcome();
}

class Guest extends Users {
    public function welcome()
    {

    }
}

$guest1 = new Guest();

$guest1->hello();*/

//interface
//https://www.php.net/manual/ru/language.oop5.interfaces.php

//interface Users {
//    public function getUser();
//    public function __construct();
//    public function getName($name);
//}
//
//class Guest implements Users {
//    public function getUser() {
//
//    }
//    public function __construct() {
//
//    }
//    public function getName($name) {
//
//    }
//}


//Trait
//https://www.php.net/manual/ru/language.oop5.traits.php

/*trait User {
    public function getUser() {
        return $this->user;
    }
    public function getAge() {
        return $this->age;
    }
}

class Users {
    public $user = 'John';
    public $age = 25;
    use User;
}

$ob = new Users();
echo $ob->getUser();


class Admins {
    public $user = 'John';
    public $age = 25;
    use User;
}

$ob1 = new Admins();
echo $ob1->getUser();*/


/*class Db  {
    protected $conn;
    protected function connect()
    {
        $this->conn = new mysqli('localhost', 'root', '', 'edu');
        if($this->conn->connect_errno) {
            echo 'Fail! ~ Error ' . $this->conn->connect_error;
        } else {
            echo 'Connected!';
        }
    }

    public function select() {
        $sql = 'SELECT * FROM `users`';
        $this->connect();
        $result = $this->conn->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }
}

$db = new Db();

echo '<pre>';
    print_r($db->select());
echo '</pre>';
$users = $db->select();

echo '<table border="1" cellpadding="15" cellspacing="0">';
echo '<thead>
        <tr>
            <th>
                Id
            </th>
            <th>
                Fullname
            </th>
            <th>
                Age
            </th>
            <th>
                Email
            </th>
        </tr>
        </thead><tbody>';

    for($i = 0; $i < count($users); $i++) {
        echo '<tr>';
            echo '<td>' . $users[$i]['id'] . '</td>';
            echo '<td>' . $users[$i]['fullname'] . '</td>';
            echo '<td>' . $users[$i]['age'] . '</td>';
            echo '<td>' . $users[$i]['email'] . '</td>';
        echo '</tr>';
    }

    echo '</tbody></table>';*/