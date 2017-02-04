<?php

class UserModel extends CI_Model
{
    public function can_login($username,$password)
    {
        $this->db->where('name',$username);
        $query=$this->db->get('users');
        if($query->num_rows() > 0)
        {
            
            $db_password=$query->result()[0]->password;
           
            if(password_verify($password,$db_password))
            {
                return $query;
            }
        }
        
        return false;
        
    }

}