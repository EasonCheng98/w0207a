<?php
    //multidimensional array
    $a = [
        0 => ["id"=> 1, "title"=>"Iphone", "Price"=>3600],
        1 => ["id"=> 2, "title"=>"Samsung", "Price"=>2500],
        2 => ["id"=> 3, "title"=>"HTC", "Price"=>1556],
    ];

    print_r($a);

    // HOW TO INSERT HUAWEI INTO ARRAY?
    // [] 就是insert的意思
    $a[] = ["id"=> 4, "title"=>"Huawei", "Price"=>2000];

    print_r($a);


    // PHP OOP
    // class 就像魔法书
    class person{
        //里面有可能有很多功能
        //variables or function（properties）
    }

    // new 就像咒语 召唤person出来 并且分配给$P
    $p = new person();
?>