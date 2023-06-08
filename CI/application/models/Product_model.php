<?php
    // class 的名字 必须是和file name一样 开头要大写
    // CI_Model是 codelgniter自己的
    class Product_model extends CI_Model{

        public function __construct(){
            //connect database
            $this->load->database();
        }

        // getOne的意思是我只抓一笔资料 而不是多笔
        public function getOne($where=array()){
            $this->db->select("*"); 
            $this->db->where($where); 
            $query = $this->db->get('product'); 
            return $query->row_array(); // only return assoc array

        }
    
        // 以下的function 就像 SELECT  * FROM product WHERE featured = 1
        public function get_where($where=array()){ //我们create 变数为$where 它是array()


            // $this->db->select() 是 query builder的一种 可以参考(https://www.codeigniter.com/userguide3/database/query_builder.html)
            $this->db->select("*"); // SELECT  *
            $this->db->where($where); // 把我们create 变数为$where 放进来
            $query = $this->db->get('product'); //FROM product (table name)

            return $query->result_array(); // result_array()是multi array （Indexed array 里有 assoc array）
        }
    }
?>