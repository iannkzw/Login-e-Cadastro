<?php

namespace controller;

use model\UsuarioModel;
use model\Verify;

class HomeController
{
    public function Index()
    {
        include "view/Index.php";
        if ($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $verify = new Verify();
            $verify->Login();
        }
    }

    public function Cadastro()
    {
        include "view/Cadastro.php";

        if ($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $model = new UsuarioModel();
            $model->inserir();
            return header('location: /SistLogin/?pagina=index');
        }

    }

    public function Painel()
    {

        if((!isset ($_SESSION['nome']) == true) and (!isset ($_SESSION['senha']) == true))
        {
            unset($_SESSION['nome']);
            unset($_SESSION['senha']);
            header('Location: /SistLogin/?pagina=index');
        }
        else
        {
            $logado = $_SESSION['nome'];
            $model = new UsuarioModel();
            $usuario = $model->ListarUsuario();
            include "view/Painel.php";
        }

    }
    
}