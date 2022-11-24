<?php

    class DAO{

        public function register(){
            include "conexao.php";

            $conexao = new Conexao();

            $tipo = $_REQUEST['tipoConta'];
            $name = $_REQUEST['nome'];
            $surname = $_REQUEST['sobrenome'];
            $email = $_REQUEST['email'];
        }
    }