<?php

class Animal{

    // 建构子 一开始就会run这个 function
    // __construct() 是自动的意思, 不用呼叫它，它也会run这个function
    public function __construct(){
        echo "I am live <br>";

    }

    //解构子 最后才会run这个 function
    public function __destruct(){
        echo "I am dead <br>";
    }

    public function move(){
        echo"(....) <br>";
    }

}

$a = new Animal();
$a->move();

?>
