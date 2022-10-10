<?php

    //PROJECT JUALAN PRODUCT
    //Yang dijual --> Komik
    //Yang dijual --> Game

//----------------------------------------------------------------------------- class Product

    //PEMBUATAN CLASS (BLUEPRINT/RANCANGAN-NYA)
    class Product {

        //PEMBUATAN PROPERTY (Data)
        public $judul    = "judul",
               $penulis  = "penulis",
               $penerbit = "penerbit",
               $harga    = 0;



        //PEMBUATAN CONSTRUCTOR MAGIC METHOD
         public function __construct($cjudul, $cpenulis, $cpenerbit, $charga) {

            $this->judul    = $cjudul;
            $this->penulis  = $cpenulis;
            $this->penerbit = $cpenerbit;
            $this->harga    = $charga;

         }


   
        //PEMBUATAN METHOD (Perilaku dari Data)
        public function getLabel() {

            return "$this->penulis, $this->penerbit";
            
        }

    }

//----------------------------------------------------------------------------- class CetakInfoProduct

    //PEMBUATAN OBJECT TYPE (data yang diinput harus data dari class Product)
    class CetakInfoProduct {

        public function cetak( Product $cipProduct ) {

            $str = "{$cipProduct->judul} | {$cipProduct->getLabel()} (Rp. {$cipProduct->harga})";

            return ($str);


        }

    }

//-----------------------------------------------------------------------------



    //PEMBUATAN OBJECT (HASIL JADI/IMPLEMENTASI-NYA)
    $product1           = new Product("One Piece", "Eiichiro Oda", "Weekly Shonen Jump", 30000);

    $product2           = new Product("Uncharted", "Neil Druckman", "Sony Computer", 250000);




    //CETAK KE LAYAR BERDASARKAN PENDEFINISIAN "METHOD getLabel"
    echo "Komik :" . $product1->getLabel();

    echo "<br>";
    echo "<br>";
    
    echo "Game :" . $product2->getLabel();

    echo "<br>";
    echo "<br>";


    

    //CETAK INFO PRODUCT KE LAYAR BERDASARKAN PENDEFINISIAN "Object Type" - "class Cetak"
    $cetakInfoProduct1 = new CetakInfoProduct();
    echo $cetakInfoProduct1->cetak($product1);



    



?>