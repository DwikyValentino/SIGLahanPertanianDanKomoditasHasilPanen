<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Tutorial extends CI_Controller {

	public function index()
	{
                $data['title'] = 'Halaman Tutorial';
                $data['page'] = 'lorem ipsum .....';
                $this->load->view('guest/tutorial', $data);
	}
}
