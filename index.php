<?php 
    ///Arquivo de teste e funcionalidade da biblioteca
    require 'vendor/autoload.php';
    ini_set('display_errors', 'On');
    use Saaiph\Dotenv\Dotenv;

    $env = new Dotenv(__DIR__."/.env");
    $env->load();

