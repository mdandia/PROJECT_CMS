<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{	
	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('level')<>'admin') {
			redirect('admin/auth');
		}
	}
	public function index()
	{
		$this->db->select('*')->from('user');
		$user = $this->db->get()->result_array();
		$data = array(
			'judul_title' => "Pengguna|Admin CMS",
			'user' => $user
		);
		$this->template->load('admin/template', 'admin/pengguna', array_merge($data));
	}
	public function simpan()
	{
		$username = $this->input->post('username');
		$cekusername = $this->db->where('username', $username)->count_all_results('user');
		if ($cekusername == 1) {
			$this->session->set_flashdata('alert', '
		<div class="alert alert-danger alert-dismissible fade show" role="alert">
			<i class="fa fa-exclamation-circle me-2"></i>
			username sudah ada
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		</div>
		');
			redirect('admin/user');
		}
		$data = array(
			'username' => $this->input->post('username'),
			'password' => md5($this->input->post('password')),
			'nama' => $this->input->post('nama'),
			'level' => $this->input->post('level')
		);
		$this->db->insert('user', $data);
		$this->session->set_flashdata('alert', '
		<div class="alert alert-primary alert-dismissible fade show" role="alert">
			<i class="fa fa-exclamation-circle me-2"></i>
				Berhasil di simpan
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		</div>
		');
		redirect('admin/user');

	}

	public function edit($id)
	{
		$this->db->select('*')->from('user');
		$this->db->where('id_user', $id);
		$user = $this->db->get()->result_array();
		$data = array(
			'user' => $user,
			'judul_title' => "Edit Data|Admin CMS"
		);
		$this->template->load('admin/template', 'admin/pengguna', array_merge($data));

	}
	public function update()
	{

		$data = array(
			'nama' => $this->input->post('nama'),
			'level' => $this->input->post('level'),
		);
		$where = array('id_user' => $this->input->post('id_user'));
		$this->db->update('user', $data, $where);
		$this->session->set_flashdata('alert', '<div class="alert alert-primary alert-dismissible fade show" role="alert">
		<i class="fa fa-exclamation-circle me-2"></i>
			Berhasil Edit
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		</div>
		');
		redirect('admin/user');
	}
	public function hapus($id)
	{
		$where = array('id_user' => $id);
		$data = $this->db->Delete('user', $where);
		$this->session->set_flashdata('alert', '<div class="alert alert-primary alert-dismissible fade show" role="alert">
		<i class="fa fa-exclamation-circle me-2"></i>
			SUKSES
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		</div>');
		redirect('admin/user');
	}

}