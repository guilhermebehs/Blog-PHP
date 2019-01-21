<html>
  
 <body onkeypress="if(event.keyCode == 13) validarDados()">

  	 	  		
  <form method="POST" action="/controller/CriarUsuario.php" name="formulario" id="formulario">
  	  <table>
      <tr>
        <td>Email: </td><td><input type="text" name="email" id="email"/> <td/> 
      <tr>
       <td>Nome:</td>  <td><input type="text" name="nome" id="nome"/> </td> 
      </tr>
      <tr>
       <td>Senha: </td>  <td><input type="password" name="senha" id="senha"/> </td> 
      </tr>
      <tr>
       <td>Confirmação da senha: </td> <td><input type="password" name="confirma_senha" id="confirma_senha"/> </td>
      </tr> 
       </table> 
      <input type="button" value="Entrar" onclick="validarDados()"/>  
   </form>
   <script>
     function validarDados(){
  
         var email = document.getElementById('email').value;
         var nome = document.getElementById('nome').value;
         var senha = document.getElementById('senha').value;
         var confirmaSenha = document.getElementById('confirma_senha').value;
         var form = document.getElementById('formulario');
         
         if(email.trim() == '' || nome.trim() == '' ||
            senha == '' ||  confirmaSenha == '')
            window.alert('Um ou mais campos em branco!');
         else{
            
            if(senha != confirmaSenha)
               window.alert('Campos de senha não coincidem!');
            else 
               form.submit();
          }


         }
   </script>
 </body>
</html>