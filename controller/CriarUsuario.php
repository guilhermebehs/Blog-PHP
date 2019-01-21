<?php

  $email = $_POST['email'];
  $nome = $_POST['nome'];
  $senha = $_POST['senha'];
  $servername = "localhost";
  $username = "root";
  $password = "";
  try 
  {
      $conn = new PDO("mysql:host=$servername;dbname=estudo", $username, $password);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $sql = "INSERT INTO usuario (email, nome, senha) values(?,?,?)";
      $rs = $conn->prepare($sql);
      $rs->bindParam(1, $email);
      $rs->bindParam(2, $nome);
      $rs->bindParam(3, $senha);
      $rs->execute();
      echo "Usuário criado!";    
    }
  catch(PDOException $e)
    {
      echo "Conexão falhou: " . $e->getMessage();
    }   

?>
