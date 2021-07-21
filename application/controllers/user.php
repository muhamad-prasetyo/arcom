<?php 

    class User extends CI_Controller {

        public function __construct()
        {
            parent::__construct();
        }


        public function register()
        {
            $data['title'] = "Register";

            $this->load->view('template/header', $data);
            $this->load->view('register', $data);
            $this->load->view('template/footer', $data);
        }

        // method untuk proses registrasi form 
        public function prosesRegister()
        {
            // cek validasi pada form 
            $this->form_validation->set_rules('nama_depan', 'Nama Depan', 'required');
            $this->form_validation->set_rules('nama_belakang', 'Nama Belakang', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required');
            $this->form_validation->set_rules('dob', 'Tanggal Lahir', 'required');
            $this->form_validation->set_rules('alamat', 'Alamat', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required');
            $this->form_validation->set_rules('nomor_hp', 'Nomor HP', 'required');
            $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
            $this->form_validation->set_rules('status_perkawinan', 'Status Perkawinan', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');
            $this->form_validation->set_rules('konfirmasi_password', 'Konfirmasi Password', 'required|matches[password]');

            if($this->form_validation->run() == false) {
                $this->register();
            } else {  
                // nanti disimpan ke database 
            }
        }
    }