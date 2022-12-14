<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestao da Conta</title>
    <script src="https://kit.fontawesome.com/460b4ef254.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../Css/areaGestaoNavBar.css">
    <link rel="stylesheet" href="../Css/operacoes.css"/>

</head>

<body>
    <div class="container-main">
        <div class="container-main-side-a">
            <div class="logo-titulo">
                <h1 class="logo-main">Banco</h1>
            </div>
            <div class="d-flex-lista">
                <div class="section-info">
                    <ul>
                        <li><span><i class="fa-solid fa-house-blank"></i></span></li>

                        <li><span><i class="fa-solid fa-money-simple-from-bracket"></i></span></li>

                        <li onclick="show(1)">Deposito</li>
                        <li>Calculos de juros</li>
                        <li><span><i class="fa-solid fa-money-bill-transfer"></i></span></li>
                        <li onclick="show(2)">Transferencia</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container-main-side-b">
            <div class="container-nav-bar">
                <h1>Dashboard</h1>
                <div class="usuario-info-nav-bar">
                    <span class="nome-usuario">nome usuario</span>
                    <span class="logout-image"><i class="fa-solid fa-user"></i></span>
                </div>
            </div>

            <div class="container-conteudo-side-b">
                <div class="tipo-de-conta">
                    <h1>Tipo de Conta</h1>
                </div>

                <div class="cartao-info-saldo">
                    <h3>Saldo</h3>
                    <span class="saldo-disponivel">saldo aqui</span>
                </div>

                <div class="tabela-de-historico">
                    <table class="registos-de-movimentos">
                        <tr>
                            <th>Nome</th>
                            <th>Numerode conta</th>
                            <th>Tipo de movimento</th>
                            <th>Montantes</th>
                            <th>Destino</th>
                            <th>Codigo da transicao</th>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

<div id="container">
    <div id="deposito" class="cards">
        <form action="../php/transferir.php">
            <span>
                <h3>Valor</h3>
                <input name="valorLevantamento" type="number" class="valorLevantamento">
            </span>
            <button id="btn">Depositar</button>
        </form>
        <button id="btn" onclick="fechar(1)">Fechar</button>
    </div>
</div>

<div id="container2">
    <div id="transferencia" class="cards">
        <form action="">
            <span>
                <h3>Numero de conta</h3>
                <input name="numeroConta" type="number" id="numeroConta">
            </span>
            <span>
                <h3>Valor</h3>
                <input name="valorTransferencia" type="number" class="valorDeposito">
            </span>
            <button id="btn">Transferir</button>
        </form>
        <button id="btn" onclick="fechar(2)">Fechar</button>
    </div>
</div>

<script>

    function show(id){
        let dep = document.querySelector("#deposito");
        let transf = document.querySelector("#transferencia");

        if(id == 1){
            dep.classList.add("display-block");
        }else{
            transf.style.display = "block";
        }
    }


    function fechar(id){
        let dep = document.querySelector("#deposito");
        let transf = document.querySelector("#transferencia");
        if(id == 1){
            dep.classList.remove("display-block");
        }else{
            transf.style.display = "none";
        }
    }
</script>