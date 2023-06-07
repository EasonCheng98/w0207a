<?php

    // interface 里面有2个 function 如果要继承它 就必须用到它两个function 否则会error
    interface IHero{

        public function walk();
        public function showPower();
    }

    // interface 里面有1个 function 如果要继承它 就必须用到它两个function 否则会error
    interface ICountable{

        public function showCount();
    }

    // implements 就类似 extends 不过它只用在 interface
    // superman 继承IHero, ICountable 就必须用到它们里面的function
    class superman implements IHero, ICountable{

        public function walk(){
            echo "Fly...";
        }

        public function showPower(){
            echo "Eye Beam...";
        }

        public function showCount(){
            echo "123...";
        }
    }
?>