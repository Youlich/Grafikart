<?php

function chargerClasse($class)
    {
        // \controller\Database
        // \model\App
        //équivaut à require_once 'model/App.php';
        //= require_once 'controller/Database.php';
        $file = str_replace('\\','/',$class); // on met 2\\ car \ en php est un caractère réservé
        $file = ltrim($file,'/');
        require_once $file.'.php';
    }
spl_autoload_register('chargerClasse');

