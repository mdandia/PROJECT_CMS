<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pricelist extends CI_Controller
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

        $this->db->from('pricelist');
        $this->db->join('kategori_menu', 'pricelist.id_menu=kategori_menu.id_menu', 'left');
        $this->db->order_by('foto', 'DESC');
        $servis = $this->db->get()->result_array();
        $data = array(
            'servis' => $servis,
            'menu' =>  $menu,
            'judul_title' => "Tambah Data Servis|Admin CMS"
        ); 
        $this->template->load('admin/template', 'admin/pricelist', array_merge($data));
    }

    public function simpan()
    {
        $namafoto = date('YmdHis') . '.jpg';
        $config['upload_path'] = realpath('assets/upload/pricelist/');
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
            redirect('admin/pricelist');
        } elseif (!$this->upload->do_upload('foto')) {
            $error = array('error' => $this->upload->display_errors());
            print_r($error);
        } else {
            $data = array('upload' => $this->upload->data());
        }
        $this->db->from('pricelist');
        $this->db->where('judul', $this->input->post('judul'));
        $cek = $this->db->get()->result_array();
        if ($cek <> NULL) {
            $this->session->set_flashdata('alert', '
		<div class="alert alert-danger alert-dismissible fade show" role="alert">
			<i class="fa fa-exclamation-circle me-2"></i>
			nama kategori sudah ada
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		</div>
		');
            redirect('admin/pricelist');
        }
        $data = array(
            'judul' => $this->input->post('judul'),
            'keterangan' => $this->input->post('keterangan'),
            'foto' => $namafoto,
            'id_menu' => $this->input->post('id_menu'),
            'harga' => $this->input->post('harga')

        );
        $this->db->insert('pricelist', $data);
        $this->session->set_flashdata('alert', '<div class="alert alert-primary alert-dismissible fade show" role="alert">
		<i class="fa fa-exclamation-circle me-2"></i>
			Berhasil Tambah
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		</div>
        ');
        redirect('admin/pricelist/');
    }
    public function update_list()
    {
        $namafoto = $this->input->post('nama_foto');
        $config['upload_path'] = realpath('assets/upload/pricelist/');
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
            redirect('admin/pricelist');
        } elseif (!$this->upload->do_upload('foto')) {
            $error = array('error' => $this->upload->display_errors());
            print_r($error);
        } else {
            $data = array('upload' => $this->upload->data());
        }
        $data = array(
            'judul' => $this->input->post('judul'),
            'keterangan' => $this->input->post('keterangan'),
            'id_menu' => $this->input->post('id_menu'),
            'harga' => $this->input->post('harga')

        );
        $where = array(
            'foto' =>  $this->input->post('nama_foto')
        );
        $this->db->update('pricelist', $data,$where);
        $this->session->set_flashdata('alert', '<div class="alert alert-primary alert-dismissible fade show" role="alert">
		<i class="fa fa-exclamation-circle me-2"></i>
			Berhasil Perbarui
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		</div>
        ');
        redirect('admin/pricelist');
    }
    public function hapus_konten($id)
    {
        $filename = FCPATH . '/assets/upload/pricelist/' . $id;
        if (file_exists($filename)) {
            unlink("./assets/upload/pricelist/" . $id);
        }
        $where = array(
            'foto' => $id
        );
        $this->db->Delete('pricelist', $where);
        $this->session->set_flashdata('alert', '<div class="alert alert-primary alert-dismissible fade show" role="alert">
		<i class="fa fa-exclamation-circle me-2"></i>
			SUKSES
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		</div>');
        redirect('admin/pricelist');
    }
}