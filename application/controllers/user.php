<?php
if (!defined('BASEPATH'))
{
    exit('No direct script access allowed');
 
}
class User extends CI_Controller
{
	public function login() 
        {
              $post=$this->input->post();
            
                $email=$post['email'];
                $password=$post['password'];
          
          $data1 = $this->user_model->login($email,$password);
            if($data1)
            {
               echo json_encode(["status"=>true ,"user_data"=>$data1]);  
            }
            else
            {
                echo json_encode(["status"=>false]); 
            }
            

        }

        public function user_login()
        {
            $this->load->view('user');
        }

        public function fetch_email()
        {

            $post=$this->input->post();
            $data=$this->user_model->user_login($post);
            if($data)
            {
                echo 1;
            }
            else
            {
                echo 0;
            }
           // print_r($data);

            
        }
}