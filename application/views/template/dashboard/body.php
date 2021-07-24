<div class="dashboard">
        <nav id="sidebar" class="bg-dark">
            <ul class="menu">
                <li><?= anchor('dashboard', 'Dashboard'); ?></li>
                <li><?= anchor('dashboard/karyawan', 'Karyawan'); ?></li>
                <li><?= anchor('dashboard/gaji-dan-tunjangan', 'Gaji & Tunjangan'); ?></li>
                <li><?= anchor('dashboard/absensi', 'Absensi'); ?></li>
                <li><?= anchor('dashboard/posisi', 'Posisi'); ?></li>
                <li><?= anchor('dashboard/departemen', 'Departemen'); ?></li>
                <li><?= anchor('logout', 'Logout'); ?></li>
            </ul>
        </nav>

        <div id="content">
            <nav class="navbar navbar-expand bg-light">
                <button type="button" id="sidebarCollapse" class="btn btn-outline-dark">
                    <i class="fa fa-align-justify"></i>
                </button>

                <a href="#" class="navbar-brand logo-dashboard">ARCOM</a>
            </nav>

            <div class="container-fluid">
                <!-- INI ADALAH CONTENT -->
            </div>
        </div>

    </div>