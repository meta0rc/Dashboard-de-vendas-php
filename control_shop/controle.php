
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
    $sql = "SELECT * FROM produtos";
    $resultado = mysqli_query($con, $sql) or die ('Erro na query');

    ?>

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
        </tr>
    
            </tbody>

        <?php } ?>
    </table>
    <script src="geral.js">
    </script>
     
     <style>   
         .tabela{
            margin-bottom: 50px;
     }
                .tabela th{
                    font-size: 12px;
                }
                td{
                    font-size: 12px;
                }
            </style>
</body> 