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

$cpf = $_POST['pesquisa'];

include('conecta.php');

mysqli_select_db($con, '$banco');

$sql = "SELECT * FROM clientes WHERE cpf = '$cpf'";

$resultado = mysqli_query($con, $sql);

if($cpf == NULL){
    echo "<script>confirm('Cadastrar um novo usuário');</script>";
    header('refresh:1; cadastro.php');
   
}

?> 
 <!-- <div class="lixo" id="lixodoinferno">
       <a href="alterar.php?id=" class="alterar">Alterar</a>
       <a href="excluir.php?id=" class="del" onclick="confirm('Deseja realmente excluir?')">Excluir</a>
    </div>
-->
    <table class="tabela">
        <thead>
        <tr>

            <th>CPF</th>
            <th>RG</th>
            <th>Nome</th>
            <th>Telefone</th>
            <th>Rua</th>
            <th>Bairro</th>
            <th>Estado</th>
            <th>Complemento</th>
            <th>Datadocadastro</th>
            <th>Email</th>
            
        </tr>
        </thead>
        
        <?php while($dado = mysqli_fetch_array( $resultado )){ ?>
                    <tbody>
                    <tr>
                    <td><?php echo $dado["cpf"]; ?></td>
                    <td><?php echo $dado["rg"]; ?></td>
                    <td><?php echo $dado["nome"]; ?></td>
                    <td><?php echo $dado["telefone"]; ?></td>
                    <td><?php echo $dado["rua"]; ?></td>
                    <td><?php echo $dado["bairro"]; ?></td>
                    <td><?php echo $dado["estado"]; ?></td>
                    <td><?php echo $dado["complemento"]; ?></td>
                    <td><?php echo $dado["datadocadastro"]; ?></td>
                    <td><?php echo $dado["email"]; ?></td>
                    
                    <td><?php echo "<img src='./download__1_-removebg-preview.png' id='btn-more' height='30px'>"; ?></td>
                    <?php 
                        echo "<div class='lixo' id='lixodoinferno'>";
                        echo "<a href=\"alterauser.php?id=$dado[id]\" class='alterar'>Alterar</a>";
                        echo "<a href=\"excluir.php?id=$dado[id]\" class='del' onclick=\"confirm('Deseja realmente excluir?')\">Excluir</a>";
                        echo "</div>";

                        ?> 
                    </tr>
                   
                   
                     </div>
                    </tbody>
            <?php 
        } ?>
           
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