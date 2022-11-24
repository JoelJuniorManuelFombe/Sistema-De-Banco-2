<?php

    class Conexao{

        public function conectar(){
            try{
                $con = new PDO("mysql:dbname=db_banco;host=localhost","root","");

                return $con;
            }catch(Exception $ex){
                die("Erro ao conectar-se a db");
            }

            retu
        }
    }