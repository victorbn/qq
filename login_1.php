<?php
echo '<meta charset=UTF-8>';
session_start();
$email = isset($_POST['email'])?$_POST['email']:null;
$senha = isset($_POST['senha'])?$_POST['senha']:null;


//echo $email.'      '.$senha;
include 'conexao/conecta.inc';
include 'classe/Bcrypt.class.php';
$query = "SELECT * FROM usuario WHERE EMAIL_USUARIO = '$email'";
$result = mysql_query($query);
$totalUsuario = mysql_num_rows($result);
/* @var $totalUsuario type */
if($totalUsuario === 0){
    echo 'Usuário não encontrado !';
    echo '<a href=admin.php>Voltar</a>';
}
 else {
// Agora preciso testar a senha do usuário
     $usuarios = mysql_fetch_array($result);
     $senhaUsuario = $usuarios['SENHA_USUARIO'];
     $tipoUsuario = $usuarios['TIPO_USUARIO'];
     $nomeUsuario = $usuarios['NOME_USUARIO'];
     if(Bcrypt::check($senha, $senhaUsuario)){
         echo 'Senha não confere !';
         echo '<a href=admin.php>Voltar</a>';
     }else{
     //Agora o email e senha estão corretos !
     // Podemos criar as sessões e direcionar os usuarios
        $_SESSION['email'] = $email;
        $_SESSION['nome'] = $nomeUsuario;
        $_SESSION['senha'] = $senha;
        $_SESSION['tipo'] = $tipoUsuario;
        if($tipoUsuario === '1')
        {
            echo '<script language= "JavaScript">
                   location.href="indexadm.php"
                   </script>';
      
        }
        else{echo 'Tipo de usuário inválido !';
           echo '<a href=admin.php>Voltar</a>';
        }
     }
 
 }
