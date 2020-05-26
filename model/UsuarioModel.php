<?php

namespace model;

use model\Entidades\Conn;
use model\Entidades\Password;

class UsuarioModel extends Conn
{
    public function ListarUsuario()
    {
        $sql = 'SELECT * FROM cadastro';

        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();

        return $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function inserir() {

        $nome = $_POST['nome'] ?? null;
        $hash = password_hash($_POST['senha'], PASSWORD_DEFAULT);

        $sql = 'INSERT INTO cadastro (nome, senha) VALUES (:nome, :senha)';

        $stmt = $this->connect()->prepare($sql);
        $stmt->bindValue(':nome', $nome);
        $stmt->bindValue(':senha', $hash);
        $stmt->execute();

    }

}