<?php


  $usuario = "root";
  $senha = "elaborata";
  $banco = "pdv";
  $servidor = "localhost";
  
  $con = mysqli_connect($servidor, $usuario, $senha, $banco);
  mysqli_set_charset($con, 'utf8');
  
  $sql = "SELECT * FROM produtos";
  
  $res = mysqli_query($con, $sql);
  
  $produtos = mysqli_fetch_all($res, MYSQLI_ASSOC);
  
  echo json_encode($produtos);



