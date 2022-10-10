<?php


        require_once 'App/init.php';

/*

        //PEMBUATAN OBJECT (HASIL JADI/IMPLEMENTASI-NYA)
        $product1           = new Komik("One Piece", "Eiichiro Oda", "Weekly Shonen Jump", 30000, 100);

        $product2           = new Game("Uncharted", "Neil Druckman", "Sony Computer", 250000, 50);
    
    
    
    
        //CETAK METHOD YANG ADA DIDALAM CLASS "PRODUCT" DAN TURUNAN-NYA
        $cetakProduct = new CetakInfoProduct();
        $cetakProduct->tambahProduct($product1);
        $cetakProduct->tambahProduct($product2);
    
        echo $cetakProduct->cetak();

*/

/*
        //CARA MENJALANKAN NAMESPACE CLASS
        new App\Service\User();
        echo "<br>";
        new App\Product\User();
*/

        //CARA MENJALANKAN NAMESPACE CLASS MENGGUNAKAN ALIAS (agar tidak repot mengetikan "namespace-nya")
        use App\Product\User as ProductUser;
        use App\Service\User as ServiceUser;

        new ProductUser();
        echo "<br>";
        new ServiceUser();



?>