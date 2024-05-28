
<script type="text/javascript" src="resumoindex.js"> </script>

<!DOCTYPE html>
<html lang="en">
<c>
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
<link rel="stylesheet" href="style1moon.css">
<title>StonePhone</title>
<!-- class "." e id "#" -->
</head>
<body>

    <header>
<a href="indexmoon.php" class= logo><i class='bx bx-mobile-vibration'></i><h3>StonePhone</h3></a>

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

<selection class="home">
<div class="home-img">
    <img src="img/coloridoGPng.png" class="one"><!-- foto de destaque da tela principal -->
</div>
<div class="home-text"><!-- texto da foto de destaque da tela principal -->
    <h1>NOVIDADE<br>Celular Indestrutível. </h1>
    <h5><p id="descricao">Nokia tijolão</p></h5>
    <h3><p id="valor">Por R$199,00</p></h3>
    <button onclick="resumoCompra()" id="carrinho"class="btn">COMPRAR</a>
</div>
</selection>

<main>
<div class="main"> 
    <div class="promo1"> <!-- foto de dos minis celulars tela principal  -->
        <li><img src="img/coloridoPpng.png" onclick="slider('img/coloridoGPng.png')"></li>
    </div>

    <div class="promo2">
        <li><img src="img/DouradoPPNG.png" onclick="slider('img/douradoGpng.png')"></li>
    </div>

    <div class="promo3">
        <li><img src="img/azulPpng.png" onclick="slider('img/azulGPNG.png')"></li>
    </div>
</main>

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


<script>
    function slider(anything){
    document.querySelector ('.one').src=anything;
}
let menu=document.querySelector('#menu-icon');
let naubar=document.querySelector('.naubar');

menu.onclick=()=>{ 
    menu.classList.toggle ('open');
}
</script>

</body>
</html>