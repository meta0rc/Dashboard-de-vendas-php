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
        <div class="logo home-logo">
            <a href="#">
                <img src="./VultureGames.png" alt="">
            </a>
        </div>

    </header>

<?php 

$codigo = $_POST['pesquisa'];

include('conecta.php');

mysqli_select_db($con, '$banco');

$sql = "SELECT * FROM produtos WHERE codigo = '$codigo'";

$resultado = mysqli_query($con, $sql);

?> 
 <!-- <div class="lixo" id="lixodoinferno">
       <a href="alterar.php?id=" class="alterar">Alterar</a>
       <a href="excluir.php?id=" class="del" onclick="confirm('Deseja realmente excluir?')">Excluir</a>
    </div>
-->
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
            <td><?php echo "<img src='./close.png' id='btn-close' height='30px'>"; ?></td>
            <td><?php echo "<img src='./confirme.png' id='btn-confirme' height='30px'>"; ?></td>
        </tr>
    
            </tbody>

        <?php } ?>
    </table>
    
        
            <script src="geral.js"></script>
            
            <style>
                .tabela th{
                    font-size: 12px;
                }
                td{
                    font-size: 12px;
                }
            </style>
</body>
</html>