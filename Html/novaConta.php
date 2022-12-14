<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conecte-se / Sign-up</title>
    <link rel="stylesheet" href="../Css/signup.css">
</head>
<body>
    <form action="../php/register.php" class="signup" method="post">
        <div class="container-signup">
            <h1 class="signup-titulo-1">Sign-up</h1>
            
            <h3 class="signup-titulo" id="titulo1" >Tipo de Conta</h3>
            <select name="tipoConta"  required class="signup-container" onchange="mudar()">
                <option value="1" class="login-mark">A ordem</option>
                <option value="2" class="login-mark">A prazo</option>
                <option value="3" class="login-mark">Entidade</option>
            </select>

            <br>

            <div class="linha-horizontal-signup"><span class="horizontal">Formulario</span></div>

            <br>

            <div class="signup-container">
                <h3 class="signup-titulo">Nome</h3>
                <input required name="nome" type="text"  id="" class="signup-input">
            </div>

            <div class="signup-container">
                <h3 class="signup-titulo">Sobrenome</h3>
                <input required name="sobrenome" type="text"  id="" class="signup-input">
            </div>

            <div class="signup-container">
                <h3 class="signup-titulo">Email</h3>
                <input required name="email" type="email"  id="" class="signup-input">
            </div>

            <div class="signup-container">
                <h3 class="signup-titulo">Data de Nascimento</h3>
                <input required name="dataNascimento" type="date" placeholder="Data de Nascimento" id="" class="signup-input">
            </div>

            <div class="signup-container">
                <h3 class="signup-titulo">Senha</h3>
                <input required name="senha" type="password" placeholder="Senha" id="" class="signup-input">
            </div>

            <!-- <div class="signup-container">
                <h3 class="signup-titulo"></h3>
                
            </div>

            <div class="signup-container">
                <h3 class="signup-titulo"></h3>
                
            </div> -->

            <div id="div-ocultar" class="signup_container_renda">
                <h3 class="signup-titulo">Periudo de Renda</h3>

                <!-- <p class="alerta-renda">Preencha so se for conta a prazo</p> -->
                <input name="periudoRenda" type="date" name="renda" id="" class="signup-input">
            </div>

            <div class="signup-container">
                <h3 class="signup-titulo"></h3>
                <button type="submit" id="signup-input-button" class="signup-input">Enviar</button>
            </div>

        </div>
    </form>
    <script src="../Js/signin.js"></script>
</body>
</html>