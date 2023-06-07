<?php

class Game{

    // []是用array 因为我们要接收多个member
    private $member = [];

     //我们只接受class为Animal的参赛者的名字（$animal）
    public function register(Animals $memberName){  //$memberName 来自Class为 Animals的 $rabbit和$tortoise 
        $this->member[] = $memberName;
    }

    public function getTheSpeed(){
        
        foreach( $this->member as $v){
            // $memberName 来自 Class为 Animals 的$rabbit和$tortoise 
            // $this->member 来自 $memberName
            // $v 来自 $this->member
            // 所以$v 就是来自Class为 Animals 的$name

            $v->speed(); // 运行 Class为 Animals 的 $rabbit和$tortoise  的 speed() 
        }
    }

    public function result(){
        echo "<br>";
        if($this->member[0]->speed > $this->member[1]->speed ){
            echo $this->member[0]->name." Win";
        }else if($this->member[1]->speed > $this->member[0]->speed){
            echo $this->member[1]->name." Win";
        }else{
            echo "Draw";
        }
    }

    public function report(){

        echo "<hr>";
        foreach( $this->member as $u)
        echo $u->name . " " . $u->speed."<br>";
    }
}

?>