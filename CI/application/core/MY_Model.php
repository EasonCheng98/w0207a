<?php
    // Create MY_Model 让后继承 CI_Model, CI_Model是内建的，MY_Model就像Animal
    class MY_Model extends CI_Model
    {
        protected $tablename = "";

        public function __construct()
        {
            $this->load->database();                    
        }

        public function record_count($where=array())
        {

            // SELECT COUNT(*) as total From `tablename` WHERE X =Y
            $this->db->select("COUNT(*) AS total");
            $this->db->where($where);
            $query = $this->db->get($this->tablename);
            $row = $query->row_array(); // row 只是一笔资料
            return $row ['total'];
        }

        public function fetch($where=array(), $limit, $start)
        {
            // SELECT * FROM `tablename` LIMIT start，itemperpage                    // itemperpage = $limit
            // 但是在codelgniter start，itemperpage是倒反的 itemperpage先 然后到start  // itemperpage = $limit
            $this->db->where($where);
            $this->db->limit($limit, $start); // 所以itemperpage先                   // itemperpage = $limit
            $query = $this->db->get($this->tablename);
            
            return $query->result_array(); //抓多笔资料 return multidimensional array
        }

        public function getOne($where=array())
        {        
            $this->db->select("*"); 
            $this->db->where($where); 
            $query = $this->db->get($this->tablename); 

            return $query->row_array();
        }
    
        public function get_where($where=array())
        { 
            $this->db->select("*");
            $this->db->where($where); 
            $query = $this->db->get($this->tablename); 

            return $query->result_array(); 
        }

        public function insert($insert_array=array())
        {
            // INSERT INTO `tablename` (col1,col2,col3) VALUES (val1, val2, val3)
            // $this->tablename => `tablename` , $insert_array => (col1,col2,col3) VALUES (val1, val2, val3)
            $this->db->insert($this->tablename,$insert_array);

            return $this->db->insert_id();
            // return 最后一个id
        }

        public function update($where=array(), $update_array=array())
        {
            // UPDATE `tablename` SET col1 = val1, col2 = val2 WHERE id= x;
            // $this->tablename => `tablename` , $update_array => SET col1 = val1, col2 = val2, $where => WHERE id= x;
            $this->db->update($this->tablename, $update_array, $where);
        }

    }
?>