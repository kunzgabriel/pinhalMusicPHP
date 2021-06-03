<?php

class Connection {
    public function getConnection($dataBase)
    {
        $conexao = [];
        $conexao['host'] = 'localhost';
        $conexao['usuario'] = 'root';
        $conexao['senha'] = '';
        $conexao['database'] = $dataBase;

        $connection = mysqli_connect(
            $conexao['host'],
            $conexao['usuario'],
            $conexao['senha'],
            $conexao['database']
        );

        return $connection;
    }
}
