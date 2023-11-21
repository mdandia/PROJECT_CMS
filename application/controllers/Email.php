<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Email extends CI_Controller
{
    public function send()
    {
        $email = $this->db->select('email')->from('reservasi');
        // set konfigurasi email library
        $config = array(
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_port' => 465,
            'smtp_user' => 'akungratia@gmail.com',
            'smtp_pass' => 'uzsa xgnc cnij nnri',
            'mailtype' => 'html',
            'charset' => 'iso-8859-1'
        );
        // load library email
        $this->load->library('email', $config);

        // set email yang akan dikirim
        $this->email->set_newline("\r\n");
        $this->email->from('akungratia@gmail.com', 'Adminnya Gun Restaurant');
        $this->email->to('dandiat755@gmail.com');
        $this->email->subject('Percobaan email');
        $this->email->message('Halo Kak! Ini adalah email percobaan untuk Tutorial CodeIgniter: Mengirim Email via Gmail SMTP menggunakan Email Library CodeIgniter @ qadrlabs.com');

        // proses kirim email
        if (!$this->email->send()) {
            // tampilkan error, ketika gagal kirim email
            show_error($this->email->print_debugger());
        } else {
            // tampilkan keterangan sukses kirim email
            echo 'Success to send email';
        }
    }
}