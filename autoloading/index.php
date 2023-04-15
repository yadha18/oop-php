<?php

require_once './App/init.php';

$mobil1 = new MobilSport("Ferrari", "Merah", 500000);
$mobil2 = new MobilSUV("Avanza", "Hitam", 150000);

$cetakMobil = new CetakInfoMobil();
$cetakMobil->tambahMobil($mobil1);
$cetakMobil->tambahMobil($mobil2);
echo $cetakMobil->cetak();