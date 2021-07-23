<div class="container">
    <div class="row h-75 align-items-center">
        <div class="col-md-7">
            <h2 class="title-register">Sistem Perusahaan Arcom</h2>
            <h3 class="title-register">Pengelolaan Karyawan & Digital Absensi</h3>

            <div class="akses-button">
                <?php 
                    $dataAnchor =  ['class' => 'btn btn-outline-success mr-2 active'];
                    echo anchor('login', 'LOGIN', $dataAnchor);
                    
                    
                    echo anchor('register', 'REGISTER', ['class' => 'btn btn-info']);

                ?>
            </div>
        </div>

        <div class="col-md-5">
            <div class="card frame-form-arcom">

                <div class="card-header">Login</div>

                <div class="card-body">

                    <?php
                        // cek apakah akun berhasil dibuat
                        if($this->session->flashdata('pesan')) : ?>
                    <!-- menampilkan notif pada login jika berhasil -->
                        <div class="alert alert-success"><?= $this->session->flashdata('pesan'); ?></div>
                    <?php endif; ?>

                    <?php
                        // cek apakah user login dengan data yg sesuai database 
                        if($this->session->flashdata('notif')) :
                    ?>
                        <div class="alert <?= $this->session->flashdata('alert'); ?>">
                            <?= $this->session->flashdata('notif'); ?>
                        </div>
                    <?php endif; ?>

                    <?php
                        // membuka / membuat form 
                        echo form_open(base_url('login/proses'), ['class' => 'form-arcom']);

                        // untuk memberikaan pesan error jika form tidak disi dengan benar 
                        // echo validation_errors();

                    ?>   

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
                    
                    <!-- tombol submit atau kirim  -->
                    <?php 

                        echo form_submit(['name' => 'submit', 'class' => 'btn btn-success btn-block'], 'Login');
                        
                        // menutup form 
                        echo form_close();

                    ?>
                 </div>  
                </div>
            </div>
        </div>

    </div>
</div>