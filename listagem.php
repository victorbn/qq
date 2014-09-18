<?php
include 'conexao/conecta.inc';
include 'includes/funcoesUteis.inc';

$quantidade= 10;
$pagina= (isset($_GET['pagina'])) ?(int)$_GET['pagina'] : 1;
$inicio =($quantidade *$pagina) - $quantidade;


$sql= "SELECT * FROM usuario ORDER BY NOME_USUARIO ASC LIMIT $inicio,$quantidade";
$qr =  mysql_query($sql) or die (mysql_error());


$buscaDadosBancoDeDados = "SELECT * FROM tipo";

$busca = mysql_query($buscaDadosBancoDeDados) or die (mysql_error());
echo ' <center> <h3> Dados Usuarios <h3></center>';
echo '<div="algin:right;margin-right:10px;"><a href=logout.php?p=admin.php>Logout</a></br><br><br>';
echo '<a href=frmcadastro_adm.php>Inserir Usuario </a> </br>';


while( $usuario = mysql_fetch_assoc($qr))
{
   
$cod=$usuario['COD_USUARIO'];

    echo ' 
   
    
     Nome: '.$usuario['NOME_USUARIO'] .'<br> </br>
     Email: '.$usuario['EMAIL_USUARIO'] .'<br> </br>
       Tipo: '.$usuario['TIPO_USUARIO'] .'<br> </br>
    

     

         
    
    
    
    ';
    //echo"<a href=atualizar.php?id=$cod> Editar </a>&nbsp;";*/ 
    echo"<a href=delete.php?id=$cod> Deletar </a> </br>";


}

$sqlTotal= "SELECT COD_USUARIO FROM usuario";
$qrTotal = mysql_query($sqlTotal) or die (mysql_error());
$numTotal = mysql_num_rows($qrTotal);
$totalPagina =ceil($numTotal/$quantidade);

echo '<a href="?pagina=1"> Primeira Página</a>';
for($i =1; $i <=$totalPagina;$i++){

    if($i == $pagina)
        echo $i;
    
    else
        
        
        echo "<a href=\"?pagina=$i\">$i</a>";
        
}    
echo "<a href=\"?pagina=$totalPagina\"> Ultima Pagina</a>";
 



        
        ?>