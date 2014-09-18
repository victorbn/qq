<?php
include 'conexao/conecta.inc';
echo '<meta charset=UTF-8>';



$nome = $_POST['nome'];
$email =$_POST['email'];
$senha = $_POST['senha'];
$senhacrip=  md5($senha);
$tipo = 2;







$sql = "INSERT INTO usuario(NOME_USUARIO,EMAIL_USUARIO,SENHA_USUARIO,TIPO_USUARIO)
    VALUES ('$nome','$email','$senhacrip','$tipo')";
if(mysql_query($sql)){
    echo 'Dados inseridos com sucesso !' . "<br>";
}else{
    
   echo 'Não foi possível cadastrar o usuário! ' . "<br>";
  echo mysql_error();
}

    echo '<a href="frmlogin.php">Voltar</a>'. "<br>";

?>