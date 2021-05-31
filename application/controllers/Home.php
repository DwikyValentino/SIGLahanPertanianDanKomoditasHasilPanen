<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
        $data['title'] = '';
        $data['page'] = '';
        $this->load->view('guest/home', $data);
	}
}
