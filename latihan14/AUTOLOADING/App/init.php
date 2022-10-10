<?php
        /* INI ADALAH CARA MANUAL YANG DILAKUKAN SECARA INPUT SATU PER SATU.

        //BASIS REQUIRE ATAU PENGHUBUNG KE HALAMAN INDEX.PHP
        require_once 'Product/InfoProduct.php';
        require_once 'Product/Product.php';
        require_once 'Product/Komik.php';
        require_once 'Product/Game.php';
        require_once 'Product/CetakInfoProduct.php';

        */


        //INI ADALAH CARA OTOMATIS UNTUK MEMANGGIL/MENGREGISTER SEBUAH CLASS, WALAUPUN CLASS-NYA BELUM DI INPUT MANUAL.
        spl_autoload_register(function( $class ) {

            require_once 'Product/' .$class. '.php';


        });




?>