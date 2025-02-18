<?php

use Smarty\Smarty;

// Abilita la visualizzazione degli errori
ini_set('display_errors', 1);

// Imposta il livello di reporting degli errori su E_ALL
error_reporting(E_ALL);

$hot = null;

require_once 'config/config.php';
require_once 'vendor/autoload.php';


if ( !file_exists("config/config.php")) {
    echo "<h1>Sistema non configurato.</h1>";
    die();
}



if ( !is_writable( 'templates_c')) {
    echo "<h1>Cartella template non scrivibile.</h1>";
    die();
}

if ( ! $hot ) {
    echo "<h1>Errore connessione al database.</h1>";
    die();
}

// Crea un'istanza del controller principale
$controller = new \App\controllers\MainController();

// Invia la richiesta al metodo 'home' del controller
$controller->home();





mysqli_close($hot);



