<?php

$email = "";
$senha = "";
if($_POST['email'] && $_POST['senha']){
	$email = $_POST['email'];
	$senha = $_POST['senha'];
	$servername = "localhost";
	$username = "root";
	$password = "210393";
	try 
	{
    	$conn = new PDO("mysql:host=$servername;dbname=estudo", $username, $password);
    	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    	$sql = "SELECT * FROM cliente where email=? and senha = ?";
    	$rs = $conn->prepare($sql);
    	$rs->bindParam(1, $email);
    	$rs->bindParam(2, $senha);
    	$rs->execute();
        if($rs->rowCount() > 0){
           echo "Login efetuado com sucesso!";
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
