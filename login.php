<?php
echo '<meta charset=UTF-8>';
session_start();
$email = isset($_POST['email'])?$_POST['email']:null;
$senha = isset($_POST['senha'])?$_POST['senha']:null;
$senhacrip=  md5($senha);

//echo $email.'      '.$senha;
include 'conexao/conecta.inc';

$query = "SELECT * FROM usuario WHERE EMAIL_USUARIO = '$email'";
$result = mysql_query($query);
$totalUsuario = mysql_num_rows($result);
/* @var $totalUsuario type */
if($totalUsuario === 0){
    echo 'Usuário não encontrado !';
    echo '<a href=frmlogin.php>Voltar</a>';
}
 else {
// Agora preciso testar a senha do usuário
     $usuarios = mysql_fetch_array($result);
     $senhaUsuario = $usuarios['SENHA_USUARIO'];
     $tipoUsuario = $usuarios['TIPO_USUARIO'];
     $nomeUsuario = $usuarios['NOME_USUARIO'];
     $codUsuario=$usuarios['COD_USUARIO'];
     
     if($senhacrip != $senhaUsuario){
         echo 'Senha não confere !';
         echo '<a href=frmlogin.php>Voltar</a>';
     }else{
      
        $_SESSION['email'] = $email;
        $_SESSION['nome'] = $nomeUsuario;
        $_SESSION['senha'] = $senha;
        $_SESSION['tipo'] = $tipoUsuario;
        $_SESSION['cod'] = $codUsuario;
        if($tipoUsuario === '2')
        {
            echo '<script language= "JavaScript">
                   location.href="indexrestrito.php"
                   </script>';
     
        }
        else{echo 'Tipo de usuário inválido !';}
     }
 
 }


 
 