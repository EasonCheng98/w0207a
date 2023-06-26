<?php

    // class 的名字 必须是和file name一样 开头要大写
    // CI_Controller是 codelgniter自己的
    class Frontend extends CI_Controller {

        private $data = [];

        // 因为我们重复太多次 $this->load->model("Product_model"); 为了精简code 所有create construct
        public function __construct()
        {
            parent::__construct(); //我们让它的parent跑完function先 parent是CI_Controller 这样它的parent就不会被覆盖
            
            $this->output->enable_profiler(TRUE); // performan test speed
            
            $this->benchmark->mark("Model_start"); //  Model_end 自己取得 记得开头

            $this->load->model("Product_model");
            $this->load->model("Cart_model");

            $this->benchmark->mark("Model_end"); // Model_end 自己取得 记得包尾



            $sid = session_id();

            $this->benchmark->mark("cartCal_start"); // cartCal_start自己取得 记得开头

            $this->data['cartTotal'] = $this->Cart_model->record_count(array( // 计算购物车的数量 放进 $this->data['cartTotal']
                'sid' => $sid,
                'is_deleted' => 0,
            ));

            
            $this->data['cartList'] = $this->Cart_model->get_where(array(  // 拿完购物车使用资料 放进 $this->data['cartList']
                'sid' => $sid,
                'is_deleted' => 0,
            ));

            $this->benchmark->mark("cartCal_end"); // cartCal_end自己取得 记得包尾
        }

        public function home(){

            $this->data['featuredList'] = $this->Product_model->get_where(array('featured' => 1));
            $this->data['latestList'] = $this->Product_model->get_where(array('latest' => 1));
            $this->data['topsellList'] = $this->Product_model->get_where(array('topsell' => 1));

            $this->load->view("header",$this->data);
            $this->load->view("home",$this->data);
            $this->load->view("footer",$this->data);
            
        }

        public function product_details($product_id){

            $this->data['productData'] = $this->Product_model->getOne(array('id' => $product_id,));

            $this->load->view("header",$this->data);
            $this->load->view("product_details",$this->data);
            $this->load->view("footer",$this->data);
        }

        public function addcart()
        {
            $sid = session_id(); // session_id()是内建的 然后分配给$sid sid是cart table里的
            $qty = $this->input->post("qty", true);// $_POST['qty'] => $this->input->post("qty", true);  加true是因为要验证 怕是恶意攻击
            $product_id = $this->input->post("product_id", true);
            $ProductData = $this->Product_model->getOne(array("id" => $product_id));

            
            $cartExist = $this->Cart_model->getOne(array( // 检测Cart_model的table里 现有的 sid 和 product_id 并把它分配给 $cartExist
                'sid' => $sid,
                'product_id'  => $product_id
            ));

            if(empty($cartExist)) // 如果没有 现有的 sid 和 product_id 
            {
                
                $this->Cart_model->insert(array(     // 那就insert
                    'sid' => $sid,
                    'product_id' => $product_id,
                    'qty' => $qty,
                    'product_title' => $ProductData['title'],
                    'product_price' => $ProductData['price'],
                    'created_date' => date("Y-m-d H:i:s"),
                ));
            }
            else  // 要不然就update 现有的sid 和 product_id
            {

                
                $this->Cart_model->update(array(  // update 第一个array的参数是 $where
                    'id' => $cartExist['id'],     // where 你要update的id
                ), 
                array(  //update 第二个array的参数是 你要update的资料
                    'qty' => ($cartExist['qty'] + $qty),   // cartExist就是数据库有的qty + update的 
                    'modified_date' => date("Y-m-d H:i:s"),
                ));

            }

            redirect(base_url('product_details/'.$product_id)); 
        }

        public function addcartAPI()
        {
            $sid = session_id();
            $qty = $this->input->post("qty",true);
            $product_id = $this->input->post("product_id",true);

            $productData = $this->Product_model->getOne(array('id'=>$product_id));

            // 如果$productData 没有它要的资料 它就会show_error
            if(empty($productData)){
                show_error();
            }

            // 如果$productData 有它要的资料 就抓它的title和price
            $product_title = $productData['title'];
            $product_price = $productData['price'];

            // 验证现有的购物车有 没有已经加过的item了
            $cartData = $this->Cart_model->getOne(array('sid'=>$sid,'product_id'=>$product_id,'is_deleted'=>0));

            // 如果现有的购物车有已经加过的item了 那就update
            if(!empty( $cartData)){
                $cartQty = $cartData['qty'];
                $finalQty = $cartQty + $qty;

                $this->Cart_model->update(array(
                    'id' => $cartData['id'],
                ), array(
                    'qty'=>$finalQty,
                    'modified_date' => date("Y-m-d H:i:s"),
                ));
            }else{ // 要不然就insert new item
                $this->Cart_model->insert(array(
                    'sid' => $sid,
                    'qty' => $qty,
                    'product_id' => $product_id,
                    'product_title' => $product_title,
                    'product_price' => $product_price,
                    'created_date' => date("Y-m-d H:i:s"),
                ));
            }

            // return result
            echo json_encode(array(
                'status' => "OK",
            ));
        }


        public function product_list($page=1) //如果没有带参数进来 default就是1 第一页的意思
        {
            $sql = array();

            // start = 从第几个item开始抓资料
            // item_per_page = 每一页要show 几个item
            // SELECT * FROM `tablename` WHERE ... LIMIT start, item_per_page

            // page = 1, start = (1-1)*10 = 0
            // page = 2, start = (2-1)*10 = 10
            // page = 3, start = (3-1)*10 = 20

            $item_per_page = 10;
            $start = ( $page - 1 ) * $item_per_page;
            $total_records = $this->Product_model->record_count($sql);

            $this->data['product_list'] = $this->Product_model->fetch($sql, $item_per_page, $start);

            // 以下的library pagination 是 codelgniter 内建的
            $this->load->library('pagination'); 
            $config['base_url']= base_url('product_list');
            $config['total_rows']= $total_records ;
            $config['per_page']= $item_per_page ;
            $config['use_page_numbers']= true ;
            $config['full_tag_open']= "<ul class='pagination'>" ;
            $config['full_tag_close']= "</ul>"  ;

            $config['first_link']= "First" ;
            $config['first_tag_open']= "<li>" ;
            $config['first_tag_close']= "</li>" ;

            $config['last_link']= "Last" ;
            $config['last_tag_open']= "<li>" ;
            $config['last_tag_close']= "</li>" ;

            $config['prev_link']= "<i class ='fa fa-angle-left'></i>";
            $config['prev_tag_open']= "<li>" ;
            $config['prev_tag_close']= "</li>" ;

            $config['next_link']= "<i class ='fa fa-angle-right'></i>";
            $config['next_tag_open']= "<li>" ;
            $config['next_tag_close']= "</li>" ;

            $config['num_tag_open']= "<li>" ;
            $config['num_tag_close']= "</li>" ;
            $config['cur_tag_open']= '<li class="active"><a href="#">' ; //当前的一页 会active, href="#" 所有点击当前的一页 就不会变
            $config['cur_tag_close']= "</a></li>" ;
            $this->pagination->initialize($config); //把这些 $config 的array[]资料丢进去 pagination的library，initialize是method来处理这些资料
            $this->data['pagination'] = $this->pagination->create_links(); // 然后 create_links 产生一组字串 就是 1,2,3,4，<,>,first，last 等等
            /* 然后在product_list.php 里  <?= $pagination ?> 呈现出来 */




            $this->data['latestList'] = $this->Product_model->get_where(array('latest' => 1));

            $this->load->view("header",$this->data);
            $this->load->view("product_list",$this->data); 
            $this->load->view("footer",$this->data);

        }

        public function getProductAPI($page=1)
        {
            $this->load->model("Product_Model");

            $productList = $this->Product_model->fetch([], 10, ($page-1)*10);

            // PHP ARRAY => JSON ARAY
            echo json_encode($productList);


        }
    }



?>