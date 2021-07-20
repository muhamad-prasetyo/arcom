<?php

    class Halaman extends CI_Controller {


        public function __construct()
        {
            
            parent::__construct();


            // untuk tidak mengulang penulisan data load database dan model pada setiap metod didalam halaman.php ini
            // penulisan ini hanya untuk manual jika tidak menggunakan autoload  
            // $this->load->database();
            // $this->load->model('karyawan_model');

        
        }

        public function tampil()
        {
            $data['title'] = "ini title dinamis";
            $data['dataKaryawan'] = $this->karyawan_model->semua()
                                         ->row();

            $this->load->view('template/header', $data);
            $this->load->view('tampilSaya', $data);
            $this->load->view('template/footer', $data);
        }

    }