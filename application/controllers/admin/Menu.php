<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
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
		$this->db->select('*')->from('kategori_menu');
		$this->db->order_by('nama_menu', 'ASC');
		$menu = $this->db->get()->result_array();
		$data = array(
			'menu' => $menu,
			'judul_title' => "Tambah Barang & Kategori|Admin CMS"
		);
		$this->template->load('admin/template', 'admin/menu', array_merge($data));
	}

	public function simpan_menu()
	{
		$namafoto = date('YmdHis') . '.jpg';
		$config['upload_path'] = realpath('assets/upload/kategori/');
		$config['max_size'] = 500 * 1024; //500 * 1024 * 1024; //3Mb; 0=unlimited
		$config['allowed_types'] = 'gif|jpg|png';
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
		$this->db->from('kategori_menu');
		$this->db->where('nama_menu', $this->input->post('nama_menu'));
		$cek = $this->db->get()->result_array();
		if ($cek <> NULL) {
			$this->session->set_flashdata('alert', '
		<div class="alert alert-danger alert-dismissible fade show" role="alert">
			<i class="fa fa-exclamation-circle me-2"></i>
			nama kategori sudah ada
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		</div>
		');
			redirect('admin/menu');
		}
		$data = array(
			'nama_menu' => $this->input->post('nama_menu'),
			'foto_menu' => $namafoto
		);
		$this->db->insert('kategori_menu', $data);
		$this->session->set_flashdata('alert', '<div class="alert alert-primary alert-dismissible fade show" role="alert">
		<i class="fa fa-exclamation-circle me-2"></i>
			Berhasil Tambah
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		</div>
        ');
		redirect('admin/menu');
	}
	public function update_menu()
	{
		$namafoto = $this->input->post('nama_foto');
		$config['upload_path'] = realpath('assets/upload/kategori/');
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
			'nama_menu' => $this->input->post('nama_menu'),
		);
		$where = array(
			'foto_menu' => $this->input->post('nama_foto')
		);
		$this->db->update('kategori_menu', $data, $where);
		$this->session->set_flashdata('alert', '<div class="alert alert-primary alert-dismissible fade show" role="alert">
		<i class="fa fa-exclamation-circle me-2"></i>
			Berhasil Edit
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		</div>
		');
		redirect('admin/menu');
	}
	public function hapus_menu($id)
	{
		$filename = FCPATH . '/assets/upload/kategori/' . $id;
		if (file_exists($filename)) {
			unlink("./assets/upload/kategori/" . $id);
		}
		$where = array('foto_menu' => $id);
		$data = $this->db->Delete('kategori_menu', $where);
		$this->session->set_flashdata('alert', '<div class="alert alert-primary alert-dismissible fade show" role="alert">
		<i class="fa fa-exclamation-circle me-2"></i>
			SUKSES
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		</div>');
		redirect('admin/menu');
	}
}