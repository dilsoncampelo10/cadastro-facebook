<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem vindo ao Facebook</title>
    <link rel="stylesheet" href="estilo/estilo.css">
    <link rel="shortcut icon" href="imagens/facebook-icon.png" type="image/x-icon">
</head>
<body>
    <section id="superior">
        <img src="imagens/logo.jpg" alt="logo do facebook">
        <form id="loginum" method="POST" action="process.php">
            <div id="parte_login">
                <label for="login">E-mail ou telefone</label>
                <br>
                <input type="email" name="login" id="login" required>
                <br>
                <input type="checkbox" name="conect" id="conect">
                <label for="conect">Mantenha-me conectado</label>
            </div>
            <div id="parte_senha">
                <label for="senha">Senha</label>
                <br>
                <input type="password" name="pass" id="senha" required>
                <input type="submit" value="Entrar">
                <br>
                <a href="#">Esqueceu a senha?</a>
            </div>
        </form>
    </section>
    <section id="txteimg">
        <article>
            <p>O Facebook ajuda você a se conectar e <br>compartilhar com as pessoas que fazem parte <br>da sua vida.</p>
        </article>
    </section>
    <section id="cadastro">
        <h1>Abra uma conta</h1>
        <p>É gratuito e sempre será</p>
        <form>
            <input type="text" name="nome" id="nome" class="mesmalinha" placeholder="Nome">
            <input type="text" name="sobrenome" id="sobrenome" class="mesmalinha" placeholder="Sobrenome">     
            <input type="email" name="email" id="email" class="linhaunica" placeholder="E-mail ou número de celular">
            <input type="email" name="confirmemail" id="conemail" class="linhaunica" placeholder="Insira novamente o e-mail ou o celular"> 
            <input type="password" name="newsenha" id="newsenha" class="linhaunica" placeholder="Nova senha">
            <p>Data de nascimento</p>
            <select name="" id="">
                <option value="">Dia</option>
                <option value="1">01</option>
                <option value="2">02</option>
            </select>

        </form>
    </section>
</body>
</html>
