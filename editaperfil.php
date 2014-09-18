


<?php
   
include 'conexao/conecta.inc';

session_start();


$email=$_SESSION['email'];
$nome=$_SESSION['nome'];




$consulta=("SELECT * FROM usuario WHERE  EMAIL_USUARIO ='$email' AND NOME_USUARIO ='$nome'");

$sql = mysql_query($consulta);



while($ir=  mysql_fetch_assoc($sql)){
         $id =$ir['COD_USUARIO'];
      $nm=$ir['NOME_USUARIO'];
      $em=$ir['EMAIL_USUARIO'];
}
 

  
  ?>








<!DOCTYPE html>
<html>
    <head>
        <title> Formulário</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="#">
    </head>    
    <body>
       
        
        <form action="update.php?id=<?php echo $id ?>" method="post" >
            
        
            Nome: <input type="text" name="nome"   value="<?php echo $nm ?>"> <br/>
           
    Email:<input type="email" name="email"  value="<?php echo $em?>"> <br/>
    
     senha atual:<input type="password" name="senhaa"  value=""> <br/>
        
    nova senha:<input type="password" name="senha"  value=""> <br/>
    
    
    
    <input type="submit" value="atualizar"> <br>
        
        <a href=indexrestrito.php>Volta para index</a>
    </body>
</html>



