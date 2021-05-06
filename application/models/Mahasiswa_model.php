<?php

class Mahasiswa_model extends CI_model {
    public function getAllMahasiswa()
    {
        // $query = $this->db->get('mahasiswa');
        // return $query->result_array();

        // Chaining
        return $this->db->get('mahasiswa')->result_array();
    }
}