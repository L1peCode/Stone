<?php
    session_start();
    include_once('config.php');
    // print_r($_SESSION);
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }
    $logado = $_SESSION['email'];
    if(!empty($_GET['search']))
    {
        $data = $_GET['search'];
        $sql = "SELECT * FROM usuarios WHERE id LIKE '%$data%' or nome LIKE '%$data%' or email LIKE '%$data%' ORDER BY id DESC";
    }
    else
    {
        $sql = "SELECT * FROM usuarios ORDER BY id DESC";
    }
    $result = $conexao->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <!-- or -->
    <link rel="stylesheet"
    href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">

    <title>SISTEMA DO ADMINISTRADOR FELIPE</title>
    <header>
<a href="indexmoon.php" class= logo><i class='bx bx-mobile-vibration' ></i><h3>StonePhone</h3></a>

<ul class="navegação">
<li><a href="indexmoon.php">Home</a></li> <!-- Home -->
<li><a href="Celulares.php">Celulares</a></li> <!-- CELULARES -->
<li><a href="sair.php" id="icon" class='bx bxs-exit'>sair</a></li>
        </div>
</ul>
</header>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="form">
            <a href="sistemaADM.php">SISTEMA DO ADMINISTRADOR FELIPE</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" style="color:inherit">
                <span class="navbar-toggler-icon"></span>
            </button>
        
    </nav>
    <br>
    <?php
        echo "<h1>Bem vindo <u>$logado</u></h1>";
    ?>
    <br>
    <div class="pesquisar">
        <input type="search" class="form-control w-25" placeholder="Pesquisar usuário" id="pesquisar" >
        <button onclick="searchData()" class="btn btn-primary"><i class='bx bx-search'></i></i>
    
              
            </svg>
        </button>
    </div>
    <div class="form">
        <table class="tabela">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Senha</th>
                    <th scope="col">Email</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">Sexo</th>
                    <th scope="col">Data de Nascimento</th>
                    <th scope="col">Cidade</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Endereço</th>
                    <th scope="col">Edite</th>
                </tr>
            </thead>

            <tbody>
                <?php
                    while($user_data = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>".$user_data['id']."</td>";
                        echo "<td>".$user_data['nome']."</td>";
                        echo "<td>".$user_data['senha']."</td>";
                        echo "<td>".$user_data['email']."</td>";
                        echo "<td>".$user_data['telefone']."</td>";
                        echo "<td>".$user_data['sexo']."</td>";
                        echo "<td>".$user_data['data_nascimento']."</td>";
                        echo "<td>".$user_data['cidade']."</td>";
                        echo "<td>".$user_data['estado']."</td>";
                        echo "<td>".$user_data['endereco']."</td>";
                        echo "<td>
                        <a class='btn btn-sm btn-primary' href='edit.php?id=$user_data[id]' title='Editar'>
                            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
                                <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
                            </svg>
                            </a> 
                            <a class='btn btn-sm btn-danger' href='delete.php?id=$user_data[id]' title='Deletar'>
                                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
                                    <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z'/>
                                </svg>
                            </a>
                            </td>";
                        echo "</tr>";
                    }
                    
                    ?>
            </tbody>
        </table>
    </div>
</body>
<footer id="footer1"><!-- rodapé  -->
    <div class="rodape1"><!--rodapé para multiplicar usa comando ul>li*>a  -->
    <h2>Início</h2>
<ul> 
    <li><a href="#">Home</a></li><!-- rodapé  -->
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
<div class="rodape1"><!-- rodapé  -->
<h2>Receba nossas novidadas</h2>
<p>Cadastre-se e seja o primeiro a saber das novidades!</p>
<br><br>

<p>&copy Todos os direitos reservados <br>a Felipe agostinho - 2023.</p>
</div>
</footer>





<style>
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family:  'Quicksand', sans-serif;
    text-decoration: none;
    list-style: none;
    color:inherit;    
    color: var(--tex-color);
}/* color inherit para tirar a cor do link */ 

:root{
    --bg-color:var(--bg-color) #1d2631;
    --tex-color: #e3e3e3;
    --main-color: #f345d6;
    --other-color: #0f0f0f;
    --form-color:#253b4d;
    --h1-font: 4rem;
    --p-font: 1rem;
    --border:10px;
}
body{
    background-color:#35332f ;    
    text-align: center;
}

.voltar {
padding-left: 5%;
margin-top: 1%;
transition: all .55s ease;
color:var(--tex-color);
font-size: 20px;
margin-left:-1900px;
}
.voltar :hover{      
    transform: translateY(-5px);
    color: var(--main-color);
    }



.form {/*campo formulario */ 
    background: var(--form-color);
    margin:20px 100px 100px 100px ;
    border-radius:var(--border);
    box-shadow: 0 4px 20px 4px var(--main-color);
    letter-spacing:2px;
    margin-bottom:20px;
    line-height: 80px;
    padding-left: 50px;
    display:grid;
    width:90%;
}

.pesquisar{
display: flex;
margin-left:800px;
}

a{
    text-decoration: none;
    color: var(--main-color);
    transition: all .10 s ease;
}
a :hover{
    color: var(--text-color);
}

#footer1{/* RODAPÉ */    
    color: var(--other-color);
    text-color:var(--other-color);
    font-size:var(--p-font);
    transition: a .55s ease;   
    display: flex;    
    width: 100%;
    justify-content: center;
    border: solid var(--other-color);
    margin-block: 300px;
    box-shadow: 0 4px 20px 4px var(--main-color);

}
.rodape1 a:hover{/* RODAPÉ para aparecer ao clicar */ 
    color: var();

}

.rodape1 h2{/* RODAPÉ H2 */ 
    margin:5px 10px;
    padding: 10px;     
}
.rodape1 li{
    display: fixed;  
}

.rodape1 a{ /* RODAPÉ a*/ 
    margin:5px 25px;
}
.rodape1 #bx{ /* RODAPÉ bx os icons */ 
    font-size: 30px;
    margin: 5px 50px;
}

.rodape1 p{
    margin: 0px 30px;
    bottom: right;
}

header{
    position:static ;
    width: 100%;
    top: 0;
    right: 0;
    z-index: 1000;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 30px 8%;
}


.logo{
    display: flex;
    color: var(--tex-color);
    font-size: 40px;
    font-weight: bold;
}

.logo i{
    color: var(--main-color);
    font-size: 40px;
    margin-right: 5px;
}

.navegação{
    display: flex;
}

.navegação a{
    color: var(--text-color);
    font-size: var(--p-font);
    font-weight: 500;
    margin: 30px;
    transition: a .55s ease;

}

.navegação a:hover{
    color: var(--main-color);

}



    </style>





<script>
    var search = document.getElementById('pesquisar');

    search.addEventListener("keydown", function(event) {
        if (event.key === "Enter") 
        {
            searchData();
        }
    });

    function searchData()
    {
        window.location = 'sistemaADM.php?search='+search.value;
    }
</script>
</html>