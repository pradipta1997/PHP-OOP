<?php
       
       /*
        //INI ADALAH CARA MANUAL YANG DILAKUKAN SECARA INPUT SATU PER SATU.

        //BASIS REQUIRE ATAU PENGHUBUNG KE HALAMAN INDEX.PHP
        require_once 'Product/InfoProduct.php';
        require_once 'Product/Product.php';
        require_once 'Product/Komik.php';
        require_once 'Product/Game.php';
        require_once 'Product/CetakInfoProduct.php';
        require_once 'Product/User.php';
        
        require_once 'Service/User.php';
        */


//-------------------------------------------------------------------------------

        
        //INI ADALAH CARA OTOMATIS UNTUK MEMANGGIL/MENGREGISTER SEBUAH CLASS, WALAUPUN CLASS-NYA BELUM DI INPUT MANUAL.
        //konsep autoloading

        spl_autoload_register(function( $class ) {

            // App\Product\User = ["App", "Product", "User"]
            $class = explode('\\', $class); // <--explode akan memecah menjadi array seperti diatas, berdasarkan "\"
            $class = end($class);           // <-- end fungsi-nya akan mengambil array terakhir.
            require_once 'Product/' .$class. '.php';

        });



        spl_autoload_register(function( $class ) {

            // App\Service\User = ["App", "Service", "User"]
            $class = explode('\\', $class); // <--explode akan memecah menjadi array seperti diatas, berdasarkan "\"
            $class = end($class);           // <-- end fungsi-nya akan mengambil array terakhir.
            require_once 'Service/' .$class. '.php';

        });

       
       




?>