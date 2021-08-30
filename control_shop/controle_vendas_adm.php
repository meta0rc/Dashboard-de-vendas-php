
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <header>
        <div class="logo">
            <a href="index.html">
                <img src="./VultureGames.png" alt="">
            </a>
        </div>
    </header>
    <?php 
    include('conecta.php');
    mysqli_select_db($con, '$banco');
    $sql = "SELECT * FROM produtos LIMIT 3";
    $resultado = mysqli_query($con, $sql) or die ('Erro na query');

    ?>
        <section class="search" id="pesquisar">
        <form action="buscarProd.php" method="post" class="search-lixo">
            <input type="text" name="pesquisa" id="pesquisa" placeholder="Digite o codigo do produto...">
            <button>
            <img src="./lupa.png.png" alt="lupa" class="lupa">
            </button>
            <a href="mostrartodos.php" class="all" >Todos os produtos</a>
     
 
        </form>
    </section>
    <table class="tabela">
        <thead>
        <tr>

            <th>Codigo</th>
            <th>Nome</th>
            <th>Quantidade</th>
            <th>Valor</th>
            <th>Tipo</th>
            <th>Plataforma</th>
            <th>Garantia</th>
            <th>Fabricante</th>
        </tr>
        </thead>

        <?php while($dado = mysqli_fetch_array( $resultado )){ ?>
            <tbody>
            <tr>
            <td><?php echo $dado["codigo"]; ?></td>
            <td><?php echo $dado["nome"]; ?></td>
            <td><?php echo $dado["quantidade"]; ?></td>
            <td><?php echo $dado["valor"]; ?></td>
            <td><?php echo $dado["cat"]; ?></td>
            <td><?php echo $dado["plataforma"]; ?></td>
            <td><?php echo $dado["garantia"]; ?></td>
            <td><?php echo $dado["fabricante"]; ?></td>
            <td><?php echo "<a href=\"excluirProd.php?id=$dado[id]\" onclick=\"alert('O produto foi excluido')\"> <img src='./close.png' id='btn-close' height='30px'></a>"; ?></td>
            <td><?php echo "<a href=\"aprovarProd.php?id=$dado[id]\" onclick=\"alert('O produto foi aprovado')\"> <img src='./confirme.png' id='btn-confirme' height='30px'></a>"; ?></td>
        </tr>
    
            </tbody>

        <?php } ?>
    </table>
    <script src="geral.js">
    </script>
    <style>
                .tabela{
                    margin-top: 20px;
                }
       

                .tabela th{
                    font-size: 12px;
                }
                td{
                    font-size: 12px;
                }
                .all{
                    position: absolute;
                    color: #fff;
                    padding: 8px;
                    border-radius: 5px;
                    background: #70cf70;
                    margin-left: 56px;
                }
                
      
    </style>
</body> 