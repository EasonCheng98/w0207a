<?php

    // class 的名字 必须是和file name一样 开头要大写
    // CI_Controller是 codelgniter自己的
    class Frontend extends CI_Controller {

        public function home(){
            //echo "<h1>Hello Word</h1>";
            $this->load->view("home");
            
        }

        public function product_list(){
            //echo "<h1>Product List</h1>";

            $productList = [
                ["id"=>1, "title"=>"TV"],
                ["id"=>2, "title"=>"Home Cooker"]
            ];

            $this->load->view("product_list");
        }

        public function product_details($product_id){
            echo "<h1>Product Details ". $product_id ."</h1>";
        }
    }



?>