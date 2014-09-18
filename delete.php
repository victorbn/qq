<?php
include 'conexao/conecta.inc';

$cod=$_GET['id'];


$sql="UPDATE usuario SET STATUS_USUARIO = 0 WHERE COD_USUARIO=$cod";
  //UPDATE usuario SET = 0 WHERE COD_USUARIO=$cod";


if(mysql_query($sql)){
    echo 'Dados alterados com sucesso !' . "<br>";
}else{
   echo 'Não foi possível deletar o usuario! ' . "<br>";
}
    echo '<a href=listagem.php>Volta para listagem</a>'
?>