<?php

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


?>