<?php


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
    	echo "Connected successfully<br/>";
    }
	catch(PDOException $e)
    {
    	echo "Connection failed: " . $e->getMessage();
    }
}	
else
	header('Location: /index.php');

?>
