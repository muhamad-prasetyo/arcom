<div class="dashboard">
    <nav id="sidebar" class="bg-color">
        <ul class="menu">
            <li><?php echo anchor('dashboard', 'Dashboard'); ?></li>
            <li><?php echo anchor('dashboard/karyawan', 'Karyawan'); ?></li>
            <li><?php echo anchor('dashboard/gaji-&-tunjangan', 'Gaji & Insentif'); ?></li>
            <li><?php echo anchor('dashboard/absensi', 'Absensi'); ?></li>
            <li><?php echo anchor('dashboard/posisi', 'Posisi'); ?></li>
            <li><?php echo anchor('dashboard/departemen', 'Departemen'); ?></li>
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
            <!-- INI ADALAH ISI KONTENT  -->
        </div>
    </div>
</div>