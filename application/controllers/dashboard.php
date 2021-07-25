<?php 

    class Dashboard extends CI_Controller{

        public function __construct()
        {
            parent::__construct();

            // * memanggil atau include helper
            $this->load->helpers(['menuAktif']);
        }

        public function index()
        {

            // print_r($this->session->userdata());

            $data['title'] = 'Dashboard';
            
            
            $this->load->view('template/dashboard/body', $data);
            
            
        }
    }