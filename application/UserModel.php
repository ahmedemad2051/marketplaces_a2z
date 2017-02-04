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
    
    public function register($user)
    {
        
        $user['password']=password_hash($user['password'],PASSWORD_DEFAULT);
        if($this->db->insert('users',$user))
        {
            return true;
        }
        return false;
    }

    public function list_users($limit,$start)
    {
        $this->db->limit($limit,$start);
        $query=$this->db->get('users');
        return $query;
    }

    public function users_count()
    {
        return $this->db->count_all('users');
    }
    
    public function delete_user($id)
    {
        $this->db->where('id',$id);
        $this->db->delete('users');
    }
    
    public function get_user($id)
    {
        $this->db->where('id',$id);
        $query=$this->db->get('users');
        return $query;
    }

    public function edit_user($id,$user)
    {
        $this->db->where('id',$id);
        $this->db->update('users',$user);
        return true;
    }
    
    public function save_csv($csv)
    {
        $this->db->insert('csv',$csv);
    }

    public function save_data_from_csv($row)
    {
        $this->db->insert('csv_data',$row);
    }

    public function random_row_from_csv_data($market,$provider,$status='new')
    {
        $this->db->where('status',$status);
        $this->db->where('amazon_acc_created','0');
        $this->db->where('destination_market',$market);
        $this->db->where('email_provider',$provider);
        $this->db->order_by('id','RANDOM');
        $this->db->limit(1);
        $query=$this->db->get('csv_data');
        return $query->result();
    }


    public function update_random_row($row,$id)
    {
        $this->db->where('id',$id);
        $this->db->update('csv_data',$row);
    }

    public function count_of_data($key,$value)
    {
        $this->db->where($key,$value);
        $query=$this->db->get('csv_data');
        return $query->num_rows();
    }
}