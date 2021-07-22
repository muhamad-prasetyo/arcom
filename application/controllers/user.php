<?php 

    class User extends CI_Controller {

        public function __construct()
        {
            parent::__construct();

            $this->load->library('password');
            $this->load->model('User_model');
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
            $this->form_validation->set_rules('email', 'Email', 'required|is_unique[karyawan.email]');
            $this->form_validation->set_rules('dob', 'Tanggal Lahir', 'required');
            $this->form_validation->set_rules('alamat', 'Alamat', 'required');
            $this->form_validation->set_rules('nomor_telepon', 'nomor_telepon', 'required');
            $this->form_validation->set_rules('nomor_hp', 'Nomor HP', 'required');
            $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
            $this->form_validation->set_rules('status_perkawinan', 'Status Perkawinan', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');
            $this->form_validation->set_rules('konfirmasi_password', 'Konfirmasi Password', 'required|matches[password]');

            if($this->form_validation->run() == false) {
                $this->register();
            } else {  
                // nanti disimpan ke database 

                // data form yg akan dikirim ke database 
                $dataRegister = [
                                    'nama_depan'        => $this->input->post('nama_depan'),
                                    'nama_belakang'     => $this->input->post('nama_belakang'),
                                    'email'             => $this->input->post('email'),
                                    'dob'               => $this->input->post('dob'),
                                    'alamat'            => $this->input->post('alamat'),
                                    'nomor_telepon'     => $this->input->post('nomor_telepon'),
                                    'nomor_hp'          => $this->input->post('nomor_hp'),
                                    'jenis_kelamin'     => $this->input->post('jenis_kelamin'),
                                    'status_perkawinan' => $this->input->post('status_perkawinan'),
                                    'password'          => $this->password->hash($this->input->post('password')),
                                    'id_departemen'     => 1,
                                    'id_posisi'         => 1,
                                    'dibuat'            => date('Y-m-d H:i:s'),
                                    'diganti'           => date('Y-m-d H:i:s'),
                                    'status'            => 'interview'
                                ];

                $this->User_model->create($dataRegister);

                // untuk menampilkan notif jika berhasil membuat akun 
                $dataPesan = ['pesan' => 'Akun anda berhasil dibuat'];
                $this->session->set_flashdata($dataPesan);

                redirect('login');
            }
        }


        // method login 
        public function login()
        {
            $data['title'] = "Login";

            $this->load->view('template/header', $data);
            $this->load->view('login', $data);
            $this->load->view('template/footer', $data);
        }

        // method prosesLogin 
        public function prosesLogin()
        {
            $this->form_validation->set_rules('email', 'Email', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');

            $email = $this->input->post('email');

            // cek validasi email dan password 
            if($this->form_validation->run() == false ) {
                $this->login();
            } 
            elseif($this->form_validation->run() != null && $this->form_validation->run() != $this->User_model->login($email)) {
                $dataDanger = [
                                'notif' => 'Email atau Password belom tersedia!',
                                'alert' => 'alert-danger'
                              ];
                $this->session->set_flashdata($dataDanger);

                redirect('login');
                exit();
                

                
            }
            elseif( $this->form_validation->run() === true )
            {
                $email = $this->input->post('email');
                $password = $this->input->post('password');

                $user = $this->User_model->login($email);

                if($this->password->verify($password, $user->password)) {
                    // jika password benar 
                    echo "berhasil Login";
                } else {

                    // jika password salah maka jalankan 
                    $dataDanger = [
                        'notif' => 'Password Salah!',
                        'alert' => 'alert-danger'
                      ];
                        $this->session->set_flashdata($dataDanger);

                        redirect('login');
                        exit();
                    
                }
            }
            else {

                echo "Silahkan Daftar terlebih dahulu";
            }
        }
    }