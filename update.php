<?php
include 'conexao/conecta.inc';
session_start();




$cod= $_GET['id'];
$nome = $_POST['nome'];
$email =$_POST['email'];
$senha=$_POST['senha'];
$senha1=$_POST['senhaa'];
$senhacrip1=  md5($senha1);
$senhacrip=  md5($senha);


$sql="update usuario set NOME_USUARIO='$nome',SENHA_USUARIO='$senhacrip',EMAIL_USUARIO='$email' where COD_USUARIO=$cod";
  

$_SESSION['nome']=$nome;
 $_SESSION['email']=$email;
 $_SESSION['senha']=$senhacrip;


$query = "SELECT * FROM usuario WHERE EMAIL_USUARIO='$email'";  

     $result = mysql_query($query);
     $totalUsuario = mysql_num_rows($result);
     $usuario = mysql_fetch_array($result);
     $senhaBanco = $usuario['SENHA_USUARIO'];

  if($senhacrip1!=$senhaBanco){
      
    echo '<script> 
             alert("senha atual incorreta")
             location.href="editaperfil.php";
            </script>';   
  $_SESSION1['nome']=$nome;
 $_SESSION1['email']=$email;
      
  }
  



else if(mysql_query($sql)){
    echo 'Dados atualizados com sucesso !' . "<br>";
}else{
   echo 'Não foi possível atualizar o usuario! ' . "<br>";
}
    echo '<a href=perfil.php>Volta para perfil</a>';
    
  ;
    
?>
    