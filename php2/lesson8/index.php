<?php
//    Default values
    /*class A {
        public function getAge($age = 18) {
            return $age . '<br>';
        }
    }

    $a = new A();
    echo $a->getAge();
    echo $a->getAge(25);*/

//class A {
//    protected int $age;
//    protected string $first_name;
//    protected array $skils = [];
//
//    /**
//     * A constructor.
//     * @param int $age
//     */
//    public function __construct(int $age) {
//        $this->age = $age;
//    }
//    public function getAge() {
//        return $this->age . '<br>';
//    }
//
//    /**
//     * @param string $username
//     * @return string
//     */
//    public function getUser(string $username):string {
//        return 'Hello ' . $username;
//    }
//}

//$a = new A(20);
//echo $a->getAge();
//echo $a ->getUser([45]);

//$x = 10.5;
//
//echo gettype($x) . "<br>";
//$x = (int)$x;
//echo gettype($x) . "<br>";

//RegEx
//$str = 'Hello Dav7789id. How455 are youdd5445';
////$shablon = '/d/';
//$shablon = '/[a-zA-Z7-9]/';
///*$x = preg_match( $shablon, $str, $match);
//echo '<pre>';
//var_dump($match);*/
//
//$x = preg_match_all( $shablon, $str, $matches);
//echo '<pre>';
//var_dump($matches);

//$str = 'Hello Dav7789id. How455 are youdd5445';
////$shablon = '/d/i';
////$shablon = '/\d{1,}/i';
//$shablon = '/\w{1,}/i';
//$x = preg_match_all( $shablon, $str, $matches);
//echo '<pre>';
//var_dump($matches);\

//Email validacia
//function emailValidation($email) {
//    if(preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i', $email)) {
//        return true;
//    } else {
//        return false;
//    }
//}
//echo emailValidation('asd@mail.ru');


/*$string = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam quod reprehenderit sequi? Aperiam aspernatur atque corporis cupiditate, doloribus eaque eum fuga laboriosam laborum, laudantium magni odit, pariatur repellat tenetur vel?
';
$shablon = '/o/i';
echo preg_replace($shablon, " ", $string); */


//class A {
//    public function hello() {
//       return "1";
//    }
//
//    public function __toString() {
//        return $this->hello();
//    }
//}
//
//$x = new A();
//echo $x;

//Spreed operator
//$arr = [4,4,4];
//$arr1 = [3,2, ...$arr, 5];
//echo '<pre>';
//print_r($arr1);

//function f( $y, ...$x) {
//    return $x;
//}
//
//echo '<pre>';
//print_r(f(5,4,7,8,9,10));

