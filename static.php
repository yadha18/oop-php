<?php

// class ContohStatic {
//     static $angka = 1;

//     public static function halo(){
//         return "Halo! " . self::$angka . " kali"; //self:: adalah cara memanggil property static
//     } 
// }

// echo ContohStatic::$angka; //Menampilkan property static
// echo "\n";
// echo ContohStatic::halo();//Menampilkan method static

class Contoh {
    static $angka = 1;

    public function halo(){
        return "Halo! " . self::$angka++ . " kali";
    }
}

$obj = new Contoh();
echo $obj->halo();
echo "\n";
echo $obj->halo();
echo "\n";
echo $obj->halo();
echo "\n";

$obj2 = new Contoh(); //Walaupun dibuat object baru, static property akan tetap melanjutkan isi dari property
echo $obj2->halo();
echo "\n";
echo $obj2->halo();
echo "\n";
echo $obj2->halo();
?>