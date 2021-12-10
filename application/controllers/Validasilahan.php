<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Validasilahan extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->model('validasilahan_m');
        $this->load->library('form_validation');
    }
	
	public function index()
	{
		$data['row'] = $this->validasilahan_m->get();
		$this->template->load('template', 'validasilahan/validasilahan_data', $data);
	}
	
	public function delete()
    {
        $id = $this->input->post('id_lahan');
        $this->validasilahan_m->delete($id);

        if($this->db->affected_rows() > 0) {
            echo "<script>alert('Data berhasil dihapus!');</script>";
        } 
        echo "<script>window.location='".site_url('validasilahan')."';</script>";
    }

    // public function accept()
    // {
    //     $id = $this->input->post('id_komoditas');
    //     $this->validasilahan_m->accept($id);

    //     if($this->db->affected_rows() > 0) {
    //         echo "<script>alert('Data berhasil diterima!');</script>";
    //     } 
    //     echo "<script>window.location='".site_url('validasilahan')."';</script>";
    // }
}
