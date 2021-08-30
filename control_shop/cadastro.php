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

    <section id="cadastrodeprodutos container">
        <form action="gravauser.php" method="post" class="cadastro">
            <input type="text" name="cname" placeholder="Nome completo">
            <input type="text" name="ctelefone" placeholder="Telefone" maxlength="16">    
            <input type="text" name="crg" placeholder="RG (somente digitos)" maxlength="16">          
            <input type="text" name="ccpf" placeholder="CPF (somente digitos)">
            <input type="text" name="cdata" placeholder="Data do cadastro">
            <input type="text" name="cemail" placeholder="Email do cliente"> 
            <div class="endereco">
                <input type="text" name="ccep" placeholder="CEP (somente digitos)" maxlength="16">
                <input type="text" name="cestado" placeholder="Estado">
                <input type="text" name="ccidade" placeholder="Cidade">
                <input type="text" name="cbairro" placeholder="Bairro">
                <input type="text" name="cruaen" placeholder="Rua, numero">
                <input type="text" name="ccomplemento" placeholder="Complemento">
            </div>
            <div class="flex">
                <a href="loja.html" class="btn-voltar btn-enviar voltar">
                    Voltar              </a>
                <input type="submit" value="Cadastrar" class="btn-enviar submit-product" id="btn" onclick="clicado()">
              
            </div>
        
            
        </form>
    </section>
    <script src="geral.js">
    </script>
</body> 