<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Blog extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('pagination');
        $this->load->model('blog_m');
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
        $this->db->from('gallery');
		$gallery = $this->db->limit(8)->get()->result_array();
        $this->db->from('konten');
		$this->db->join('kategori', 'konten.id_kategori=kategori.id_kategori', 'left');
		$this->db->join('user', 'konten.username=user.username', 'left');
		$this->db->order_by('tanggal', 'DESC');
		$rencent = $this->db->limit(4)->get()->result_array();
        if ($this->input->post('submit')) {
			$data['keyword'] = $this->input->post('keyword');
			// $this->session->set_userdata('cari', $data['keyword']);
		} else {
			$data['keyword'] = null;
		}
        // $keyword = $this->input->get('keyword');
        // $search = $this->blog_m->search($keyword);
        $config['base_url'] = 'http://[::1]/cemes/blog/index/';
        $config['total_rows'] = $this->blog_m->semuakonten();
        $config['per_page'] = 3;

        $config['first_link'] = 'First';
        $config['last_link'] = 'Last';
        $config['next_link'] = 'Next';
        $config['prev_link'] = 'Prev';
        $config['full_tag_open'] = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close'] = '</ul></nav></div>';
        $config['num_tag_open'] = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close'] = '</span></li>';
        $config['cur_tag_open'] = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close'] = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open'] = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close'] = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open'] = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close'] = '</span>Next</li>';
        $config['first_tag_open'] = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open'] = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close'] = '</span></li>';
        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(3);
        $data = array(
            'judul' => "Blog",
            'konfig' => $konfig,
            'kategori' => $kategori,
            'caraousel' => $caraousel,
            'gallery' => $gallery,
            'rencent' => $rencent,
            'konten' => $this->blog_m->allkonten($config['per_page'], $data['start'], $data['keyword']),
            'list' => $list
        );
        $this->template->load('templatead','blog', array_merge($data));
    }
    public function search(){
        $this->db->from('konfigurasi');
        $konfig = $this->db->get()->row();
        $this->db->from('caraousel');
        $caraousel = $this->db->get()->result_array();
        $this->db->from('kategori');
        $kategori = $this->db->get()->result_array();
        $this->db->from('gallery');
		$gallery = $this->db->limit(8)->get()->result_array();
        $this->db->from('konten');
		$this->db->join('kategori', 'konten.id_kategori=kategori.id_kategori', 'left');
		$this->db->join('user', 'konten.username=user.username', 'left');
		$this->db->order_by('tanggal', 'DESC');
		$rencent = $this->db->limit(4)->get()->result_array();
        $keyword = $this->input->post('keyword');
        $hasil =  $this->blog_m->search($keyword);
        $data = array(
            'judul' => "Blog",
            'konfig' => $konfig,
            'kategori' => $kategori,
            'caraousel' => $caraousel,
            'konten' => $hasil,
            'gallery' => $gallery,
            'rencent' => $rencent,
        );
        $this->template->load('templatead','blog', array_merge($data));
    }
    public function artikel($id)
    {
        $this->db->from('konfigurasi');
        $konfig = $this->db->get()->row();
        $this->db->from('caraousel');
        $caraousel = $this->db->get()->result_array();
        $this->db->from('kategori');
        $kategori = $this->db->get()->result_array();
        $this->db->from('gallery');
		$gallery = $this->db->limit(8)->get()->result_array();
        $this->db->from('konten');
		$this->db->join('kategori', 'konten.id_kategori=kategori.id_kategori', 'left');
		$this->db->join('user', 'konten.username=user.username', 'left');
		$this->db->order_by('tanggal', 'DESC');
		$rencent = $this->db->limit(4)->get()->result_array();
        $this->db->from('konten');
        $this->db->join('kategori', 'konten.id_kategori=kategori.id_kategori', 'left');
        $this->db->join('user', 'konten.username=user.username', 'left');
        $this->db->where('slug', $id);
        $konten = $this->db->get()->row();
        $data = array(
            'judul' => $konten->judul . " |Gun Gun",
            'konfig' => $konfig,
            'kategori' => $kategori,
            'gallery' => $gallery,
            'caraousel' => $caraousel,
            'rencent' => $rencent,
            'konten' => $konten
        );
        $this->template->load('templatead','blog_detil', array_merge($data));
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
		$this->db->order_by('tanggal', 'DESC');
		$rencent = $this->db->limit(4)->get()->result_array();
        $this->db->from('gallery');
		$gallery = $this->db->limit(8)->get()->result_array();
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
            'gallery' => $gallery,
            'rencent' => $rencent,
            'nama_kateg' => $nama_kateg
        );
        $this->template->load('templatead','blog', array_merge($data));
    }



}