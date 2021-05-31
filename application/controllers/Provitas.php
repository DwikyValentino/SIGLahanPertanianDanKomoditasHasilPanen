<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Provitas extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->model('provitas_m');
        $this->load->library('form_validation');
    }
	
	public function index()
	{
		$data['row'] = $this->provitas_m->get();
		$this->template->load('template', 'provitas/provitas_data', $data);
	}

	public function add()
    {
		$this->form_validation->set_rules('namakomoditas', 'Nama Komoditas', 'required');
		$this->form_validation->set_rules('jumlah', 'Jumlah', 'required');
		$this->form_validation->set_rules('awal', 'Dari Tanggal', 'required');
		$this->form_validation->set_rules('akhir', 'Sampai Tanggal', 'required');
		$this->form_validation->set_rules('kecamatan', 'Kecamatan', 'required');

        $this->form_validation->set_message('required', '%s masih kosong', 'silahkan isi');
        
        $this->form_validation->set_error_delimiters('<span class="help-block">', '</span>');

        if ($this->form_validation->run() == FALSE) {
            $this->template->load('template', 'provitas/provitas_form_add');
        } else {
            $post = $this->input->post(null, TRUE);
			$this->provitas_m->add($post);
			if($this->db->affected_rows() > 0) {
                echo "<script>alert('Data berhasil disimpan!');</script>";
            } echo "<script>window.location='".site_url('provitas')."';</script>";
        }
        
    }

    public function edit($id)
    {
		$this->form_validation->set_rules('namakomoditas', 'Nama Komoditas', 'required');
		$this->form_validation->set_rules('jumlah', 'Jumlah', 'required');
		$this->form_validation->set_rules('awal', 'Dari Tanggal', 'required');
		$this->form_validation->set_rules('akhir', 'Sampai Tanggal', 'required');
		$this->form_validation->set_rules('kecamatan', 'Kecamatan', 'required');

		$this->form_validation->set_message('required', '%s masih kosong', 'silahkan isi');

        $this->form_validation->set_error_delimiters('<span class="help-block">', '</span>');

        if ($this->form_validation->run() == FALSE) {
            $query = $this->provitas_m->get($id);
            if($query->num_rows() > 0){
                $data['row'] = $query->row();
                $this->template->load('template', 'provitas/provitas_form_edit', $data);
            } else {
                echo "<script>alert('Data tidak ditemukan?');";
                echo "window.location='".site_url('provitas')."';</script>";
            }
            
        } else {
            $post = $this->input->post(null, TRUE);
            $this->provitas_m->edit($post);
            if($this->db->affected_rows() > 0) {
                echo "<script>alert('Data berhasil diubah!');</script>";
            } 
            echo "<script>window.location='".site_url('provitas')."';</script>";
        }
    }
	
	public function delete()
    {
        $id = $this->input->post('id_komoditas');
        $this->provitas_m->delete($id);

        if($this->db->affected_rows() > 0) {
            echo "<script>alert('Data berhasil dihapus!');</script>";
        } 
        echo "<script>window.location='".site_url('provitas')."';</script>";
    }
}
