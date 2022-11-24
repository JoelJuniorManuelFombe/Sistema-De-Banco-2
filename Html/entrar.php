<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conecte-se / Log-in</title>
    <link rel="stylesheet" href="../Css/login&sigin.css">
</head>
<body>
    <form action="../php/login.php" class="login" method="post">
        <div class="container-login">
            <h1 class="login-titulo">Login</h1>

            <div class="login-conteudo">
                <h3 class="login-titulo2">Email</h3>
                <input name="email" type="email" id="" class="login-nome">
            </div>
            <div class="login-conteudo">
                <h3 class="login-titulo2">Password</h3>
                <input name="senha" type="password"  id="" class="login-nome">
            </div>
            <div class="login-conteudo-button">
                <button class="login-button">Login</button>
            </div>

            <div class="linha-vertical"><span class="linha-vertials-span"></span></div>

            <div class="metodos">
                <div class="signup">
                    <a href="novaConta.php">New account</a>
                </div>

                <div class="forgot-password">
                    <a href="#">Forgot Password</a>
                </div>
            </div>
        </div>
    </form>
</body>
</html>