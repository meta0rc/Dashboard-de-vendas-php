<?php 

    if(isset($_POST['del'])){
        include('conecta.php');
        mysqli_select_db($con, '$banco');
    
        $sql = "TRUNCATE TABLE produtos";
        $result = mysqli_query($con, $sql) or die ("Erro");
    
        header('location: controle.php');
    }
    if(isset($_POST['filter'])){
        
    }
 
?>