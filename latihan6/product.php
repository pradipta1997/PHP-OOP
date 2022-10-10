<?php

    //PROJECT JUALAN PRODUCT
    //Yang dijual --> Komik
    //Yang dijual --> Game

//----------------------------------------------------------------------------- class Product

    //PEMBUATAN CLASS (BLUEPRINT/RANCANGAN-NYA)
    class Product {

        //PEMBUATAN PROPERTY (Data)
        public $judul         = "judul",
               $penulis       = "penulis",
               $penerbit      = "penerbit",
               $harga         = 0,
               $jumlahHalaman = 0,
               $waktuMain     = 0;
               



        //PEMBUATAN CONSTRUCTOR MAGIC METHOD
         public function __construct($cjudul, $cpenulis, $cpenerbit, $charga, $cjumlahHalaman, $cwaktuMain) {

            $this->judul         = $cjudul;
            $this->penulis       = $cpenulis;
            $this->penerbit      = $cpenerbit;
            $this->harga         = $charga;
            $this->jumlahHalaman = $cjumlahHalaman;
            $this->waktuMain     = $cwaktuMain;
            
         }


   
        //PEMBUATAN METHOD (Perilaku dari Data)
        public function getLabel() {

            return "$this->penulis, $this->penerbit";
            
        }

        public function getInfoProduct() {

            //Komik : One Piece | Eiichiro Oda, Weekly Shonen Jump (Rp. 30000) - 100 Halaman.
            //Game  : Uncharted | Neil Druckman, Sony Computer (250000) - 50 Jam.
            $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga} )";


            return $str;

        }

    }


    //PEMBUATAN CHILD CLASS (Komik extends Product)
    class Komik extends Product {

        public function getInfoProduct() {

            $str = "Komik : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga} ) - {$this->jumlahHalaman} Halaman.";
            
            return $str;

        }

    }

    //PEMBUATAN CHILD CLASS (Game extends Product)
    class Game extends Product {

        public function getInfoProduct() {

            $str = "Game : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) ~ {$this->waktuMain} Jam.";

            return $str;

        }

    }


//----------------------------------------------------------------------------- class CetakInfoProduct

    //PEMBUATAN CLASS & OBJECT TYPE (data yang diinput harus data dari class Product)
    class CetakInfoProduct {

        public function cetak( Product $cipProduct ) {

            $str = "{$cipProduct->judul} | {$cipProduct->getLabel()} (Rp. {$cipProduct->harga})";

            return $str;


        }

    }

//-----------------------------------------------------------------------------



    //PEMBUATAN OBJECT (HASIL JADI/IMPLEMENTASI-NYA)
    $product1           = new Komik("One Piece", "Eiichiro Oda", "Weekly Shonen Jump", 30000, 100, 0);

    $product2           = new Game("Uncharted", "Neil Druckman", "Sony Computer", 250000, 0, 50);


    //CETAK METHOD getInfoLengkap
    echo $product1->getInfoProduct();

    echo "<br>";
    echo "<br>";

    echo $product2->getInfoProduct();







    



?>