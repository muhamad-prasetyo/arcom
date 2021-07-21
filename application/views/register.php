<div class="container">
    <div class="row">
        <div class="col-md-6 py-3">
            <h2>Sistem Perusahaan Arcom</h2>
            <h3>Pengelolaan Karyawan & Digital Absensi</h3>

            <div class="akses-button">
                <?php 
                    $dataAnchor =  ['class' => 'btn btn-outline-primary'];
                    echo anchor('user/login', 'LOGIN', $dataAnchor);
                    echo anchor('user/register', 'REGISTER', ['class' => 'btn btn-primary']);

                ?>
            </div>
        </div>

        <div class="col-md-6 py-3">
            <div class="card frame-form-arcom">

                <div class="card-header">Daftar Interview</div>

                <div class="card-body">

                    <?php
                        // membuka / membuat form 
                        echo form_open(base_url('user/prosesRegister'), ['class' => 'form-arcom']);

                    ?>

                    <div class="form-group row">
                        <label for="nama_depan" class="col-3">Nama Depan</label>
                        <div class="col-9">
                            <?php
                                // untuk input form nama depan 
                                $dataNamadepan = ['name' => 'nama_depan',
                                                'id' => 'nama_depan',
                                                'class' => 'form-control',
                                                'placeholder' => 'Nama Depan'
                                                ]; 
                                echo form_input($dataNamadepan);

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
                                                'placeholder' => 'Nama Belakang'
                                                ]; 
                                echo form_input($dataNamabelakang);

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
                                                'class' => 'form-control',
                                                'placeholder' => 'Email'
                                                ]; 
                                echo form_input($dataEmail);

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
                                                'placeholder' => 'Tanggal Lahir'
                                                ]; 
                                echo form_input($dataDob);

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
                                                'placeholder' => 'Alamat'
                                                ]; 
                                echo form_input($dataAlamat);

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
                                                'class' => 'form-control',
                                                'placeholder' => 'Masukan Nomor Telepon Rumah'
                                                ]; 
                                echo form_input($dataTelepon);

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
                                                'class' => 'form-control',
                                                'placeholder' => 'Masukan Nomor Handphone / Whatsapp'
                                                ]; 
                                echo form_input($datahp);

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
                                                            'id' => 'jenis_kelamin'
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
                                                            'id' => 'jenis_kelamin'
                                                        ];
                                            echo form_radio($dataKelamin, 'Pria')
                                        ?>
                                        Pria
                                        </label>
                                    </div>
                               
                            </div>
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