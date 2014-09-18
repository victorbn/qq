<?php
 function validaAutenticacao($link,$tipo)
 {
     echo '<meta charset="UTF-8">';
     session_start();
 if(!isset($_SESSION['email']) or !isset($_SESSION['senha'])){
     session_destroy();
 echo '<script> 
             alert("Acesso Negado !\n Você não efetuou login.")
             location.href="admin.php"
            </script>'; 
 }else{
     if($tipo === 'RES'){include_once 'conexao/conecta.inc';}
     if($tipo === 'ADM'){include_once 'conexao/conecta.inc';}
     $email = $_SESSION['email'];
     $senha = $_SESSION['senha'];
     $query = "SELECT * FROM usuario WHERE EMAIL_USUARIO='$email'";     $query = "SELECT * FROM usuario WHERE EMAIL_USUARIO='$email'";

     $result = mysql_query($query);
     $totalUsuario = mysql_num_rows($result);
     if($totalUsuario == 0){
         $usuario = mysql_fetch_array($result);
         $senhaBanco = $usuario['SENHA_USUARIO'];
         $tipoBanco = $usuario['TIPO_USUARIO'];
         if($senha == $senhaBanco){
             session_destroy();
              echo '<script> 
             alert("Acesso Negado !\n Sua senha não confere.")
             location.href="admin.php"
            </script>';
          }else{
               echo '<script> 
             alert("Acesso Negado !\n Email não confere.")
             location.href="'.$link.'"
            </script>';
  
               }
            /* @var $tipo type */
            if($tipo !== $tipoBanco){
         session_destroy();
         echo '<script> 
             alert("Acesso Negado !\n Você não tem permissão de Acesso.")
             location.href="admin.php"
            </script>';
     }
          
          }
    } 
 }