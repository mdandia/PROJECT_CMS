<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kontak extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		$this->db->from('konfigurasi');
		$konfig = $this->db->get()->row();
		$this->db->from('pricelist');
		$list = $this->db->get()->result_array();
		$this->db->from('kategori');
		$kategori = $this->db->get()->result_array();
		$this->db->from('gallery');
		$gallery = $this->db->limit(8)->get()->result_array();
		$this->db->from('caraousel');
		$caraousel = $this->db->get()->result_array();
		$this->db->from('kategori_menu');
		$kategmen = $this->db->get()->result_array();
		$this->db->select('*')->from('reservasi');
		$this->db->order_by('nama', 'ASC');
		$reservasi = $this->db->get()->result_array();
		$this->db->from('konten');
		$this->db->join('kategori', 'konten.id_kategori=kategori.id_kategori', 'left');
		$this->db->join('user', 'konten.username=user.username', 'left');
		$this->db->order_by('tanggal', 'DESC');
		$konten = $this->db->limit(3)->get()->result_array();
		$data = array(
			'judul' => "Contact",
			'konfig' => $konfig,
			'kategori' => $kategori,
			'caraousel' => $caraousel,
			'konten' => $konten,
			'kategmen' => $kategmen,
			'gallery' => $gallery,
			'reservasi' => $reservasi,
			'list' => $list
		);
		$this->template->load('templatead', 'kontak', array_merge($data));
	}
	
}