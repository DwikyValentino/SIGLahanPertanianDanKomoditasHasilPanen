<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function login()
	{
		check_already_login();
		$this->load->view('login');
	}
	public function process()
	{
		$post = $this->input->post(null, TRUE);
		if(isset($post['login'])) {
			$this->load->model('user_m');
			$query = $this->user_m->login($post);
			if($query->num_rows() > 0){
				$row = $query->row();
				$params = array(
					'user_id' => $row->user_id
				);
				$this->session->set_userdata($params);
				echo "<script>
					alert('Selamat, anda berhasil login');
					window.location='".site_url('dashboard')."';
				</script>";
			} else {
				echo "<script>
					alert('Maaf, anda gagal login. username atau password anda salah!');
					window.location='".site_url('auth/login')."';
				</script>";
			}
		}
	}
	public function logout()
	{
		$params = array('user_id');
		$this->session->unset_userdata($params);
		redirect('auth/login');
	}
}
