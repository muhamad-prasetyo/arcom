<div class="dashboard">
    <nav id="sidebar" class="bg-color">
        <ul class="menu">
            <li class="<?php if($this->router->fetch_class() == 'dashboard') { echo "active";} ?>"><?php echo anchor('dashboard', 'Dashboard'); ?></li>
            <li class="<?php if($this->router->fetch_class() == 'karyawan') { echo "active";} ?>"><?php echo anchor('karyawan', 'Karyawan'); ?></li>
            <li class="<?php if($this->router->fetch_class() == 'gaji-&-tunjangan') { echo "active"; }?>"><?php echo anchor('dashboard/gaji-&-tunjangan', 'Gaji & Insentif'); ?></li>
            <li class="<?php if($this->router->fetch_class() == 'absensi') { echo "active"; }?>"><?php echo anchor('dashboard/absensi', 'Absensi'); ?></li>
            <li class="<?php if($this->router->fetch_class() == 'posisi') { echo "active"; }?>"><?php echo anchor('dashboard/posisi', 'Posisi'); ?></li>
            <li class="<?php if($this->router->fetch_class() == 'departemen') { echo "active"; }?>"><?php echo anchor('dashboard/departemen', 'Departemen'); ?></li>
            <li>
                <a href="#administrasi" aria-expanded="false" class="dropdown-toggle dropdown-sidebar-arcom" data-toggle="collapse"> 
                    Administrasi
                </a> 

                <ul id="administrasi" class="collapse menu">
                    <li><?php echo anchor('dashboard/kategory', 'Kategori'); ?></li>
                    <li><?php echo anchor('dashboard/kategory', 'Tip Karyawan'); ?></li>
                    <li><?php echo anchor('dashboard/kategory', 'expamle'); ?></li>
                </ul>
            </li>
            <li><?php echo anchor('logout', 'Logout'); ?></li>
        </ul>
    </nav>

    <div id="content">
        <nav class="navbar navbar-expand bg-light">
            <button type="button" id="sidebarCollapse" class="btn btn-outline-dark">
                <i class="fa fa-align-justify"></i>
            </button>

            <a class="navbar-brand logo-dashboard" href="#">ARCOM</a>
        </nav>

        <div class="container-fluid">
            <?php echo $this->router->fetch_class(); ?>
            <!-- //* INI ADALAH ISI KONTENT  -->
        </div>
    </div>
</div>