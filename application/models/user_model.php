<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model 
{

    function __construct()
    {
        parent::__construct();
    }
    function select($user_id,$bind_weixin)
    {
        if($user_id)
        {
            $this->db->select('*');
            $this->db->from('user');
            $this->db->where('id', $user_id);
        }
        else if($bind_weixin)
        {
            $this->db->select('*');
            $this->db->from('user');
            $this->db->where('bind_weixin', $bind_weixin);
        }
        $query = $this->db->get();
        return $query->row_array();
    }

    function update($user_id,$data)
    {

        $this->db->where('id', $user_id);
        $this->db->update('user', $data); 
        return $data;
    }

    function insert($data)
    {
        $this->db->insert('user', $data);
        return mysql_insert_id();
    }

    function delete($user_id)
    {
        $this->db->delete('user', array('id' => $user_id)); 
    }
    
}


/* End of api_model.php */
/* Location: ./system/application/model/api_model.php */
