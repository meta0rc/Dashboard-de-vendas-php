<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylec.css">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>

</head>
<body>
    <header>
        <div class="logo">
            <a href="#">
                <img src="./VultureGames.png" alt="">
            </a>
        </div>
    </header>
    <?php 
        
      include('conecta.php');
      mysqli_select_db($con, '$banco');
      $sql = "SELECT * FROM clientes LIMIT 1"; 

      $resultado = mysqli_query($con, $sql);

      
    ?> 
   
         <?php while($dado = mysqli_fetch_array( $resultado )){ ?> 
            
            <?php 
             echo "<section id=\"cadastrodeprodutos container\">"
                ?>
                   
                  <?php echo "<section id=\"cadastrodeprodutos container\">"?>  
                  <?php echo "<form action=\"alteraradm.php?id=$dado[id]\" method=\"post\" class=\"cadastro\">"?>   
            
                  <?php echo "  <input type=\"text\" name=\"ctelefone\" placeholder=\"Telefone\" maxlength=\"16\">    "?>   
                  <?php echo " <input type=\"text\" name=\"cdata\" placeholder=\"Data do cadastro\">"?>     
                  <?php echo " <input type=\"text\" name=\"cemail\" placeholder=\"Email do cliente\"> "?>    
                  <?php echo"  <div class=\"endereco\">" ?>   
                  <?php echo "   <input type=\"text\" name=\"ccep\" placeholder=\"CEP (somente digitos)\" maxlength=\"12\">"?>    
                  <?php echo "<input type=\"text\" name=\"cestado\" placeholder=\"Estado\">"?>       
                  <?php echo"  <input type=\"text\" name=\"ccidade\" placeholder=\"Cidade\">" ?>    
                  <?php echo" <input type=\"text\" name=\"cbairro\" placeholder=\"Bairro\">" ?>     
                  <?php echo " <input type=\"text\" name=\"cruaen\" placeholder=\"Rua, numero\">"?>     
                  <?php echo " <input type=\"text\" name=\"ccomplemento\" placeholder=\"Complemento\">" ?>      
                  <?php echo" </div>" ?>  
                  <?php echo "  <div class=\"flex\">"?> 
                  <?php echo " <a href=\"loja.html\" class=\"btn-voltar btn-enviar voltar\"> Voltar              </a>" ?>    
                               
                                <?php echo "  <input type=\"submit\" value=\"Cadastrar\" class=\"btn-enviar submit-product\" id=\"btn\" onclick=\"alert('Alterado')\">" ?>    
                                <?php echo " </div>" ?>  
                    
                        
                                <?php echo " </form> " ?>  
                                <?php echo "</section>" ?>  
            
                
         <?php } ?>

   
    <script src="geral.js">
    </script>
</body> 