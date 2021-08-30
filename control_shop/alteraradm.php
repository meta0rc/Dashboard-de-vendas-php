<?php 

  $telefone = $_POST['ctelefone'];
  $email = $_POST['cemail'];
  $cep = $_POST['ccep'];
  $estado = $_POST['cestado'];
  $cidade = $_POST['ccidade'];
  $bairro = $_POST['cbairro'];
  $ruaen = $_POST['cruaen'];
  $complemento = $_POST['ccomplemento'];

  $id = $_GET['id'];

  include('conecta.php');
  
  mysqli_select_db($con, '$banco');
  
  $sql = "UPDATE clientes SET telefone = '$telefone', email = '$email', cep = '$cep', estado = '$estado',
  cidade = '$cidade', bairro = '$bairro', rua = '$ruaen', complemento = '$complemento' WHERE id = '$id'";

  $resultado = mysqli_query($con, $sql) or die ("Erro");

  header('location: usuarioadm.php');

?> 