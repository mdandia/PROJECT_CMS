<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('level') ==NULL) {
			redirect('admin/auth');
		}
		}
	
	public function index()
	{
		$title = array(
			'judul_title' => "Dashboard|Admin CMS"
		);
		$this->template->load('admin/template', 'admin/dashboard',array_merge($title));
	}
}