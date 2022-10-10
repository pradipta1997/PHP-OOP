<?php


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


?>