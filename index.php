<?php
require_once ('controller/autoloader.php');


if(isset($_GET['p'])) {
    $p = $_GET['p'];
}else {
    $p = 'home';
}

// initialisation des objets
$db = new \controller\Database ('bloggrafikart');

ob_start(); //ouvre la fonction ob_start pour enregistrer dans une variable ce que l'on renvoie
if($p === 'home'){
    require 'view/home.php';
}elseif ($p === 'single'){
    require 'view/single.php';
}
$content = ob_get_clean(); // variable qui contient le contenu précédemment créé
require 'view/templates/default.php';

$app = new \model\App();
$app->run();