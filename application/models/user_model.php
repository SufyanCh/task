<?php 

class User_model extends CI_Model
{
	public function login($email ,$password)
	{
		
	
        $q = $this->db->where('email',$email)
        			  ->where('password',$password)
                      ->get('user');
    

                      $id=$q->row('id');
                 
         $this->db->where('id',$id)->update('user',['last_login'=>date('Y-m-d H:i:s')]);
        return $q->row();


	}
	public function user_login($post)
	{
		$q = $this->db->where('email',$post['email'])
        			  ->where('password',$post['password'])
                      ->get('user');
                   return   $q->row();


	}
}
	?>