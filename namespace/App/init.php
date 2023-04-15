<?php

// require_once 'Mobil/InfoMobil.php';
// require_once 'Mobil/Mobil.php';
// require_once 'Mobil/MobilSport.php';
// require_once 'Mobil/MobilSUV.php';
// require_once 'Mobil/CetakInfoMobil.php';
// require_once 'Mobil/User.php';
// require_once 'Service/User.php';

spl_autoload_register(function( $class ){
    $class = explode('\\', $class);
    $class = end($class);
    require_once __DIR__ . '/Mobil/' . $class . '.php';
});

spl_autoload_register(function( $class ){
    $class = explode('\\', $class);
    $class = end($class);
    require_once __DIR__ . '/Service/' . $class . '.php';
});