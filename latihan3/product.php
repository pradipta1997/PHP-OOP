<?php

    //PROJECT JUALAN PRODUCT
    //Yang dijual --> Komik
    //Yang dijual --> Game

    //PEMBUATAN CLASS (BLUEPRINT/RANCANGAN-NYA)
    class Product {

        //PEMBUATAN PROPERTY (Data)
        public $judul    = "judul",
               $penulis  = "penulis",
               $penerbit = "penerbit",
               $harga    = 0;


        //PEMBUATAN CONSTRUCTOR MAGIC METHOD
         public function __construct($judul, $penulis, $penerbit, $harga) {

            $this->judul    = $judul;
            $this->penulis  = $penulis;
            $this->penerbit = $penerbit;
            $this->harga    = $harga;

         }



        
        //PEMBUATAN METHOD (Perilaku dari Data)
        public function getLabel() {

            return "$this->judul, $this->penulis, $this->penerbit";
            
        }

    }


    //PEMBUATAN OBJECT (HASIL JADI/IMPLEMENTASI-NYA)
    $product1           = new Product("One Piece", "Eiichiro Oda", "Weekly Shonen Jump", 30000);

    $product2           = new Product("Uncharted", "Neil Druckman", "Sony Computer", 250000);


    //CETAK KE LAYAR BERDASARKAN PENDEFINISIAN "METHOD getLabel"
    echo "Komik :" . $product1->getLabel();

    echo "<br>";
    echo "<br>";
    
    echo "Game :" . $product2->getLabel();



    



?>