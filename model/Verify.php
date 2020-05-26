<?php


namespace model;


use model\Entidades\Password;

class Verify extends UsuarioModel
{
    public function Login ()
    {

        $nome = $_POST['nome'] ?? null;
        $senha = $_POST['senha'] ?? null;
        $hash = password_hash($senha, PASSWORD_DEFAULT);

        $users = $this->ListarUsuario();

        foreach ($users as $user) {
            if ($user['nome'] == $nome)
            {
                if (password_verify($senha, $hash))
                {
                    $_SESSION['nome'] = $nome;
                    $_SESSION['senha'] = $senha;

                    header('location: /SistLogin/?pagina=painel');
                    die();
                }
                else
                {
                    echo "senha incorreta";
                    echo "<a href='/SistLogin/?pagina=index'>" . "Voltar" . "</a>";
                    die();
                }

            }
            else
            {
                unset ($_SESSION['nome']);
                unset ($_SESSION['senha']);
                header('location: /SistLogin/?pagina=index');
            }
        }
    }
}