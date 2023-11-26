<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
	public function index()
	{
		$data = array(
			'judul_title' => "Login Gun Restaurant",
		);
		$this->load->view('login', array_merge($data));
	}
	public function login()
	{
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));
		$this->db->from('user')->where('username', $username);
		$data = $this->db->get()->row();
		if ($data == NULL) {
			$this->session->set_flashdata('alert', '
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
			<i class="fa fa-exclamation-circle me-2"></i>
			username tidak ada
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		</div>');
			redirect('admin/auth');
		} else if ($data->password==$password){
			$userdata = array(
				'password' => $data->password,
				'username' => $data->username,
				'level' => $data->level,
				'nama' => $data->nama,
			);
			$this->session->set_userdata($userdata);
			redirect('admin/dashboard');
		} else {
			$this->session->set_flashdata('alert', '
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
			<i class="fa fa-exclamation-circle me-2"></i>
			password salah
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		</div>');
		redirect('admin/auth');
		} 	
	}
	public function logout()
    {
        $this->session->sess_destroy();
        redirect('admin/auth');
    }
}