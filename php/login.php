<?php
   include "conexao.php";
   session_start();
    class DAO{

        public function login(){
         

            $conexao = new Conexao();

            $email = $_REQUEST['email'];
            $password = $_REQUEST['senha'];
            
            $motor = $conexao->conectar()->prepare("SELECT * FROM tbl_user WHERE email =?  AND senha  = ?");
            $motor->execute([$email,$password]);

            if($motor->rowCount() == 0){
                die("Dados incorrectos");
            }else{
                foreach($motor as $linha){
                    $_SESSION['email'] = $linha['email'];
                    $_SESSION['id'] = $linha['id_user'];
                    header("location:../Html/areaGestao.php");
                }
            }
        }
    }

    $cn = new DAO();
    $cn->login();