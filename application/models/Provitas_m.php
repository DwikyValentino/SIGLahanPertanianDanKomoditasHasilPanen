<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Provitas_m extends CI_Model {

    public function get($id = null)
    {
        $this->db->select('*');
        $this->db->from('ds_provitas');
        if($id != null) {
            $this->db->where('id_komoditas', $id);
        }
        $query = $this->db->get();
        return $query;

    }

    public function add($post)
    {
        $params['namakomoditas'] = $post['namakomoditas'];
        $params['jumlah'] = $post['jumlah'];
        $params['awal'] = $post['awal'];
        $params['akhir'] = $post['akhir'];
        $params['kecamatan'] = $post['kecamatan'];
        $this->db->insert('ds_provitas', $params);
    }

    public function edit($post)
    {
        $params['namakomoditas'] = $post['namakomoditas'];
        $params['jumlah'] = $post['jumlah'];
        $params['awal'] = $post['awal'];
        $params['akhir'] = $post['akhir'];
        $params['kecamatan'] = $post['kecamatan'];
        $this->db->where('id_komoditas', $post['id_komoditas']);
        $this->db->update('ds_provitas', $params);
    }

    public function delete($id)
	{
        $this->db->where('id_komoditas', $id);
        $this->db->delete('ds_provitas');
    }
}