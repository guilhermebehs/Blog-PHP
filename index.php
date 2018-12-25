<html>
  <style>
table, th, td {
    border: 1px solid black; 
  }
</style>
 <body onkeypress="if(event.keyCode == 13) validarDados()">
  <form method="POST" action="/controller/ValidarLogin.php" name="formulario" id="formulario">
   <table>
      <tr>
      Email: <input type="text" name="email" id="email"/> 
      </tr>
      <tr>
      Senha: <input type="password" name="senha" id="senha"/> 
      </tr>
      <tr>
      <input type="button" value="Entrar" onclick="validarDados()">
      </tr>
    </table>
   </form>
   <script>
     function validarDados(){
         
         var email = document.getElementById('email').value;
         var senha = document.getElementById('senha').value;
         var form = document.getElementById('formulario')
         
         if(email.trim() == '' || senha.trim() == '')
            window.alert('Um ou mais campos em branco!');
         else
            form.submit();

     }
   </script>
 </body>
</html>