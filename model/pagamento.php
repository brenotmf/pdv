<?php

  $usuario = "root";
  $senha = "elaborata";
  $banco = "pdv";
  $servidor = "localhost";
  
  $con = mysqli_connect($servidor, $usuario, $senha, $banco);
  mysqli_set_charset($con, 'utf8');
  
  $produtos = json_encode($_POST["cupom"]);
  $total = $_POST["total"];
  
  $sql = "INSERT INTO vendas "
          . "(nota, produtos, total, data) "
          . "VALUES (NULL, '$produtos', '$total', now())";
  
 $res = mysqli_query($con, $sql);
 
 echo json_encode($res);
 