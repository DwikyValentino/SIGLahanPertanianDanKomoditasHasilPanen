<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Validasilahan_m extends CI_Model {

    public function get($id = null)
    {
        $this->db->select('*');
        $this->db->from('tb_lahanpertanian');
        if($id != null) {
            $this->db->where('id_lahan', $id);
        }
        $query = $this->db->get();
        return $query;

    }

    public function delete($id)
	{
        $this->db->where('id_lahan', $id);
        $this->db->delete('tb_lahanpertanian');
    }

    // public function accept($id)
	// {
    //     $this->db->where('id_komoditas', $id);
    //     $this->db->accept('tb_lahanpertanian');
    // }
}