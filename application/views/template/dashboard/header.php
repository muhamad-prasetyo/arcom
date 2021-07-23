
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="<?php echo base_url('assets/boostrap/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">
</head>
<body>
    
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

