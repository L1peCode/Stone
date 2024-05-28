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
<link rel="stylesheet" href="celulares.css">
<title>StonePhone</title>
<!-- class "." e id "#" -->
</head>
<body>

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

<p></p>
<section class="celulares"><!-- celulares -->
    <span><h6> Celulares</h6></span>
    <span><h6> 9 Produtos</h6></span>
</section>
<div class="linha"></div><!-- linha abaixo do texto celulares e produtos no inicio da tela -->
<br>

<main><!-- COLUNA1 -->
<div class="coluna">
<div class="produto">
    <img src="img/JPG/nokia  N70.jpg">
    <span><p id="descricao"> nokia  N70  </span></p>
    <p id="valor"><span> R$ <span class="valor"> 145,24 </span></p>
    <br>
    <button onclick="resumoCompra()" id="carrinho" class="btn">COMPRAR</a>
</div>

<div class="produto">
    <img src="img/JPG/nokia 1100.jpg">
    <span><p id="descricao"> nokia  1100  </span></p>
    <p id="valor"><span> R$ <span class="valor"> 249,00 </span></p>
    <br>
    <button onclick="resumoCompra()" id="carrinho" class="btn">COMPRAR</a>
</div>

<div class="produto">
    <img src="img/JPG/nokia 5200.jpg">
    <span><p id="descricao"> nokia  5200  </span></p>
    <p id="valor"><span> R$ <span class="valor"> 825,21 </span></p>
    <br>
    <button onclick="resumoCompra()" id="carrinho" class="btn">COMPRAR</a>
</div>
</div>
<!-- COLUNA2 -->
<div class="coluna">
    <div class="produto">
        <img src="img/JPG/nokia 6101.jpg">
        <span><p id="descricao"> nokia  6101  </span></p>
        <p id="valor"><span> R$ <span class="valor"> 204,70 </span></p>
        <br>
        <button onclick="resumoCompra()" id="carrinho"class="btn">COMPRAR</a>
    </div>
    <div class="produto">
        <img src="img/JPG/nokia 6820.jpg">
        <span><p id="descricao"> nokia  6820  </span></p>
        <p id="valor"><span> R$ <span class="valor"> 99,50 </span></p>
        <br>
        <button onclick="resumoCompra()" id="carrinho" class="btn">COMPRAR</a>
    </div>
    <div class="produto">
        <img src="img/JPG/nokia c3.jpg">
        <span><p id="descricao"> nokia C3  </span></p>
        <p id="valor"><span> R$ <span class="valor"> 159,90 </span></p>
        <br>
        <button onclick="resumoCompra()" id="carrinho" class="btn">COMPRAR</a>
    </div>
    </div>
    <!-- COLUNA3 -->
<div class="coluna">
    <div class="produto">
        <img src="img/JPG/nokia n71.jpg">
        <span><p id="descricao"> nokia  N71  </span></p>
        <p id="valor"><span> R$ <span class="valor"> 129,99 </span></p>
        <br>
        <button onclick="resumoCompra()" id="carrinho" class="btn">COMPRAR</a>
    </div>
    <div class="produto">
        <img src="img/JPG/Nokia N90.jpg">
        <span><p id="descricao"> nokia  N90  </span></p>
        <p id="valor"><span> R$ <span class="valor"> 688,00 </span></p>
        <br>
        <button onclick="resumoCompra()" id="carrinho" class="btn">COMPRAR</a>
    </div>
    <div class="produto">
        <img src="img/JPG/Nokia 6708.jpg">
        <span><p id="descricao"> nokia  6708  </span></p>
        <p id="valor"><span> R$ <span class="valor"> 215,00 </span></p>
        <br>
        <button onclick="resumoCompra()" id="carrinho"class="btn">COMPRAR</a>
    </div>
    </div>
</main>

<!-- não finalizei  -->

<br><br>   
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



<script type="text/javascript" src="resumoindex.js"> </script>


</html>