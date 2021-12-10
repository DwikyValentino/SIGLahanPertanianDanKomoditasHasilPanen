<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Petugas_m extends CI_Model {

    public function get($id = null)
    {
        $this->db->select('*');
        $this->db->from('users');
        if($id != null) {
            $this->db->where('id', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function add($post) 
    {
        $params['fullname'] = $post['fullname'];
        $params['username'] = $post['username'];
        $params['password'] = md5($post['password']); 
        $params['email'] = $post['email'];
        $this->db->insert('users', $params);
    }

    public function edit($post)
    {
        $params['fullname'] = $post['fullname'];
        $params['username'] = $post['username'];
        if(!empty($post['password'])) {
            $params['password'] = md5($post['password']);
        }
        $params['email'] = $post['email'];
        $this->db->where('id', $post['id']);
        $this->db->update('users', $params);
    }

    public function delete($id)
	{
        $this->db->where('id', $id);
        $this->db->delete('users');
    }
}