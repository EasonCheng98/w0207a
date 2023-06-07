<?php

    class Person {
        // properties
        public $age=35;
        public $name="";
        public $hobby="";

        // __construct() 是自动的意思, 不用呼叫它，它也会run这个function
        // __construct() 里的的( )可以提供参数
        public function __construct($name, $hobby){

            //$this 意思是这个object 本身 
            //我把public function __construct($name, $hobby) 里的$name分配给 $this->name
            $this->name = $name;
            //我把public function __construct($name, $hobby) 里的$hobby分配给 $this->hobby
            $this->hobby = $hobby;


        }

        // function (method) 
        public function greet(){
            echo $this->name. " Say Hello he loves to ".$this->hobby;
        }

        public function jump(){
            echo "Jump";
        }

    }

    // 这样就可以带参进来
    $p = new Person("Jason","Basketball");
    // -> 意思是引用
    $p->greet();
    $p->jump();

    $p2 = new Person("David","Badminton");
    // -> 意思是引用
    $p2->greet();
    $p->jump();


    // Inheritance 继承 
    // 假设我create一个爸爸(基因（功能）) 
    // 我再create一个孩子（继承爸爸的基因（功能），也可以再加一些自己的功能）
    // 我再create一个孙子（可以继承爸爸和孩子的基因（功能），也可以再加一些自己的功能）

    //Encapsulation 封装
    // 每个class 里面自己的 $variable 可以用同名 但是各自的意思不一样
    // 这样就可以避免 $variable 同名 但是有覆盖的情况

    // Polymorphism 多元性
    // 可以拥有一样的method 但是不同的参数 
    // public function __construct($name, $hobby)
    // $p = new Person("Jason","Basketball");
    // $p2 = new Person("David","Badminton");

?>
