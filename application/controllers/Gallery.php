<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Gallery  extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('pagination');
    }

    public function index()
    {
        $this->load->model('gallery_model');

        $this->db->from('konfigurasi');
        $konfig = $this->db->get()->row();

        $this->db->from('caraousel');
        $caraousel = $this->db->get()->result_array();

        $this->db->from('kategori');
        $kategori = $this->db->get()->result_array();

        $this->db->from('kategori_menu');
        $kategmen = $this->db->get()->result_array();

        $config['base_url'] = 'http://[::1]/cemes/gallery/index/';
        $config['total_rows'] = $this->gallery_model->semuafoto();
        $config['per_page'] = 6;

        $config['first_link'] = 'First';
        $config['last_link'] = 'Last';
        $config['next_link'] = 'Next';
        $config['prev_link'] = 'Prev';
        $config['full_tag_open'] = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close'] = '</ul></nav></div>';
        $config['num_tag_open'] = '<li class="page-item disabled"><span class="page-link">';
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

        $datai['start'] = $this->uri->segment(3);
        // $datamod['gallery_model'] = $this->gallery_model->allfoto($config['per_page'], $datai['start']);
        $data = array(

            'judul' => "Gallery",
            'konfig' => $konfig,
            'kategori' => $kategori,
            'caraousel' => $caraousel,
            'gallery' => $this->gallery_model->allfoto($config['per_page'], $datai['start']),
            'kategmen' => $kategmen
        );
        $this->template->load('templatead','gallery', array_merge($data));

    }
}