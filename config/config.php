<?php




$host = 'localhost';
$dbname = 'netmedica';
$username = 'root'; // Cambia con le tue credenziali
$password = ''; // Cambia con la tua password


$hot = mysqli_connect($host, $username, $password);

if (!mysqli_select_db($hot, $dbname)) {
    echo('Errore database');
    die;
}
