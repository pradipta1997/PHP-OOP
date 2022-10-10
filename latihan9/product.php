<?php

    //PROJECT JUALAN PRODUCT
    //Yang dijual --> Komik
    //Yang dijual --> Game

//----------------------------------------------------------------------------- class Product

    //PEMBUATAN CLASS (BLUEPRINT/RANCANGAN-NYA)
    class Product {

        //PEMBUATAN PROPERTY (Data)
        private $judul         = "judul",
                $penulis       = "penulis",
                $penerbit      = "penerbit",
                $harga         = 0,
                $diskon      = 0;


               


        //PEMBUATAN "CONSTRUCTOR" MAGIC METHOD
         public function __construct($cjudul, $cpenulis, $cpenerbit, $charga) {

            $this->judul         = $cjudul;
            $this->penulis       = $cpenulis;
            $this->penerbit      = $cpenerbit;
            $this->harga         = $charga;
           
         }



         //PEMBUATAN METHOD (Perilaku dari Data)
         public function setJudul($judul) {  // <-- fungsi setter

            if( !is_string($judul) ) {
                throw new exception("Judul harus string");
            }

            $this->judul = $judul;
         }

        
         public function getJudul() {  // <-- fungsi getter

            return $this->judul; //relasi ke VISIBILITY (PRIVATE) di class parent
         }

         //-----------------------

         public function setPenulis($penulis) {  // <-- fungsi setter

            $this->penulis = $penulis;
         }

         public function getPenulis(){  // <-- fungsi getter

            return $this->penulis;
         }

         //-----------------------

         public function setPenerbit($penerbit) {  // <-- fungsi setter

            $this->penerbit = $penerbit;
         }

         public function getPenerbit() {  // <-- fungsi getter

            return $this->penulis;
         }

         //-----------------------

         public function setHarga() {  // <-- fungsi setter

            $this->harga = $harga;
         }


         public function getHarga() {  // <-- fungsi getter

            return $this->harga - ($this->harga * $this->diskon / 100); //relasi ke VISIBILITY (PRIVATE) di class parent
         }

         //-----------------------

         public function setDiskon($diskon) {  // <-- fungsi setter

            $this->diskon = $diskon;
        }

        public function getDiskon() {  // <-- fungsi getter

            return $this->diskon;
        }

   
        public function getLabel() {  // <-- fungsi getter

            return "$this->penulis, $this->penerbit";
            
        }

        public function getInfoProduct() {  // <-- fungsi getter

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


    //CETAK METHOD YANG ADA DIDALAM CLASS "PRODUCT" DAN TURUNAN-NYA
    echo $product1->getInfoProduct();

    echo "<br>";
    echo "<br>";

    echo $product2->getInfoProduct();

    echo "<br>";
    echo "<hr>";
    
    $product2->setDiskon(50);
    echo "Harga Diskon :";
    echo $product2->getHarga();

    echo "<br>";
    echo "<hr>";

   $product1->setJudul("Detective Conan"); //cara menggunakan setter
   echo $product1->getJudul();  //cara menggunakan getter







    



?>