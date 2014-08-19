<?php
include 'conexao/conecta.inc';
echo '<meta charset=UTF-8>';

$nome = $_POST['nome'];
$email =$_POST['email'];
$senha = $_POST['senha'];





$sql = "INSERT INTO usuario_normal(NOME_USUARIO,EMAIL_USUARIO,SENHA_USUARIO,TIPO_USUARIO)
    VALUES ('$nome','$email','$senha','RES')";
if(mysql_query($sql)){
    echo 'Dados inseridos com sucesso !' . "<br>";
}else{
   echo 'Não foi possível cadastrar o usuário! ' . "<br>";
}

    echo '<a href="frmlogin.php">Voltar</a>'. "<br>";

?>