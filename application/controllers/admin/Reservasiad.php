<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Reservasiad extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->db->select('*')->from('reservasi');
		$this->db->order_by('nama', 'ASC');
		$reservasi = $this->db->get()->result_array();
		$data = array(
			'reservasi' => $reservasi,
			'judul_title' => "Reservasi|Admin CMS"
		);
        $this->template->load('admin/template', 'admin/reservasiad', array_merge($data));
	}

    public function hapus_data($id){
        $where = array('id_reservasi' => $id);
		$data = $this->db->delete('reservasi', $where);
		$this->session->set_flashdata('alert', '<div class="alert alert-primary alert-dismissible fade show" role="alert">
		<i class="fa fa-exclamation-circle me-2"></i>
			SUKSES
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		</div>');
		redirect('admin/reservasiad');
    }
	
}