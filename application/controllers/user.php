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
        }

        // method untuk proses registrasi form 
        public function prosesRegister()
        {
            // cek validasi pada form 
            $this->form_validation->set_rules('nama_depan', 'Nama Depan', 'required');
            $this->form_validation->set_rules('nama_belakang', 'Nama Belakang', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[karyawan.email]');
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
                exit();
            }
        }


        // method login 
        public function login()
        {
            $data['title'] = "Login";

            // untuk melihat data session secara array ketika berhasil login 
            // print_r($this->session->userdata());
            // untuk melihat session secara satu field atau bukan array 
            // echo $this->session->userdata('nama_depan');

            $this->load->view('template/header', $data);
            $this->load->view('login', $data);
        }

        // method prosesLogin 
        public function prosesLogin()
        {
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
            $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');

            $email = $this->input->post('email');

            // cek validasi email dan password 
            if($this->form_validation->run() == false ) {
                $this->login();
            } 
                // jika id dan password tidak kosong dan tidak sama dengan data di database 
            elseif($this->form_validation->run() != null && $this->form_validation->run() != $this->User_model->login($email)) {
                $dataDanger = [
                                'notif' => 'Email atau Password belom tersedia!',
                                'alert' => 'alert-danger'
                              ];
                $this->session->set_flashdata($dataDanger);

                redirect('login');
                exit();
                

                
            }
            elseif($this->form_validation->run() === true ){
                $email = $this->input->post('email');
                $password = $this->input->post('password');

                $user = $this->User_model->login($email);

                if($this->password->verify($password, $user->password)) {
                    // jika password benar 
                    // buat session 
                    $dataLogin = [
                                    'logged_in'     => TRUE,
                                    'user_id'       => $user->id,
                                    'nama_depan'    =>$user->nama_depan,
                                    'nama_belakang' =>$user->nama_belakang
                                 ];
                    // untuk mwlihat data session ini perhatikan pada method login diatas 
                    $this->session->set_userdata($dataLogin);

                    redirect('dashboard');

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