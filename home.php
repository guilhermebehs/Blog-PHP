<html>
  <style>
table, th, td {
    border: 1px solid black; 
  }
</style>
 <body>
   <div align="right">
   	<form method="GET" action="/controller/Logout.php">
  	<input type="submit" value="Logout">
    </form>
  </div> 	
   <table>
   <th>Título</th>
   <th>Conteúdo</th>
   <th>Data Criação</th>
 	<?php
     session_start();
	$servername = "localhost";
	$username = "root";
	$password = "210393";
	try 
	{
    	$conn = new PDO("mysql:host=$servername;dbname=estudo", $username, $password);
    	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    	$sql = "SELECT * FROM postagem where id_usuario = ?";
    	$rs = $conn->prepare($sql);
    	$rs->bindParam(1, $_SESSION["id"]);

    	$rs->execute();
        if($rs->rowCount() > 0){
          $i = 0;
          while($i < $rs->rowCount()){ 	
                $row = $rs->fetch();
        		echo "<tr><td>".$row["titulo"]."</td><td>".$row["conteudo"]."<td>".$row["data_criacao"]."</td></tr>";
        		$i++;
   		 }}
        
    }
	catch(PDOException $e)
    {
    	echo "Conexão falhou: " . $e->getMessage();
    }	

?>
     
    </table>
   
 </body>
</html>
