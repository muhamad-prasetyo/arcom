<?php 

    class User_model extends CI_Model{

        // untuk memasukan data inputan ke dalam database 
        public function create($data)
        {
            $this->db->insert('karyawan', $data);
        }

        public function login($email)
        {
            $query = $this->db->select('*')
                          ->where('email', $email)
                          ->get('karyawan');

            $row = $query->row();

            return $row;
        }

        
    }