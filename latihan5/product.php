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
               $waktuMain     = 0,
               $tipe          = "tipe";



        //PEMBUATAN CONSTRUCTOR MAGIC METHOD
         public function __construct($cjudul, $cpenulis, $cpenerbit, $charga, $cjumlahHalaman, $cwaktuMain, $ctipe) {

            $this->judul         = $cjudul;
            $this->penulis       = $cpenulis;
            $this->penerbit      = $cpenerbit;
            $this->harga         = $charga;
            $this->jumlahHalaman = $cjumlahHalaman;
            $this->waktuMain     = $cwaktuMain;
            $this->tipe          = $ctipe;

         }


   
        //PEMBUATAN METHOD (Perilaku dari Data)
        public function getLabel() {

            return "$this->penulis, $this->penerbit";
            
        }

        public function getInfoLengkap() {

            //Komik : One Piece | Eiichiro Oda, Weekly Shonen Jump (Rp. 30000) - 100 Halaman.
            //Game  : Uncharted | Neil Druckman, Sony Computer (250000) - 50 Jam.
            $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga} )";

                if($this->tipe == "Komik") {

                    $str .= " - {$this->jumlahHalaman} Halaman.";

                }

                else if($this->tipe == "Game") {

                    $str .= " ~ {$this->waktuMain} Jam.";

                }


            return ($str);

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
    $product1           = new Product("One Piece", "Eiichiro Oda", "Weekly Shonen Jump", 30000, 100, 0, "Komik");

    $product2           = new Product("Uncharted", "Neil Druckman", "Sony Computer", 250000, 0, 50, "Game");


    //CETAK METHOD getInfoLengkap
    echo $product1->getInfoLengkap();

    echo "<br>";
    echo "<br>";

    echo $product2->getInfoLengkap();







    



?>