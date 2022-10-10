<?php

    //CONTOH PEMBUATAN CONSTANT
    //fungsi-nya untuk menyimpan nilai sementara, tetapi nilai-nya sampai akhir tidak berubah.

    /*
    //MENGGUNAKAN CONSTANT DEFINE()
    define('NAMA', 'Pradipta Ramadhan');  // <--diisi dengan key & value
    echo "Dengan Define : ";
    echo NAMA;

    echo "<br>";
    echo "<br>";

    //MENGGUNAKAN CONSTANT CONST
    const UMUR = 23;
    echo "Dengan Const : ";
    echo UMUR;
    */

//----------------------------------------------

    /*
    //MENGGUNAKAN CONST BISA DI DALAM CLASS
    class Coba {

        const NAMA = "Pradipta Ramadhan";

    }

    echo Coba::NAMA;
    */

//----------------------------------------------

    echo __LINE__;  // <--untuk menampilkan kode ada di baris ke berapa.
    echo "<br>";
    echo "<br>";
    echo __FILE__;  // <-- untuk menampilkan file .php ini ada dimana.
    echo "<br>";
    echo "<br>";
    echo __DIR__;  // <-- untuk mengetahui direktori dari file yang bersangkutan.
    echo "<br>";
    echo "<br>";

    function test() {
    return __FUNCTION__;  // <-- untuk menentukan kita sedang ada di function apa.
    }

    echo "Saya sedang ada di function -> ";
    echo test();

    echo "<br>";
    echo "<br>";
    

    class Coba {

        public $kelas = __CLASS__;  // <-- untuk menentukan kita sedang ada di function apa.
    }

    $obj = new Coba;
    echo "Saya sedang ada di class -> ";
    echo $obj->kelas;

    echo "<br>";
    echo "<br>";

    echo __METHOD__;  // <-Saya belum tau ini fungsi-nya apa.

    echo "<br>";
    echo "<br>";

    echo __NAMESPACE__;  // <-Saya belum tau ini fungsi-nya apa.



?>