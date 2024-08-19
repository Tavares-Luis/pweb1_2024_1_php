<?php

class db {
    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $port = "3306";
    private $dbname = "db_pweb1_2024_1";

    function conn(){

        try{
            $conn = new PDO(
                "mysql:host=$this->host;dbname=$this->dbname",
                $this->user,
                $this->password,
                [
                    PDO::ATTR_ERRMODE,
                    PDO::ERRMODE_EXCEPTION,
                    PDO::MYSQL_ATTR_INIT_COMMAND =>"SET NAMES utf8"
                ]
            );

            return $conn;

        } catch (PDOException $e){
            echo "Erro: ". $e->getMessage();
        }
    }

    function insert($dados){



        $conn = $this->conn();

        $sql = "INSERT INTO aluno(nome,telefone,cpf) ";

        $sql .= "VALUES (?,?,?)";

        $st = $conn->prepare($sql);

        $st->execute([
            $dados['nome'],
            $dados['telefone'],
            $dados['cpf']
            ]);
    }


    function all(){

        $conn = $this->conn();

        $sql ="SELECT * FROM aluno";

        $st = $conn->prepare($sql);

        $st->execute();

        return $st->fetchAll(PDO::FETCH_CLASS);
    }
}

?>