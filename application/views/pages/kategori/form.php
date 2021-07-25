<div class="card">
    <div class="card-body">
        <!-- // * MEMBUAT FORM KATEGORI  -->
        <?php
            echo form_open('administrasi/kategori/simpan');
        ?>

        <div class="form-group row">
            <label class="col-3" for="kategori">Kategori</label>
            <div class="col-9">
                <?php
                    $data =[
                            'type' => 'text',
                            'name' => 'kategori',
                            'class' => 'form-control'
                            ];
                    echo form_input($data);
                ?>      
            </div>
        </div>
    </div>
</div>