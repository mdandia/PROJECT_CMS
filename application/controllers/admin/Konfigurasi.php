<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Konfigurasi extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('level') ==NULL) {
			redirect('admin/auth');
		}
		}
	
	public function index()
	{
        $this->db->from('konfigurasi');
        $konfig = $this->db->get()->row();
		$title = array(
			'judul_title' => "Konfigurasi|Admin CMS",
            'konfig'      => $konfig
		);
		$this->template->load('admin/template', 'admin/konfigurasi',array_merge($title));
	}
    public function update()
	{
		$data = array(
			'judul_website' => $this->input->post('judul_website'),
			'judul_profil' => $this->input->post('judul_profil'),
			'profil_website' => $this->input->post('profil_website'),
			'instagram' => $this->input->post('instagram'),
			'facebook' => $this->input->post('facebook'),
			'email' => $this->input->post('email'),
			'alamat' => $this->input->post('alamat'),
			'no_wa' => $this->input->post('no_wa'),
		);
		$where = array(
			'id_konfigurasi' => 1
		);
		$this->db->update('konfigurasi', $data, $where);
		$this->session->set_flashdata('alert', '<div class="alert alert-primary alert-dismissible fade show" role="alert">
		<i class="fa fa-exclamation-circle me-2"></i>
			Berhasil Perbarui
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		</div>
		');
		redirect('admin/konfigurasi');
	}
}