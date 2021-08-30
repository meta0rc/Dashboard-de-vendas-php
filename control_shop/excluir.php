<?php 
  
  $id = $_GET['id'];

  include('conecta.php');
  
  mysqli_select_db($con, '$banco');
  
  $sql = "DELETE FROM clientes WHERE id = '$id'";
  
  $resultado = mysqli_query($con, $sql) or die ("Erro");

  header('location: usuarioadm.php');

?> 
