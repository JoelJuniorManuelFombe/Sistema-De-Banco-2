<?php

include "conexao.php";
session_start();
class DAO{

    public function transferir(){

        $conexao = new Conexao();

        $valor = $_REQUEST['valorTransferencia'];
        $conta = $_REQUEST['numeorConta'];

        $motor = $conexao->conectar()->prepare("SELECT * FROM tbl_user WHERE email = ?");
        $motor->execute([
            $_SESSION['email']
        ]);

        if($motor->rowCount() == 0){
            die("Houve um erro");
        }else{
            $saldo = 0;

            foreach($motor as $linha){
                $saldo = $linha['saldo'];

                if($saldo < $valor){
                    die("Saldo insuficiente");
                }else{
                    $motor2 =  $conexao->conectar()->prepare("SELECT * FROM tbl_user WHERE numero_conta = ?");
                    $motor2->execute([
                        $conta
                    ]);

                    if($motor2->rowCount() == 0){
                        die("A conta nao existe");
                    }else{
                        foreach($motor2 as $linha2){
                            $motor3 =  $conexao->conectar()->prepare("UPDATE tbl_usuario SET saldo = ? WHERE numero_conta = ?");
                            $motor3->execute([
                                floatval($linha2['saldo'])+floatval($valor),
                                $conta
                            ]);
                        }
                        header("location:../Html/areaGestao.php");
                    }
                }
            }
        }


    }

}

$dao = new DAO();
$dao->transferir();