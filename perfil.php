<?php
include 'conexao/conecta.inc';
session_start();



$email=$_SESSION['email'];
$nome=$_SESSION['nome'];




$consulta=("SELECT * FROM usuario WHERE  EMAIL_USUARIO ='$email' AND NOME_USUARIO ='$nome'  ");

$sql = mysql_query($consulta);



$ir=  mysql_fetch_assoc($sql);
         
echo ' 
   
    
     Nome: '.$ir['NOME_USUARIO'] .'<br> </br>
     Email: '.$ir['EMAIL_USUARIO'] .'<br> </br>
      
    

     

         
    
    
    
    ';
 
 echo '<a href=editaperfil.php>Edita</a>'.'<br>';
  echo '<a href=editaimg.php>Inserir imagem</a>'.'<br>';
echo '<a href=indexrestrito.php>volta para index</a>';

?>