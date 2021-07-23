<?php 

    class Dashboard extends CI_Controller{

        public function __construct()
        {
            parent::__construct();
        }

        public function index()
        {

            print_r($this->session->userdata());

            $data['title'] = 'Dashboard';
            
            $this->load->view('template/dashboard/header', $data);
            $this->load->view('template/dashboard/body', $data);
            $this->load->view('template/dashboard/footer', $data);
        }
    }