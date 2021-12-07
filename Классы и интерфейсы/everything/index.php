<?php
//spl_autoload_register( function ( $class ) {
//    $prefix = '\\App\\' ;
//    $base_dir = __DIR__ . '/src/' ;
//    $len = strlen( $prefix ) ;
//    if (strncmp( $prefix , $class , $len ) !== 0 ) {
//        return;
//    }
//    $relative_class = substr( $class , $len ) ;
//    $file = $base_dir . str_replace( ' \\ ' , '/' ,$relative_class ) . '.php' ;
//    if (file_exists( $file )) {
//        require $file ;
//    }
//});
require_once 'src/Notebook.php';
require_once 'src/Manager.php';
require_once 'src/Screwdriver.php';

$notebook = new \Paper\Notebook\Notebook;
$screwdriver = new \Instrument\Screwdriver\Screwdriver;
$manager = new \Manager\Manager;

$manager->place($notebook);
$manager->place($screwdriver);
$manager->place('Строка');
