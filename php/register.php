<?php
       include "conexao.php";
    class DAO{

        public function register(){

            $conexao = new Conexao();

            $tipo = $_REQUEST['tipoConta'];
            $name = $_REQUEST['nome'];
            $surname = $_REQUEST['sobrenome'];
            $email = $_REQUEST['email'];
            $data_nasc = $_REQUEST['dataNascimento'];
            $num_conta = rand(100000000,999999999);
            $periodo_renda = isset($_REQUEST['periudoRenda'])?$_REQUEST['periudoRenda']:"";
            $senha  = $_REQUEST['senha'];

            $motor = $conexao->conectar()->prepare("INSERT INTO tbl_user (nome,sobrenome,email,periodo_renda,tipo_conta,numero_conta,saldo,senha,data_nascimento) VALUES(?,?,?,?,?,?,?,?,?)");

            $motor->execute([
                $name,
                $surname,
                $email,
                $periodo_renda,
                $tipo,
                $num_conta,
                0,
                $senha,
                $data_nasc
            ]);
            header("location:../Html/entrar.php");

        }
    }


    $dao = new DAO();
    $dao->register();