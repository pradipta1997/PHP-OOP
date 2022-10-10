<?php

    //PROJECT JUALAN PRODUCT
    //Yang dijual --> Komik
    //Yang dijual --> Game

    interface InfoProduct {  // <-- untuk digunakan pada class chlid-nya sebagai "implements".

        public function getInfoProduct();
    }

//----------------------------------------------------------------------------- class Product

    //PEMBUATAN CLASS (BLUEPRINT/RANCANGAN-NYA)
    abstract class Product {

        //PEMBUATAN PROPERTY (Data)
        protected $judul         = "judul",
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

        //-----------------------
   
        public function getLabel() {  // <-- fungsi getter

            return "$this->penulis, $this->penerbit";
            
        }

        //-----------------------
        
        abstract public function getInfo(); // <--hanya syarat saja, untuk pendeklarasian dari class abstract



    }



    //PEMBUATAN CHILD CLASS (Komik extends Product)
    //OVERRIDING : mengambil alih data pada class parent-nya, di class child untuk lebih spesifik.

    class Komik extends Product implements InfoProduct {  // <--class child "Game" mewarisi class parent "Product" dari implementasi  "InfoProduct".
        
        public $jumlahHalaman;

        //variable constructor
        public function __construct($cjudul = "judul", $cpenulis = "penulis", $cpenerbit = "penerbit", $charga = 0, $cjumlahHalaman = 0) {

            //biar ga ngetik ulang kyak $this-> di bawah
            parent::__construct($cjudul, $cpenulis, $cpenerbit, $charga);

            $this->jumlahHalaman = $cjumlahHalaman;
        }



        public function getInfo() {  // <-- fungsi getter
            
            $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga} )";

            return $str;
        }



        public function getInfoProduct() {

            $str = "Komik : ".$this->getInfo()." - {$this->jumlahHalaman} Halaman.";            
            return $str;
        }

    }


    //PEMBUATAN CHILD CLASS (Game extends Product)
    //OVERRIDING : mengambil alih data pada class parent-nya, di class child untuk lebih spesifik.

    class Game extends Product implements InfoProduct {  // <--class child "Game" mewarisi class parent "Product" dari implementasi  "InfoProduct".

        public $waktuMain;

        //variable constructor
        public function __construct($cjudul = "judul", $cpenulis = "penulis" , $cpenerbit = "penerbit", $charga = 0, $cwaktuMain = 0) {

            //biar ga ngetik ulang kyak $this-> di bawah
            parent::__construct($cjudul, $cpenulis, $cpenerbit, $charga);

            $this->waktuMain = $cwaktuMain;
        }



        public function getInfo() {  // <-- fungsi getter

            $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga} )";

            return $str;
        }



        public function getInfoProduct() {

            $str = "Game : ".$this->getInfo()." ~ {$this->waktuMain} Jam.";
            return $str;
        }

    }


//----------------------------------------------------------------------------- class CetakInfoProduct

    //PEMBUATAN CLASS & OBJECT TYPE (data yang diinput harus data dari class Product)
    class CetakInfoProduct {

        public $daftarProduct = array();


        public function tambahProduct(Product $product) {

            $this->daftarProduct[] = $product;

        }


        public function cetak() {

            $str = "DAFTAR PRODUCT : <br>";

            foreach($this->daftarProduct as $p) {

                $str .= "- {$p->getInfoProduct()} <br>";
            }

            return $str;
        }

    }

//----------------------------------------------------------------------------- diluar jangkauan class



    //PEMBUATAN OBJECT (HASIL JADI/IMPLEMENTASI-NYA)
    $product1           = new Komik("One Piece", "Eiichiro Oda", "Weekly Shonen Jump", 30000, 100);

    $product2           = new Game("Uncharted", "Neil Druckman", "Sony Computer", 250000, 50);




    //CETAK METHOD YANG ADA DIDALAM CLASS "PRODUCT" DAN TURUNAN-NYA
    $cetakProduct = new CetakInfoProduct();
    $cetakProduct->tambahProduct($product1);
    $cetakProduct->tambahProduct($product2);

    echo $cetakProduct->cetak();






    



?>