<?php

 session_start();
 if(!isset($_SESSION['id']))
    header('Location: /index.php');

  $titulo = $_POST['titulo'];
  $conteudo = $_POST['conteudo'];
  $servername = "localhost";
  $username = "root";
  $password = "210393";
  try 
  {
      $conn = new PDO("mysql:host=$servername;dbname=estudo", $username, $password);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $sql = "INSERT INTO postagem (id_usuario, titulo, conteudo) values(?,?,?)";
      $rs = $conn->prepare($sql);
      $rs->bindParam(1, $_SESSION['id']);
      $rs->bindParam(2, $titulo);
      $rs->bindParam(3, $conteudo);
      $rs->execute();
      echo "Postagem criada!";    
    }
  catch(PDOException $e)
    {
      echo "Conexão falhou: " . $e->getMessage();
    }   

?>
