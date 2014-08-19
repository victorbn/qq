<?php
// Recebendo o email do formulário
$email = $_GET['login'];

// Definindo a configuração com o gerenciador mysql
$server = 'localhost';
$user = 'root';
$password = '';
$database = 'teste_1';
//Estabelecendo a conexão e selecionando o banco de dados 
$connection = mysql_connect($server,$user,$password);
mysql_select_db($database,$connection);

// Montando a query de consulta
$query = "SELECT EMAIL_USUARIO FROM usuario WHERE EMAIL_USUARIO = '$email'";
$result = mysql_query($query);
// Criando uma matriz para armazenar todos os emails cadastrados
$emailsCadastrados = array();
while ($usuarios = mysql_fetch_assoc($result))
{
    $emailsCadastrados[] = $usuarios['EMAIL_USUARIO'];
}


// Com a função in_array(campo, matriz), é possível estabelecer uma pesquisa em uma matriz qualquer.
// A função recebe dois parâmetros :  o critério de pesquisa (valor a ser pesquisado) e a matriz.

if(in_array($email, $emailsCadastrados))
{echo false;}
else {
    echo true;
}
exit();