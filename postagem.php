<html>
  <style>
table, th, td {
    border: 1px solid black; 
  }
</style>
 <body>
  	<?php
      session_start();
      if(!isset($_SESSION['id']))
        header('Location: /index.php');
  $servername = "localhost";
  $username = "root";
  $password = "210393";
  try 
  {
      $conn = new PDO("mysql:host=$servername;dbname=estudo", $username, $password);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $sql = "SELECT titulo,conteudo, data_criacao FROM postagem where id = ?";
      $rs = $conn->prepare($sql);
      $rs->bindParam(1, $_GET["id"]);
      $rs->execute();
        if($rs->rowCount() > 0){
            $row = $rs->fetch();
            echo "<div style='border-style:solid; border-width:5px; width:50%;'>"; 
            echo " <div align=center style='margin:5px;'>".$row['titulo']."</div>";
            echo "</div>";
            echo "<div style='border-style:solid; border-width:5px; width:50%;'>";
            echo " <p>".$row['conteudo']."</p>";
            echo "</div>";
              
       }}
        
  catch(PDOException $e)
    {
      echo "Conexão falhou: " . $e->getMessage();
    } 
  	 ?>	  		
  </body>
</html>