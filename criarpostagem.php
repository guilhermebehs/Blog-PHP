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
  	
  
      Título:<br/> <input type="text" name="titulo" id="titulo"/> <br/> 
      Conteúdo:<br/><textarea id="conteudo" name="conteudo" rows="4" cols="50" ></textarea> <br/>  
      <input type="button" value="Entrar" onclick="validarDados()"> <br/>
   </form>
   <script>
     function validarDados(){
  
         var titulo = document.getElementById('titulo').value;
         var conteudo = document.getElementById('conteudo').value;
         var form = document.getElementById('formulario')
         
         if(titulo.trim() == '' || conteudo.trim() == '')
            window.alert('Um ou mais campos em branco!');
         else
            form.submit();


     }
   </script>
 </body>
</html>