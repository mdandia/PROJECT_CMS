<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Konfigurasi extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('level') == NULL) {
			redirect('admin/auth');
		}
	}

	public function index()
	{
		$this->db->from('konfigurasi');
		$konfig = $this->db->get()->row();
		$title = array(
			'judul_title' => "Konfigurasi|Admin CMS",
			'konfig' => $konfig
		);
		$this->template->load('admin/template', 'admin/konfigurasi', array_merge($title));
	}
	public function update()
	{
		$namafoto = $this->input->post('nama_foto');
		$config['upload_path'] = realpath('assets/upload/konfig/');
		$config['max_size'] = 500 * 1024; //500 * 1024 * 1024; //3Mb; 0=unlimited
		$config['allowed_types'] = '*';
		$config['overwrite'] = true;
		$config['file_name'] = $namafoto;
		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		if ($_FILES['foto']['size'] >= 500 * 1024) {
			$this->session->set_flashdata('alert', '
                <div class="alert alert-danger alert-dismissible" role="alert">
                Ukuran foto terlalu besar, upload ulang foto dengan ukuran yang kurang dari 500 KB.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                    ');
			redirect('admin/konten');
		} elseif (!$this->upload->do_upload('foto')) {
			$error = array('error' => $this->upload->display_errors());
			print_r($error);
		} else {
			$data = array('upload' => $this->upload->data());
		}
		$data = array(
			'judul_website' => $this->input->post('judul_website'),
			'profil_website' => $this->input->post('profil_website'),
			'instagram' => $this->input->post('instagram'),
			'facebook' => $this->input->post('facebook'),
			'email' => $this->input->post('email'),
			'tiktok' => $this->input->post('tiktok'),
			'alamat' => $this->input->post('alamat'),
			'no_wa' => $this->input->post('no_wa'),
			'id_yt' => $this->input->post('id_yt'),
			'jam_buka' => $this->input->post('jam_buka'),
			'foto' => $this->input->post('nama_foto')
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