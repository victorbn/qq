<?php
//Configuração

$server = 'localhost';
$user = 'root';
$password = 'terceiraface';
$database = 'camelao';


$connection = mysql_connect($server,$user,$password);
if($connection === FALSE)
{
    echo 'Não foi possível estabelecer uma conexão com o MySQL! <br/>'; 
    echo mysql_error();
}
else{
     if(!mysql_select_db($database,$connection))
   
     {
         echo 'Não foi possível selecionar o banco de dados'.$database . '<br/>';
         echo mysql_error();
     }
}

