<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Gallery extends CI_Controller
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
        $this->db->select('*')->from('gallery');
        $galer = $this->db->get()->result_array();
        $data = array(
            'galer' => $galer,
            'kategori' => $kategori,
            'judul_title' => "Gallery|Admin CMS"
        );
        $this->template->load('admin/template', 'admin/gallery', array_merge($data));
    }

    public function simpan()
    {
        $namafoto = date('YmdHis') . '.jpg';
        $config['upload_path'] = realpath('assets/upload/gallery/');
        $config['max_size'] = 500 * 1024; //500 * 1024 * 1024; //3Mb; 0=unlimited
        $config['allowed_types'] = '*';
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
            redirect('admin/caraousel');
        } elseif (!$this->upload->do_upload('foto')) {
            $error = array('error' => $this->upload->display_errors());
            print_r($error);
        } else {
            $data = array('upload' => $this->upload->data());
        }
        $data = array(
            'judul' => $this->input->post('judul'),
            'foto' => $namafoto
        );
        $this->db->insert('gallery', $data);
        $this->session->set_flashdata('alert', '<div class="alert alert-primary alert-dismissible fade show" role="alert">
		<i class="fa fa-exclamation-circle me-2"></i>
			Berhasil Tambah
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		</div>
        ');
        redirect('admin/gallery');
    }
    public function update_konten()
    {
        $namafoto = $this->input->post('nama_foto');
        $config['upload_path'] = realpath('assets/upload/konten/');
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
            'judul' => $this->input->post('judul'),
            'keterangan' => $this->input->post('keterangan'),
            'id_kategori' => $this->input->post('id_kategori'),
            'slug' => str_replace(' ', '-', $this->input->post('judul')),

        );
        $where = array(
            'foto' => $this->input->post('nama_foto')
        );
        $this->db->update('konten', $data, $where);
        $this->session->set_flashdata('alert', '<div class="alert alert-primary alert-dismissible fade show" role="alert">
		<i class="fa fa-exclamation-circle me-2"></i>
			Berhasil Perbarui
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		</div>
        ');
        redirect('admin/konten');
    }
    public function hapus_foto($id)
    {
        $filename = FCPATH . '/assets/upload/gallery/' . $id;
        if (file_exists($filename)) {
            unlink("./assets/upload/gallery/" . $id);
        }
        $where = array(
            'foto' => $id
        );
        $this->db->Delete('gallery', $where);
        $this->session->set_flashdata('alert', '<div class="alert alert-primary alert-dismissible fade show" role="alert">
		<i class="fa fa-exclamation-circle me-2"></i>
			SUKSES
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		</div>');
        redirect('admin/gallery');
    }
}