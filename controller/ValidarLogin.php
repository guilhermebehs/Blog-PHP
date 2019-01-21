<?php

$email = "";
$senha = "";
if($_POST['email'] && $_POST['senha']){
	$email = $_POST['email'];
	$senha = $_POST['senha'];
	$servername = "localhost";
	$username = "root";
	$password = "";
	try 
	{
    	$conn = new PDO("mysql:host=$servername;dbname=estudo", $username, $password);
    	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    	$sql = "SELECT * FROM usuario where email=? and senha = ?";
    	$rs = $conn->prepare($sql);
    	$rs->bindParam(1, $email);
    	$rs->bindParam(2, $senha);
    	$rs->execute();
        if($rs->rowCount() > 0){
           session_start();
           $row = $rs->fetch();
           $_SESSION['id'] = $row['id'] ;
           $_SESSION['nome'] = $row['nome'] ;
           $_SESSION['email'] = $row['email'];	
           header('Location: /home.php');
        }
        else
           echo "Falha no login!";	

    }
	catch(PDOException $e)
    {
    	echo "Conexão falhou: " . $e->getMessage();
    }
}	
else
	header('Location: /index.php');

?>
