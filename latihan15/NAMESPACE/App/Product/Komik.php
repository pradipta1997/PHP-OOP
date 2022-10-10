<?php


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

        $str = "Komik : ".$this->getInfo()." ~ {$this->jumlahHalaman} Halaman.";
        return $str;
    }

}





?>