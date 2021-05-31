<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Petugas extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        check_not_login();
        $this->load->model('petugas_m');
        $this->load->library('form_validation');
    }
    
    public function index()
	{
        $data['row'] = $this->petugas_m->get();
		$this->template->load('template', 'petugas/petugas_data', $data);
    }
    
    public function add() 
    {
        $this->form_validation->set_rules('fullname', 'Nama', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|is_unique[users.username]');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');
        $this->form_validation->set_rules('passconf', 'Password Config', 'required|matches[password]',
            array('matches' => '%s tidak sesuai dengan password')
        );
        $this->form_validation->set_rules('email', 'Email', 'required');

        $this->form_validation->set_message('required', '%s masih kosong', 'silahkan isi');
        $this->form_validation->set_message('min_length', '{field} minimal 5 karakter');
        $this->form_validation->set_message('is_unique', '{field} ini sudah dipakai, silahkan ganti');

        $this->form_validation->set_error_delimiters('<span class="help-block">', '</span>');

        if ($this->form_validation->run() == FALSE) {
            $this->template->load('template', 'petugas/petugas_form_add');
        } else {
            $post = $this->input->post(null, TRUE);
            $this->petugas_m->add($post);
            if($this->db->affected_rows() > 0) {
                echo "<script>alert('Data berhasil disimpan!');</script>";
            } 
            echo "<script>window.location='".site_url('petugas')."';</script>";
        }
    }

    public function edit($id)
    {
        $this->form_validation->set_rules('fullname', 'Nama', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required|min_length[5]');
        if($this->input->post('password')) {
            $this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');
            $this->form_validation->set_rules('passconf', 'Password Config', 'required|matches[password]',
                array('matches' => '%s tidak sesuai dengan password')
            );
        }
        if($this->input->post('passconf')) {
            $this->form_validation->set_rules('passconf', 'Password Config', 'required|matches[password]',
                array('matches' => '%s tidak sesuai dengan password')
            );
        }
        $this->form_validation->set_rules('email', 'Email', 'required');

        $this->form_validation->set_message('required', '%s masih kosong', 'silahkan isi');
        $this->form_validation->set_message('min_length', '{field} minimal 5 karakter');

        $this->form_validation->set_error_delimiters('<span class="help-block">', '</span>');

        if ($this->form_validation->run() == FALSE) {
            $query = $this->petugas_m->get($id);
            if($query->num_rows() > 0){
                $data['row'] = $query->row();
                $this->template->load('template', 'petugas/petugas_form_edit', $data);
            } else {
                echo "<script>alert('Data tidak ditemukan?');";
                echo "window.location='".site_url('petugas')."';</script>";
            }
        } else {
            $post = $this->input->post(null, TRUE);
            $this->petugas_m->edit($post);
            if($this->db->affected_rows() > 0) {
                echo "<script>alert('Data berhasil disimpan!');</script>";
            } 
            echo "<script>window.location='".site_url('petugas')."';</script>";
        }
    }

    public function delete()
    {
        $id = $this->input->post('id');
        $this->petugas_m->delete($id);

        if($this->db->affected_rows() > 0) {
            echo "<script>alert('Data berhasil dihapus!');</script>";
        } 
        echo "<script>window.location='".site_url('petugas')."';</script>";
    }
}

