<?php

namespace model\Entidades;

class Conn {

    public function connect()
    {
        $conn = new \PDO('mysql:host=localhost;dbname=login', 'root', '');
        return $conn;
    }
}
