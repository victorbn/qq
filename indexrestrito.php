<?php

echo '<meta charset="UTF-8">';
include_once 'includes/funcoesUteis.inc';
validaAutenticacao('frmlogin.php','RES');
echo '<h2>Página Inicial - Ambiente Restrito</h2>';
echo '<a href=logout.php?p=frmlogin.php>Logout</a> </br>'; 
//echo '<a href=perfil.php?COD_USUARIO>Alterar dados</a>';