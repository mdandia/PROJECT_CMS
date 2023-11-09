<?php

class gallery_model extends CI_Model
{
    public function semua(){
        return $this->db->get('gallery')->result_array();
    }

    public function allfoto($limit, $start)
    {
        return $this->db->get('gallery', $limit, $start)->result_array();
    }
    public function semuafoto()
    {
        return $this->db->get('gallery')->num_rows();
    }
}