

<?php

echo '<meta charset="UTF-8">';

include_once 'includes/funcoesUteis.inc';

validaAutenticacao('frmlogin.php','2');
echo '<h2>Página Inicial - Ambiente Restrito</h2>';

include 'conexao/conecta.inc';


           
 
     
 
    

    echo '
   
     
     
    Bem vindo: '.$_SESSION['nome'] .'<br>
        
  ';
        


  echo "<a href=perfil.php>Perfil</a><br>"; 
 echo '<a href=logout.php?p=frmlogin.php>Logout</a>'; 


?>
 