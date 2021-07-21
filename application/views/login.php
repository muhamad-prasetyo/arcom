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

                <div class="card-header">Login</div>

                <div class="card-body">

                    <?php
                        // membuka / membuat form 
                        echo form_open(base_url('user/prosesRegister'), ['class' => 'form-arcom']);

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