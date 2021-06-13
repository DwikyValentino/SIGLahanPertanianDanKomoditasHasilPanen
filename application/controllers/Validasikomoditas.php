<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Validasikomoditas extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->model('validasikomoditas_m');
        $this->load->library('form_validation');
    }
	
	public function index()
	{
		$data['row'] = $this->validasikomoditas_m->get();
		$this->template->load('template', 'validasikomoditas/validasikomoditas_data', $data);
	}
	
	public function delete()
    {
        $id = $this->input->post('id_komoditas');
        $this->validasikomoditas_m->delete($id);

        if($this->db->affected_rows() > 0) {
            echo "<script>alert('Data berhasil dihapus!');</script>";
        } 
        echo "<script>window.location='".site_url('validasikomoditas')."';</script>";
    }

    // public function accept()
    // {
    //     $id = $this->input->post('id_komoditas');
    //     $this->validasikomoditas_m->accept($id);

    //     if($this->db->affected_rows() > 0) {
    //         echo "<script>alert('Data berhasil diterima!');</script>";
    //     } 
    //     echo "<script>window.location='".site_url('validasikomoditas')."';</script>";
    // }
}
