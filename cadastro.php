<?php

    if(isset($_POST['submit']))
    {
        // print_r('Nome: ' . $_POST['nome']);
        // print_r('<br>');
        // print_r('Email: ' . $_POST['email']);
        // print_r('<br>');
        // print_r('Telefone: ' . $_POST['telefone']);
        // print_r('<br>');
        // print_r('Sexo: ' . $_POST['sexo']);
        // print_r('<br>');
        // print_r('Data de nascimento: ' . $_POST['data_nascimento']);
        // print_r('<br>');
        // print_r('Cidade: ' . $_POST['cidade']);
        // print_r('<br>');
        // print_r('Estado: ' . $_POST['estado']);
        // print_r('<br>');
        // print_r('Endereço: ' . $_POST['endereco']);

        include_once('config.php');

        $nome = $_POST['nome'];
        $senha = $_POST['senha'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $sexo = $_POST['sexo'];
        $data_nascimento = $_POST['data_nascimento'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $endereco = $_POST['endereco'];

        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,senha,email,telefone,sexo,data_nascimento,cidade,estado,endereco) 
        VALUES ('$nome','$senha','$email','$telefone','$sexo','$data_nascimento','$cidade','$estado','$endereco')");

        header('Location: login.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <!-- or -->
    <link rel="stylesheet"
    href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
<link rel="stylesheet" href="styleLogin.css">
<link rel="stylesheet" href="StonePhone">
<title>StonePhone</title>
</head>

<header>
<a href="indexmoon.php" class= logo><i class='bx bx-mobile-vibration' ></i><h3>StonePhone</h3></a>

<ul class="navegação">
<li><a href="indexmoon.php">Home</a></li> <!-- Home -->
<li><a href="Celulares.php">Celulares</a></li> <!-- PAGE2 -->
<li><a href="login.php">Minha conta</a></li> <!-- cadastro/login -->
</ul>

<div class="header-icon">
    <div id="menu"></div>
        <a class='bx bx-cart'></i> <!--sacola -->
        <a href="indexsun.php" class='bx bx-sun'></i></a></div><!-- SOL -->
</div>
    </header>
    <body>
    <div class="form"><!-- form  -->
        <ul class="proxgp">
            <li class="tab ative"><a href="cadastro.php">Cadastre-se</a></li><!-- cadastro e login  -->
            <li class="tab"><a href="login.php">Fazer Login</a></li>
        </ul>
        
        <div class="tab-content"><!-- tab-content  -->
            <div id="cadastro">
                <h1>Cadastre-se Grátis!</h1> <!-- CADASTRE-SE GRÁTIS NA TELA PRINCIPAL DO CADASTRO  -->

                <form action="cadastro.php" method="POST"> <!-- para ativar o metodo para php no localhost-->
                    <div class="cadastroinicio">

                        <div class="cadastro1">
                        <label for="nome" class="labelInput">Nome completo<span class="req">*</span></label>   <!-- NOME COMPLETO  -->
                        <input type="text" name="nome" id="nome" class="inputUser" required autocomplete="off">                    
                    </div>
                
                    <div class="cadastro1">
                        <label for="senha" class="labelInput">Escolha uma senha<span class="req">*</span></label> <!--  SENHA -->
                        <input type="password" name="senha" id="senha" class="inputUser" required autocomplete="off">
                    </div>
                    
                    <div class="cadastro1">
                        <label for="email" class="labelInput">Seu E-mail<span class="req">*</span></label>
                        <input type="text" name="email" id="email" class="inputUser" required autocomplete="off"> <!-- EMAIL  -->                        
                    </div>
                    
                    <div class="cadastro1">
                        <label for="telefone" class="labelInput">Telefone<span class="req">*</span></label>
                        <input type="tel" name="telefone" id="telefone" class="inputUser" required autocomplete="off">  <!--  TELEFONE -->                        
                    </div>
                    <br>
                    <div class="cadastro1">
                        <label for="sexo" class="labelInput">Gênero:<span class="req">*</span></label>
                        <input type="text" name="sexo" id="sexo" class="inputUser" required autocomplete="off"> <!-- SEXO   -->                        
                    </div>
                    <br><br>
                    
                    <div class="cadastro1">
                    <label for="data_nascimento"><b>Data de Nascimento:<span class="req">*</span></b></label> <!-- DATA NASCIMENTO  -->
                    <input type="date" name="data_nascimento" id="data_nascimento" class="inputUser"  required autocomplete="off">
                    
                    </div>
                    <div class="cadastro1">
                        <label for="cidade" class="labelInput">Cidade<span class="req">*</span></label>
                        <input type="text" name="cidade" id="cidade" class="inputUser" required autocomplete="off"> <!--  CIDADE -->                        
                    </div>
                    <br><br>
                    <div class="cadastro1">
                        <label for="estado" class="labelInput">Estado<span class="req">*</span></label>
                        <input type="text" name="estado" id="estado" class="inputUser" required autocomplete="off"> <!-- ESTADO  -->                
                    </div>
                    <br><br>
                    <div class="cadastro1">
                        <label for="endereco" class="labelInput">Endereço<span class="req">*</span></label>
                        <input type="text" name="endereco" id="endereco" class="inputUser" required autocomplete="off"> <!--ENDEREÇO   -->
                    </div>
                    
                    <button type="submit" class="button button-block" name="submit" id="submit">Realizar Cadastro</button><!-- Botão de fazer cadastro  -->
                </form>
            </div>
        </div><!-- tab-content  -->
    </div><!-- form  -->

</body>
</html>




