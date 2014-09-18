<?php

echo '<meta charset="UTF-8">';
include_once 'includes/funcoesUteis_1.inc';
validaAutenticacao('frmlogin.php','ADM');
echo '<h2>Página Inicial - Ambiente Administrativo</h2>';



echo '
   
     
     
    Bem vindo administrator: '.$_SESSION['nome'] .'<br>
  ';
        
 echo '<a href=listagem.php>Listar Usuario </a> </br>';
 echo '<a href=frmcadastro_adm.php>Inserir Usuario </a> </br>';
 echo '<a href=logout.php?p=/admin/admin.php>Logout</a> </br>'; 