<?php

namespace model;

use model\Entidades\Conn;

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

        $salt = '1%1cAu!g+>K53PY}';

        $nome = $_POST['nome'] ?? null;
        $senha = md5($_POST['senha'] . $salt) ?? null;

        $sql = 'INSERT INTO cadastro (nome, senha) VALUES (:nome, :senha)';

        $stmt = $this->connect()->prepare($sql);
        $stmt->bindValue(':nome', $nome);
        $stmt->bindValue(':senha', $senha);
        $stmt->execute();

    }

}