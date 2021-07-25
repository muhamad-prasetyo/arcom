<?php 

    class Kategori extends CI_Controller {

        public function __construct()
        {   
            parent::__construct();
        }

        public function index()
        {
            
            $data['title'] = 'Kategory';
            $data['kontenDinamis'] = 'pages/kategori/list';

            $this->load->view('template/dashboard/body', $data);
        }

        public function create()
        {
            $data['title'] = 'Kategori';
            $data['kontenDinamis'] = 'pages/kategori/form';

            $this->load->view('template/dashboard/body', $data);
        }

        public function store()
        {
            echo "data akan disimpan disini";
        }
    }