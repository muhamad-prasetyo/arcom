<?php 

    class User_model extends CI_Model{

        public function create($data)
        {
            $this->db->insert('karyawan', $data);
        }
    }