<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
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
		$this->db->from('caraousel');
		$caraousel = $this->db->get()->result_array();
		$this->db->from('konten');
		$this->db->join('kategori', 'konten.id_kategori=kategori.id_kategori', 'left');
		$this->db->join('user', 'konten.username=user.username', 'left');
		$this->db->order_by('tanggal', 'DESC');
		$konten = $this->db->get()->result_array();
		$data = array(
			'judul' => "Beranda",
			'konfig' => $konfig,
			'kategori' => $kategori,
			'caraousel' => $caraousel,
			'konten' => $konten,
			'list' => $list
		);
		$this->load->view('beranda', $data);
	}
	public function artikel($id)
	{
		$this->db->from('konfigurasi');
		$konfig = $this->db->get()->row();
		$this->db->from('caraousel');
		$caraousel = $this->db->get()->result_array();
		$this->db->from('kategori');
		$kategori = $this->db->get()->result_array();
		$this->db->from('konten');
		$this->db->join('kategori', 'konten.id_kategori=kategori.id_kategori', 'left');
		$this->db->join('user', 'konten.username=user.username', 'left');
		$this->db->where('slug', $id);
		$konten = $this->db->get()->row();
		$data = array(
			'judul' => $konten->judul . " |Gun Gun",
			'konfig' => $konfig,
			'kategori' => $kategori,
			'caraousel' => $caraousel,
			'konten' => $konten
		);
		$this->load->view('artikel', $data);
	}
	public function kategori($id)
	{
		$this->db->from('konfigurasi');
		$konfig = $this->db->get()->row();

		$this->db->from('caraousel');
		$caraousel = $this->db->get()->result_array();

		$this->db->from('kategori');
		$kategori = $this->db->get()->result_array();

		$this->db->from('konten');
		$this->db->join('kategori', 'konten.id_kategori=kategori.id_kategori', 'left');
		$this->db->join('user', 'konten.username=user.username', 'left');
		$this->db->where('konten.id_kategori', $id);
		$konten = $this->db->get()->result_array();

		$this->db->from('kategori');
		$this->db->where('id_kategori', $id);
		$nama_kateg = $this->db->get()->row()->nama_kategori;
		$data = array(
			'judul' => $nama_kateg . " |Gun Gun",
			'konfig' => $konfig,
			'kategori' => $kategori,
			'caraousel' => $caraousel,
			'konten' => $konten,
			'nama_kateg' => $nama_kateg
		);
		$this->load->view('kategori', $data);
	}


}