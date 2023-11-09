<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kategori extends CI_Controller
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
		$this->db->select('*')->from('kategori');
		$this->db->order_by('nama_kategori', 'ASC');
		$kategori = $this->db->get()->result_array();
		$data = array(
			'kategori' => $kategori,
			'judul_title' => "Tambah Barang & Kategori|Admin CMS"
		);
		$this->template->load('admin/template', 'admin/kategori', array_merge($data));
	}

	public function simpan_kategori()
	{
		$this->db->from('kategori');
		$this->db->where('nama_kategori', $this->input->post('nama_kategori'));
		$cek = $this->db->get()->result_array();
		if ($cek<>NULL) {
			$this->session->set_flashdata('alert', '
		<div class="alert alert-danger alert-dismissible fade show" role="alert">
			<i class="fa fa-exclamation-circle me-2"></i>
			nama kategori sudah ada
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		</div>
		');
			redirect('admin/kategori');
		}
		$data = array(
			'nama_kategori' => $this->input->post('nama_kategori'),
		);
		$this->db->insert('kategori', $data);
		$this->session->set_flashdata('alert', '<div class="alert alert-primary alert-dismissible fade show" role="alert">
		<i class="fa fa-exclamation-circle me-2"></i>
			Berhasil Tambah
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		</div>
        ');
		redirect('admin/kategori');
	}
	public function update_kategori()
	{
		$data = array(
			'nama_kategori' => $this->input->post('nama_kategori'),
		);
		$where = array(
			'id_kategori' => $this->input->post('id_kategori')
		); 
		$this->db->update('kategori', $data, $where);
		$this->session->set_flashdata('alert', '<div class="alert alert-primary alert-dismissible fade show" role="alert">
		<i class="fa fa-exclamation-circle me-2"></i>
			Berhasil Edit
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		</div>
		');
		redirect('admin/kategori');
	}
	public function hapus_kategori($id)
	{
		$where = array('id_kategori' => $id);
		$data = $this->db->Delete('kategori', $where);
		$this->session->set_flashdata('alert', '<div class="alert alert-primary alert-dismissible fade show" role="alert">
		<i class="fa fa-exclamation-circle me-2"></i>
			SUKSES
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		</div>');
		redirect('admin/kategori');
	}
}