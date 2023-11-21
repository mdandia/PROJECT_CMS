<?php

class blog_m extends CI_Model
{


    public function semua()
    {
        $this->db->join('kategori', 'konten.id_kategori=kategori.id_kategori', 'left');
        $this->db->join('user', 'konten.username=user.username', 'left');
        $this->db->order_by('tanggal', 'DESC');
        return $this->db->get('konten')->result_array();
    }
    public function search($keyword)
    {
        $this->db->like('judul', $keyword);
        $this->db->or_like('keterangan', $keyword);
        $this->db->join('kategori', 'konten.id_kategori=kategori.id_kategori', 'left');
        $this->db->join('user', 'konten.username=user.username', 'left');
        $this->db->order_by('tanggal', 'DESC');
        return $this->db->get('konten')->result_array();
    }
    public function allkonten($limit, $start)
    {
        $this->db->join('kategori', 'konten.id_kategori=kategori.id_kategori', 'left');
        $this->db->join('user', 'konten.username=user.username', 'left');
        $this->db->order_by('tanggal', 'DESC');
        return $this->db->get('konten', $limit, $start)->result_array();
    }
    public function semuakonten()
    {
        return $this->db->get('konten')->num_rows();
    }


}