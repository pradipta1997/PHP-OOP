<?php

//PEMBUATAN CLASS ABSTRACT (BLUEPRINT/RANCANGAN-NYA)

abstract class Product {

    //PEMBUATAN PROPERTY (Data)
    protected $judul         = "judul",
              $penulis       = "penulis",
              $penerbit      = "penerbit",
              $harga         = 0,
              $diskon        = 0;


           


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

    abstract public function getInfo();

        

}




?>