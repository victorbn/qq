<?php
   
include 'conexao/conecta.inc';
$cod=$_GET['id'];


$buscaDadosBancoDeDados = "SELECT * FROM usuario where COD_USUARIO=$cod";
 
$busca = mysql_query($buscaDadosBancoDeDados) or die (mysql_error());
 
while( $usuario = mysql_fetch_array($busca))
{
  
    
   

    
     $Nome= $usuario['NOME_USUARIO'];
     $Email=  $usuario['EMAIL_USUARIO']; 
      $tipo=  $usuario['TIPO_USUARIO'];
     
        
  }
  ?>









<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
	<head>
		<title>Novo Usuário</title>
                 
                <meta charset="UTF-8">
	        <!--<meta HTTP-EQUIV="refresh" CONTENT="1">-->
		<!-- Inclus�o do Jquery -->
		<!--<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js" ></script>-->
                <script type="text/javascript" src="js/jquery.min.js"></script>
		<!-- Inclus�o do Jquery Validate -->
		<!--<script type="text/javascript" src="http://ajax.microsoft.com/ajax/jquery.validate/1.6/jquery.validate.js" ></script>-->
                <script type="text/javascript" src="js/validate.js"></script>
		<!-- Valida��o do foruml�rio -->
		<script type="text/javascript">
			$(document).ready(function(){
						 
			    $('#meu_form').validate({
			   
					rules:{ 
						login:{ 
                                                    required: true,
                                                    remote: 'includes/verificaemail.php'
                                                    },//,
                                                conflogin:{
                                                  required: true,
                                                  equalTo: "#login"
                                                },                                
                                             senha:{ 
                                                 required: true
                                                 },
                                              confsenha:{ 
                                                 required: true,
                                                 equalTo: "#senha"
                                                 },
                                               
                                                    /*código meu*/
                                             termos: "required"
                                        /*fim código meu*/
					},
                                        
                                      
					messages:{
						login:{ 
                                                     required: 'Este Campo &eacute; obrigat&oacute;rio' , 
                                                     remote: '<font color="red">Este Login j&aacute; est&aacute; em uso.</font>'},//,
                                                conflogin:{
                                                       required: "O campo confirmação de email é obrigatorio.",
                                                       equalTo: '<font color="red">O campo confirmação de email deve ser identico ao campo email.</font>'
                                                     },
                                                senha:{ 
                                                       required: 'Este Campo &eacute; obrigat&oacute;rio' 
                                                      },
                                                confsenha:
                                                      { 
                                                         required: 'Este Campo &eacute; obrigat&oacute;rio', 
                                                         equalTo:  '<font color="red">O campo confirmação de senha deve ser identico ao campo senha.</font>'
                                                      },
					         termos: "Para se cadastrar você deve aceitar os termos de uso."
                                              }
					});
			
                                    });
			
			
					
					window.onload = function() {
					
                    // $('#login').keypress function(){alert("");});
					  
                       $("#login").keypress(function() {

					     $('div.loader').show();
                     });
									
                       $("#login").focusout(function() {

					     $('div.loader').hide();
                     });									
					 $("#login").keyup(function() {
                       $('div.loader').hide();
                     });
			}
            
	</script>
                     
       
 </head>
<body>
    
 
    
   
<h1>Cadastro de Usuário</h1>
<form method="post" action="update.php">
 
    <input type="hidden" name="id"  value="<?php echo $cod?>" />
             
             Digite o nome: <input type="text" name="nome" id="login" value="<?php echo $Nome ?>" /> <br>
             
                
            Digite um email válido: <input type="text" name="email" id="login" value="<?php echo $Email ?>"  />
		<br/>
                 
		Digite o tipo de usuario válido: <input type="text" name="tipo" id="login" value="<?php echo $tipo?>"  />
			<br/>
            
                Aceito os termos e condições:
		<input type="checkbox" name="termos" id="termos"><br />
                    <input type="submit" value="Atualizar" />
	</form>
<br/><br/>


		 <div class="loader" style="display: none;"><img src="images/loader.gif" alt="Carregando" /></div>
                 
</body>
</html>








