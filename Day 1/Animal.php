<?php
    class Animals{

        public $name =""; // 参数不是固定的 会有input
        public $speed =""; // 参数不是固定的 会有input

        public function __construct($name){
            $this->name = $name;
            echo " My name is " . $this->name ;

        }

        public function speed() {

            // speed 取决于random 0到10之间
            $this->speed = rand(0,10);
        }
    }
?>