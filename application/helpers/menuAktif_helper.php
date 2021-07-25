<?php 
    // * ini merupakan contoh penulisan yang memakan waktu
    // if($this->router->fetch_class() == 'dashboard') { echo "active";}

    // * lalu dibawah kita buah code agar lebih mudah cara memanggil dan memakainya dimana pun 
    // * membuat function untuk helper menuaktif pada navigasi aktif 
    function menuAktif($class = '')
    {
        $ci =& get_instance();

        if($ci->router->fetch_class() == $class){
            return 'active';
        }

        // ! jika bukan maka false 
        return false;
    }