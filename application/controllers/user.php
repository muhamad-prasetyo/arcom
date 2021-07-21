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

    }