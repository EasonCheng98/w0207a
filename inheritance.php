<?php

    class Animal{

        public function move() {
            echo "......";
        }
    }

    // extends是继承的意思
    class Lion extends Animal{
        // lion 自己的function
        public function lionRun(){
            echo "_______";
        }

    }

    class Tiger extends Animal{
        // tiger 自己的function
        public function tigerRun(){
            echo "******";
        }
    }

    $lion = new Lion();
    $lion->move();
    $lion->lionRun();
    echo "<br>";

    $tiger = new Tiger();
    $tiger->move();
    $tiger->tigerRun();




?>