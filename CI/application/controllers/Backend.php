<?php
    class Backend extends CI_Controller 
    {
        public function dashboard()
        {
            $this->load->model("Visitor_model");

            $datalist = $this->Visitor_model->get_where(array());

            $dateGroup = array(); // $dateGroup 目的就是要Group(分类) visitor 访问的date

            // substr meaning
            // $str = "Hello, world!";
            // $sub = substr($str, 0, 5);      // 提取从起始位置开始的前 5 个字符
            // echo $sub;                      // 输出 "Hello"

            // $sub = substr($str, -6);        // 提取从末尾位置开始的后 6 个字符
            // echo $sub;                      // 输出 "world!"

            // $sub = substr($str, 7);         // 提取从第 7 个字符开始到末尾的所有字符
            // echo $sub;                      // 输出 "world!"

            // $sub = substr($str, 7, 3);      // 提取从第 7 个字符开始的连续 3 个字符
            // echo $sub;                      // 输出 "wor"


            // dateGroup的key Example:
            // [
            //       $k         $v
            //     '2019-01' => 10, //一月份 有10个visitor 
            //     '2019-01' => 20, //二月份 有20个visitor 
            //     '2019-01' => 14, //三月份 有14个visitor 
            // ]


            if(!empty($datalist)){
                foreach($datalist as $v)
                {
                    if(isset($dateGroup[substr($v['created_date'], 0,7)])){ // Exp: 2023-05-16 0到7 就是 2023-05 所以我们只抓到年份和月份罢了 并把它们变成dateGroup的key
                        $dateGroup[substr($v['created_date'], 0,7)]++;      // 如果又抓到 dateGroup的key（月份）的value（visitor）那就加1
                    }else{
                        $dateGroup[substr($v['created_date'], 0,7)]=1;      //  如果又抓到 dateGroup的key（月份）的value（visitor）那就给 1
                    }
                }
            }

            ksort($dateGroup); // ksort = key sorting 把日期顺序拍着

            $finalFormat = array(array("Month","Views")); 

            if(!empty($dateGroup)){
                foreach($dateGroup as $k=>$v){
                    $finalFormat[] = array($k,$v);
                }
            }

            $this->data['finalFormat'] = $finalFormat;

            $this->load->view("backend/dashboard",$this->data);
        }


    }
?>