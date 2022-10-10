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
               $harga         = 0;
               


        //PEMBUATAN CONSTRUCTOR MAGIC METHOD
         public function __construct($cjudul, $cpenulis, $cpenerbit, $charga) {

            $this->judul         = $cjudul;
            $this->penulis       = $cpenulis;
            $this->penerbit      = $cpenerbit;
            $this->harga         = $charga;
           
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
    //OVERRIDING : mengambil alih data pada class parent-nya, di class child untuk lebih spesifik.
    class Komik extends Product {
        
        public $jumlahHalaman;

        //variable constructor
        public function __construct($cjudul = "judul", $cpenulis = "penulis", $cpenerbit = "penerbit", $charga = 0, $cjumlahHalaman = 0) {

            //biar ga ngetik ulang kyak $this-> di bawah
            parent::__construct($cjudul, $cpenulis, $cpenerbit, $charga);

            $this->jumlahHalaman = $cjumlahHalaman;

        }



        public function getInfoProduct() {

            $str = "Komik : ".parent::getInfoProduct()." - {$this->jumlahHalaman} Halaman.";            
            return $str;
        }

    }


    //PEMBUATAN CHILD CLASS (Game extends Product)
    //OVERRIDING : mengambil alih data pada class parent-nya, di class child untuk lebih spesifik.

    class Game extends Product {

        public $waktuMain;

        //variable constructor
        public function __construct($cjudul = "judul", $cpenulis = "penulis" , $cpenerbit = "penerbit", $charga = 0, $cwaktuMain = 0) {

            //biar ga ngetik ulang kyak $this-> di bawah
            parent::__construct($cjudul, $cpenulis, $cpenerbit, $charga);

            $this->waktuMain = $cwaktuMain;

        }



        public function getInfoProduct() {

            $str = "Game : ".parent::getInfoProduct()." ~ {$this->waktuMain} Jam.";
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

//----------------------------------------------------------------------------- diluar jangkauan class



    //PEMBUATAN OBJECT (HASIL JADI/IMPLEMENTASI-NYA)
    $product1           = new Komik("One Piece", "Eiichiro Oda", "Weekly Shonen Jump", 30000, 100);

    $product2           = new Game("Uncharted", "Neil Druckman", "Sony Computer", 250000, 50);


    //CETAK METHOD getInfoLengkap
    echo $product1->getInfoProduct();

    echo "<br>";
    echo "<br>";

    echo $product2->getInfoProduct();







    



?>