<?php
    class Api_login_manage extends CI_Controller
    {
        public function flogin(){

            $this->load->library("fbclient");
            $token = $this->input->post("token",true); //token 是从fb前台 给我们的
            $fbData = $this->fbclient->connect($token); // 让后我们透过fbclient （fb web service） 验证并连接

            $this->load->model("User_model");

            $userData = $this->User_model->getOne(array( //去资料库寻找有没有匹配的user
                'type' => "fb",
                'social_id' => $fbData['id'],
            ));

            $email = $fbData['email'];
            $fullname = $fbData['name'];
            $image = "http://graph.facebook.com".$fbData['id']."/picture?type=square";

            if(!empty($userData))
            {
                $this->User_model->update(array(
                    'id' => $userData['id']
                ), array(
                    'fullname' => $fullname,
                    'image' => $image,
                    'token'=>$token,
                ));

                $id = $userData['id'];
            }else{
                $id = $this->User_model->insert(array(
                    'type' => "fb",
                    'social_id' => $fbData['id'],
                    'fullname' => $fullname,
                    'email' => $email,
                    'image' => $image,
                    'token' => $token,
                    'created_date' => date("Y-m-d H:i:s"),
                ));
            }
            echo json_encode(array(
                'status' => 'ok',
                'result' => $id,
            ));
        }
    }
?>