<?php 

    class Karyawan_model extends CI_Model {

        public function semua() 
        {
            $query =$this->db->select('*')
                            ->get('karyawan');
            
            return $query;
        }

    }