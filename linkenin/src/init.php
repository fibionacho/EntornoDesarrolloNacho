<?php 

const LONG_TOKEN = 64;

require("config.example.php");
require("DWESBaseDatos.php");
require('..\vendor\autoload.php');
require("Mailer.php");

$DB=DWESBaseDatos::obtenerInstancia();
$DB->inicializa(
    $CONFIG['db_name'],
    $CONFIG['db_user'],
    $CONFIG['db_pass']
);
session_start();

?>