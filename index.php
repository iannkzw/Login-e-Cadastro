<?php

require_once 'autoload.php';

use controller\HomeController;

session_start();

$pagina = isset($_GET["pagina"]) ? $_GET["pagina"] : "index";

$ctrl = new HomeController();

switch($pagina) {
    case "index" : 
    $ctrl->Index();
    break;
    case "cadastro" :
    $ctrl->Cadastro();
    break;
    case "painel" :
        $ctrl->Painel();
        break;
}
