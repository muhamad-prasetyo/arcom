<?php

    // Library password ini saya buat, jika sewaktu waktu kita ingin mengubah cara password hash-nya, 
    // Maka tinggal diubah disini saja .
    // jika ada yang mau diupgrade maka ubah di sini saja, tidak perlu mengubah dibagiab controller USER atau User_model  

    class Password {

        // untuk merubah tampilan password user menjadi hash 
        public function hash($password) 
        {
            return password_hash($password, PASSWORD_BCRYPT);
        }

        // untuk mengecek apakah data yg diinput sama dengan data yg di database 
        public function verify($password, $hash)
        {
            if(password_verify($password, $hash)) {
                return true;
            }

            return false;
        }
    }