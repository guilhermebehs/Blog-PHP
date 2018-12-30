<html>
  <style>
table, th, td {
    border: 1px solid black; 
  }
</style>
 <body onkeypress="if(event.keyCode == 13) validarDados()">
  <?php
  	 session_start();
      if(!isset($_SESSION['id']))
        header('Location: /index.php');

  	 	  	?>
  	 	  		
  <form method="POST" action="/controller/CriarPostagem.php" name="formulario" id="formulario">
  	
  
      Título: <input type="text" name="titulo" id="titulo"/> <br/> 
      Conteúdo:  <textarea name="conteudo" rows="4" cols="50" ></textarea> <br/>  
      <input type="submit" value="Entrar"> <br/>
   </form>
   <script>
     function validarDados(){
  
         form.submit();

     }
   </script>
 </body>
</html>