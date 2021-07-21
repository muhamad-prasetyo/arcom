<?php

    // Library password ini saya buat, jika sewaktu waktu kita ingin mengubah cara password hash-nya, 
    // Maka tinggal diubah disini saja . 

    class Password {

        public function hash($password) 
        {
            return password_hash($password, PASSWORD_BCRYPT);
        }
    }