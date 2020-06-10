<?php

class Img_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function get_img()
    {
        $query = $this->db->get('images');

        return $query->result();
    }

    public function set_img($img_data)
    {
        $this->db->insert('images', $img_data);
    }
}