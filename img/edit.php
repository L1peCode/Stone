<?php
    include_once('config.php');

    if(!empty($_GET['id']))
    {
        $id = $_GET['id'];
        $sqlSelect = "SELECT * FROM usuarios WHERE id=$id";
        $result = $conexao->query($sqlSelect);
        if($result->num_rows > 0)
        {
            while($user_data = mysqli_fetch_assoc($result))
            {
                $nome = $user_data['nome'];
                $senha = $user_data['senha'];
                $email = $user_data['email'];
                $telefone = $user_data['telefone'];
                $sexo = $user_data['sexo'];
                $data_nascimento = $user_data['data_nascimento'];
                $cidade = $user_data['cidade'];
                $estado = $user_data['estado'];
                $endereco = $user_data['endereco'];
            }
        }
        else
        {
            header('Location: sistemaADM.php');
        }
    }
    else
    {
        header('Location: sistemaADM.php');
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
                    <br><br>
				<input type="hidden" name="id" value=<?php echo $id;?>>
                <input type="submit" name="update" id="submit">
            </fieldset>
        </form>
    </div>
</body>
</html>