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

        
        //PEMBUATAN METHOD (Perilaku dari Data)
        public function getLabel() {

            return "$this->judul, $this->penulis, $this->penerbit";
            
        }

    }


    //PEMBUATAN OBJECT (HASIL JADI/IMPLEMENTASI-NYA)
    $product1 = new Product();
    $product1->judul = "One Piece";
    $product1->penulis = "Eiichiro Oda";
    $product1->penerbit = "Weekly Shonen Jump";
    $product1->harga = 30000;

    //echo "Komik : $product1->judul, $product1->penulis"; //bisa dengan cara seperti ini, ditulis manual satu satu.
    
    echo "Komik :" . $product1->getLabel(); //bisa juga dengan cara seperti ini, data diambil dari "method" didalam "class".
    echo "<br>";


    $product2 = new Product();
    $product2->judul = "Uncharted 4";
    $product2->penulis = "Neil Druckman";
    $product2->penerbit = "Sony Computer";
    $product2->harha = 250000;

    echo "Game :" . $product2->getLabel();


    



?>