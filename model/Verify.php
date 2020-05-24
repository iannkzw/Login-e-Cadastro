<?php


namespace model;


class Verify extends UsuarioModel
{
    public function Login ()
    {

        $salt = '1%1cAu!g+>K53PY}';

        $nome = $_POST['nome'] ?? null;
        $senha = md5($_POST['senha'] . $salt) ?? null;

        $users = $this->ListarUsuario();

        foreach ($users as $user) {
            if ($user['nome'] == $nome)
            {
                if (!strcmp($senha, $user['senha']))
                {
                    $_SESSION['nome'] = $nome;
                    $_SESSION['senha'] = $senha;

                    header('location: /mvc_php_3/?pagina=painel');
                    die();
                }
                else
                {
                    echo "senha incorreta";
                    echo "<a href='/mvc_php_3/?pagina=index'>" . "Voltar" . "</a>";
                    die();
                }

            }
            else
            {
                unset ($_SESSION['nome']);
                unset ($_SESSION['senha']);
                header('location: /mvc_php_3/?pagina=index');
            }
        }
    }
}