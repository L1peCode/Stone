
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
<link rel="stylesheet" href="cadastro.php">
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
            <div id="login"><!-- LOGIN  -->
                <h1>Seja Bem Vindo Novamente!</h1>
            </div>

            <form action="testLogin.php" method="POST">
                <div class="cadastro1"><!-- EMAILLOGIN  -->
                    <label>Email<span class="req">*</span></label>
                    <input type="text" name="email" placeholder="Email"required autocomplete="off"/>
                </div>
                <div class="cadastro1"><!-- SenhaLOGIN  -->
                    <label>Senha<span class="req">*</span></label>
                    <input type="password" name="senha" placeholder="Senha" required autocomplete="off"/><!-- required autocomplete='off é p não ficar guardando na memoria do input  -->
                </div>
                <p class="esqueceu"><a href="#">Esqueceu a senha?</a></p>  <!-- Esqueci a senha  -->

                <button class="buttonsubmit" type="submit" name="submit">Entrar</button>
                
            </form>
            </div></div></div>

        </div><!-- tab-content  -->
    </div><!-- form  -->
</body>

<footer id="footer1"><!-- rodapé  -->
    <div class="rodape1"><!--rodapé para multiplicar usa comando ul>li*>a  -->
    <h2>Início</h2>
<ul> 
    <li><a href="indexmoon.php">Home</a></li><!-- rodapé  -->
    <li><a href="Celulares.php">Celulares</a></li>
    <li><a href="#">Trocas e Devolução</a></li>
</div>
</ul>
    <div class="rodape1">
    <h2>Formas de pagamentos</h2>
<ul>
    <li><img src="img/pagamentoHome.png" width="300px" height="50px"></a></li>
   
</ul>
</div>
<div class="rodape1">
<h2>Central de atendimento</h2><!-- rodapé  -->
<ul>  
    <li><p>Nosso Whatsapp.</p><a href="#" id="bx" class='bx bxl-whatsapp'></i></a></li>
    <li><p>Nosso E-mail.</p><a href="mailton:nome@gmail.com" id="bx" class='bx bx-envelope'></i></a></li>
</ul>
</div>
<div class="rodape1">
<h2>Receba nossas novidadas</h2>
<p>Cadastre-se e seja o primeiro a saber das novidades!</p>
<br><br>
<p>&copy Todos os direitos reservados <br>a Felipe agostinho - 2023.</p>
</div>
</footer>




</html>




