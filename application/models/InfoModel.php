<?php

/**
 * Created by PhpStorm.
 * User: onepiece
 * Date: 11/11/16
 * Time: 11:18 AM
 */
class InfoModel extends CI_Model
{
    public function add_info($info)
    {
        $this->db->insert('info',$info);
    }
    
    public function info_count()
    {
        return $this->db->count_all('info');
    }
    
    public function info_list($limit,$start)
    {
        $this->db->limit($limit,$start);
        $query=$this->db->get('info');
        return $query;
    }
    
    public function info_delete($id)
    {
        $this->db->where('id',$id);
        $this->db->delete('info');
    }
    
}