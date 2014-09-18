<?php


$email =$_POST['email'];

if($email <> ""){
   include 'conexao/conecta.inc';
   
   $sql =  mysql_query("SELECT NOME_USUARIO,EMAIL_USUARIO,SENHA_USUARIO FROM usuario where EMAIL_USUARIO ='$email'");
    $achou = mysql_nuw_rows($sql);
}else{
    
    echo 'email em branco';
  
}
    ?>




<html>
<body>
    <form>
    
 <h2>Formulario recuperar dados do login</h2>
 <form method="post" action="">
    <input name="email" type="text" size="50">
    
	<input type="submit" name="recuperar senha" value="recupera">

</form>
</body>
</html>

