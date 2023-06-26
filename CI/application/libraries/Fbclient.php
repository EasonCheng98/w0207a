<?php
    class Fbclient
    {

        public function connect($accesstoken)
        {
            $fb = new \Facebook\Facebook([
                'app_id' => '231543869666934',
                'app_secrect' => '005075366a51166f9b36ec1fbb09b63a',
                'default_graph_version' => 'v2.10',
            ]);

            try{
                $response = $fb->get('/me?fields=id,name,email', $accesstoken);// 我们用$accesstoken跟fb拿 id，name，email
                $me = $response->getGraphUser();


                return array(
                    'id' => $me->getId(),
                    'name' => $me->getName(),
                    'email' => $me->getEmail(),
                );
            }catch(\Facebook\Exceptions\FacebookResponseException $e)
            {
                //when Graph return ans error
                echo 'Graph returned an error: ' . $e->getMessage();
                exit;
            }catch(\Facebook\Exceptions\FacebookSDKException $e){
                //when Graph return ans error
                echo 'Facebook SDK returned an error: ' . $e->getMessage();
                exit;
            }
        }
    }
?>