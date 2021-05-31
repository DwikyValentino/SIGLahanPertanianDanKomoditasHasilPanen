<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

        public function index()
	{
                $data['title'] = 'Halaman Contact US';
                $data['page'] = 'lorem ipsum .....';
                $this->load->view('guest/contact', $data);
	}
}
