<div class="container">
    <div class="row h-70 align-items-center">
        <div class="col-md-6 py-3">
            <h2>Pendaftaran Calon Karyawan </h2>
            <h3>Pengelola Karyawan & Digital Absensi</h3>

            <div class="akses-button">
                <?php 
                    $dataAnchor =  ['class' => 'btn btn-outline-success mr-2'];
                     echo anchor('login', 'LOGIN', $dataAnchor);                
                     echo anchor('register', 'REGISTER', ['class' => 'btn btn-outline-info active']);

                ?>
            </div>
        </div>

        <div class="col-md-6 mt-4 mb-3">
            <div class="card frame-form-arcom">

                <div class="card-header">Daftar Interview</div>

                <div class="card-body">

                    <?php
                        // membuka / membuat form 
                        echo form_open(base_url('register/proses'), ['class' => 'form-arcom']);

                        // untuk memberikaan pesan error jika form tidak disi dengan benar 
                        // echo validation_errors();

                    ?>

                    <div class="form-group row">
                        <label for="nama_depan" class="col-3">Nama Depan</label>
                        <div class="col-9">
                            <?php
                                // untuk input form nama depan 
                                $dataNamadepan = ['name' => 'nama_depan',
                                                'id' => 'nama_depan',
                                                'class' => 'form-control',
                                                'value' => set_value('nama_depan'),
                                                'placeholder' => 'Nama Depan'
                                                ]; 
                                echo form_input($dataNamadepan);
                                echo form_error('nama_depan');
                            ?>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="nama_belakang" class="col-3">Nama Belakang</label>
                        <div class="col-9">
                            <?php
                                // untuk input form nama depan 
                                $dataNamabelakang = ['name' => 'nama_belakang',
                                                'id' => 'nama_belakang',
                                                'class' => 'form-control',
                                                'value' => set_value('nama_belakang'),
                                                'placeholder' => 'Nama Belakang'
                                                ]; 
                                echo form_input($dataNamabelakang);
                                echo form_error('nama_belakang');

                            ?>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="email" class="col-3">Email</label>
                        <div class="col-9">
                            <?php
                                // untuk input form nama depan 
                                $dataEmail = ['name' => 'email',
                                                'id' => 'email',
                                                // 'type' => 'email',
                                                'class' => 'form-control',
                                                'value' => set_value('email'),
                                                'placeholder' => 'Email'
                                                ]; 
                                echo form_input($dataEmail);
                                echo form_error('email');

                            ?>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="dob" class="col-3">Tanggal Lahir</label>
                        <div class="col-9">
                            <?php
                                // untuk input form nama depan 
                                $dataDob = ['name' => 'dob',
                                                'id' => 'dob',
                                                'class' => 'form-control',
                                                'value' => set_value('dob'),
                                                'placeholder' => 'Tanggal Lahir'
                                                ]; 
                                echo form_input($dataDob);
                                echo form_error('dob');

                            ?>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="alamat" class="col-3">Alamat</label>
                        <div class="col-9">
                            <?php
                                // untuk input form nama depan 
                                $dataAlamat = ['name' => 'alamat',
                                                'id' => 'alamat',
                                                'class' => 'form-control',
                                                'value' => set_value('alamat'),
                                                'placeholder' => 'Alamat'
                                                ]; 
                                echo form_input($dataAlamat);
                                echo form_error('alamat');

                            ?>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="nomor_telepon" class="col-3">Nomor Telepon</label>
                        <div class="col-9">
                            <?php
                                // untuk input form nama depan 
                                $dataTelepon = ['name' => 'nomor_telepon',
                                                'id' => 'nomor_telepon',
                                                'type' => 'number',
                                                'value' => set_value('nomor_telepon'),
                                                'class' => 'form-control',
                                                'placeholder' => 'Masukan Nomor Telepon Rumah'
                                                ]; 
                                echo form_input($dataTelepon);
                                echo form_error('nomor_telepon');

                            ?>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label for="nomor_hp" class="col-3">Nomor HP</label>
                        <div class="col-9">
                            <?php
                                // untuk input form nama depan 
                                $datahp = ['name' => 'nomor_hp',
                                                'id' => 'nomor_hp',
                                                'type' => 'number',
                                                'value' => set_value('nomor_hp'),
                                                'class' => 'form-control',
                                                'placeholder' => 'Masukan Nomor Handphone / Whatsapp'
                                                ]; 
                                echo form_input($datahp);
                                echo form_error('nomor_hp');

                            ?>
                        </div>
                    </div>  

                    <div class="form-group row">
                        <label for="jenis_kelamin" class="col-3">Jenis Kelamin</label>
                            <div class="col-9">
                                <div class="row">
                                    <div class="col-4">
                                        <label class="radio-inline">
                                        <?php
                                            // untuk input form nama depan 
                                            $dataKelamin = ['name' => 'jenis_kelamin',
                                                            'id' => 'jenis_kelamin',
                                                            'checked' => set_radio('jenis_kelamin', 'wanita')
                                                            ];
                                            echo form_radio($dataKelamin, 'Wanita');
                                        ?>
                                        Wanita
                                        </label>
                                    </div>

                                    <div class="col-4">
                                        <label class="radio-inline">
                                        <?php 
                                            $dataKelamin = ['name' => 'jenis_kelamin',
                                                            'id' => 'jenis_kelamin',
                                                            'checked' => set_radio('jenis_kelamin', 'pria')
                                                        ];
                                            echo form_radio($dataKelamin, 'Pria')
                                        ?>
                                        Pria
                                        </label>
                                    </div>
                               
                            </div>
                            <?php echo form_error('jenis_kelamin'); ?>
                        </div>
                    </div>

                    <!-- menambahkan fitur status_perkawinan -->
                    <div class="form-group row">
                        <label for="status_perkawinan" class="col-3">Status Perkawinan</label>
                            <div class="col-9">
                                <div class="row">
                                    <div class="col-4">
                                        <label class="dropdown-inline">
                                        <?php
                                            // untuk input form nama depan 
                                            $dataKelamin = ['name' => 'status_perkawinan',
                                                            'id' => 'status_perkawinan'
                                                            ];

                                            $options = [
                                                            'Menikah' => 'Menikah',
                                                            'Lajang' => 'Belum Menikah',
                                                            'Duda' => 'Duda',
                                                            'Janda' => 'Janda'
                                                       ];
                                            echo form_dropdown($dataKelamin, $options,);
                                            
                                        ?>
                                        
                                        </label>
                                    </div>
                                </div>
                                <?php echo form_error('status_perkawinan'); ?>
                            </div>
                        </div>

                    <div class="form-group row">
                        <label for="password" class="col-3">Password</label>
                        <div class="col-9">
                            <?php
                                // untuk input form nama depan 
                                $dataPassword = ['name' => 'password',
                                                'id' => 'password',
                                                'class' => 'form-control',
                                                'placeholder' => 'Password'
                                                ]; 
                                echo form_password($dataPassword);
                                echo form_error('password');

                            ?>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="konfirmasi_password" class="col-3">Konfirmasi Password</label>
                        <div class="col-9">
                            <?php
                                // untuk input form nama depan 
                                $data2endPass = ['name' => 'konfirmasi_password',
                                                'id' => 'konfirmasi_password',
                                                'class' => 'form-control',
                                                'placeholder' => 'Konfirmasi Password'
                                                ]; 
                                echo form_password($data2endPass);
                                echo form_error('konfirmasi_password');

                            ?>
                        </div>
                    </div>
                    
                    <!-- tombol submit atau kirim  -->
                    <?php 

                        echo form_submit(['name' => 'submit', 'class' => 'btn btn-success btn-block'], 'Register');
                        
                        // menutup form 
                        echo form_close();

                    ?>
                 </div>  
                </div>
            </div>
        </div>

    </div>
</div>