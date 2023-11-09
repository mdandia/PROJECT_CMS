<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->db->from('konfigurasi');
        $konfig = $this->db->get()->row();

        $this->db->from('caraousel');
        $caraousel = $this->db->get()->result_array();

        $this->db->from('kategori');
        $kategori = $this->db->get()->result_array();

        $this->db->from('kategori_menu');
        $kategmen = $this->db->get()->result_array();
        $this->db->from('gallery');
		$gallery = $this->db->limit(8)->get()->result_array();
        $this->db->from('pricelist');
        $this->db->join('kategori_menu', 'pricelist.id_menu=kategori_menu.id_menu', 'left');
        $this->db->order_by('judul', 'DESC');
        $menu = $this->db->get()->result_array();

        $data = array(
            'judul' => "Menu",
            'konfig' => $konfig,
            'kategori' => $kategori,
            'caraousel' => $caraousel,
            'menu' => $menu,
            'gallery' => $gallery,
            'kategmen' => $kategmen
        );
        $this->template->load('templatead','harga', $data);
    }
}