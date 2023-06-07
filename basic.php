<?php

    // Integer 数字
    $a = 300;

    // Floating Number 小数点
    $b = 0.30;

    //String "" 和'' 都可以 
    $c = "This is ABC";
    $d = 'This is ABC';

    //Boolean
    $e = true;
    $f = false;

    // Array (PHP 5.4 below)
    $g = array("a","b","c");
    // Array (PHP 5.4 below)
    $h = ["a","b","c"];

    // Indexed Array
    $i = ["a","b","c","d"];
    echo $i[2]; 
    $i[2] = "z";
    echo $i[2]; 

    //Associative Array (通常是描述物件object)
    $car = [
        "Brand"=>"Honda",
        "Model"=>"Jazz",
        "cc"=>"1.5",
        "Price"=>80000,
    ];

    //multidimensional array
    //index array has assoc array
    $class = [
        ["name" =>"Ali", "money"=>"5" ],
        ["name" =>"AhKau", "money"=>"10" ],
        ["name" =>"Muthu", "money"=>"8" ]
    ];

    //assoc array has index array
    $car = [
        "Brand"=>"Honda",
        "Model"=>"Jazz",
        "cc"=>"1.5",
        "Price"=>80000,
        "member" =>["Ali","AhKau","Muthu"]
    ];

    // Operators + - * /
    // . 连着的
    $a = 1;
    $b = 2;
    $c = $a + $b ;// output是 3

    $a = "This is Apple";
    $b = "This is pen";
    $c = $a . $b; // output是 This is AppleThis is pen
    $c = $a ." ". $b; // output是 This is Apple This is pen

    //Expression
    //if
    
    $a = 50;
    $b = 200;

    if($a > 100 || $b > 100 ){
        echo "Large";
    }else{
        echo "Small";
    }

    // for
    for($i=0, $i<100; $i++){
        echo "the number is" . $i;
    }

    //foreach
    $car = [
        "Brand"=>"Honda",
        "Model"=>"Jazz",
        "cc"=>"1.5",
        "Price"=>80000,
        "member" =>["Ali","AhKau","Muthu"]
    ];

    foreach($car as $k => $v){
        echo $k." ".$v;
    }

    //count
    $class = [
        ["name" =>"Ali", "money"=>"5" ],
        ["name" =>"AhKau", "money"=>"10" ],
        ["name" =>"Muthu", "money"=>"8" ]
    ];
    echo count($class); // output 是 3

    //debug
    //string
    echo "";

    //array
    print_r($class);
    var_dump($class);

?>