<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Validasikomoditas_m extends CI_Model {

    public function get($id = null)
    {
        $this->db->select('*');
        $this->db->from('tb_komoditas');
        if($id != null) {
            $this->db->where('id_komoditas', $id);
        }
        $query = $this->db->get();
        return $query;

    }

    public function delete($id)
	{
        $this->db->where('id_komoditas', $id);
        $this->db->delete('tb_komoditas');
    }

    // public function accept($id)
	// {
    //     $this->db->where('id_komoditas', $id);
    //     $this->db->accept('tb_komoditas');
    // }
}