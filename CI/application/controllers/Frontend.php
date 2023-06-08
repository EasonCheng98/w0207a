<?php

    // class 的名字 必须是和file name一样 开头要大写
    // CI_Controller是 codelgniter自己的
    class Frontend extends CI_Controller {

        private $data = [];

        // 因为我们重复太多次 $this->load->model("Product_model"); 为了精简code 所有create construct
        public function __construct(){
            parent::__construct(); //我们让它的parent跑完function先 parent是CI_Controller 这样它的parent就不会被覆盖
            $this->load->model("Product_model");  //connect Product_model 
            
        }

        public function home(){

            $this->data['featuredList'] = $this->Product_model->get_where(array('featured' => 1));
            $this->data['latestList'] = $this->Product_model->get_where(array('latest' => 1));
            $this->data['topsellList'] = $this->Product_model->get_where(array('topsell' => 1));

            $this->load->view("header");
            $this->load->view("home",$this->data);
            $this->load->view("footer");
            
        }

        public function product_list(){
            //echo "<h1>Product List</h1>";
            $this->load->view("header");

            $productList = [
                ["id"=>1, "title"=>"TV"],
                ["id"=>2, "title"=>"Home Cooker"]
            ];

            // 在这里，我们创建了一个空的数组 $data，
            $data = []; 
            // 然后将变量 $productList 的值赋给键 productList。这样，键 productList 将包含产品信息的数组作为其值。
            //在代码的其他地方也要相应地更新对应的键名，以确保一致性。变量名和键名应该保持一致，以避免混淆和错误。
            $data['productList'] = $productList; 

            //这个赋值操作的目的是将产品列表数据存储在 $data 数组中，并且以键值对的形式传递给视图文件。在视图文件 product_list.php 中，我们可以通过 $productList 变量来访问传递过来的产品列表数据，并对其进行处理和显示
            $this->load->view("product_list", $data); 

            $this->load->view("footer");
            
        }

        public function product_details($product_id){

            $this->data['productData'] = $this->Product_model->getOne(array('id' => $product_id,));

            $this->load->view("header");
            $this->load->view("product_details",$this->data);
            $this->load->view("footer");
        }
    }



?>