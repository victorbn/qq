<?php
session_start();
include 'conexao/conecta.inc';
$recebe=$_FILES['img']['name'];

$recebe =  str_replace("","_",$recebe);
$recebe =  str_replace("á","a",$recebe);
$recebe =  str_replace("à","a",$recebe);
$recebe =  str_replace("â","a",$recebe);
$recebe =  str_replace("ã","a",$recebe);
$recebe =  str_replace("é","e",$recebe);
$recebe =  str_replace("è","e",$recebe);
$recebe =  str_replace("ê","e",$recebe);
$recebe =  str_replace("í","i",$recebe);
$recebe =  str_replace("ì","i",$recebe);
$recebe =  str_replace("î","i",$recebe);
$recebe =  str_replace("ó","o",$recebe);
$recebe =  str_replace("ò","o",$recebe);
$recebe =  str_replace("õ","o",$recebe);
$recebe =  str_replace("ô","o",$recebe);
$recebe =  str_replace("ç","c",$recebe);
$recebe =  str_replace("ú","u",$recebe);
$recebe =  str_replace("ù","u",$recebe);
$recebe =  str_replace("û","u",$recebe);

$tipo = array('image/jpg', 'image/jpeg' ,'image/pjpeg','image/png');
 $type= $_FILES['img'] ['type'];  
 $teste=array_search($type, $tipo);
 if($teste===false){
     
     
     echo "invalido";
     
     
 }
       
else{
    
    


if(file_exists("imagens/$recebe")){
    $a=1;

    while (file_exists("imagens/[$a]$recebe")){
    $a++;
}
 $recebe="[".$a."]$recebe";
}
if(!move_uploaded_file($_FILES['img']['tmp_name'], "imagens/$recebe")){
    
    
}
}
 $url = $recebe.$type;
 $sql = ("INSERT INTO usuario SET  IMAGEM_PERFIL='$recebe'" );
 






if(mysql_query($sql)){
    echo 'Dados atualizados com sucesso !' . "<br>";
}else{
   echo 'Não foi possível atualizar o usuario! ' . "<br>";
}
    echo '<a href=perfil.php>Volta para perfil</a>';
    mysql_error();
  ;
 
 
 ?>

    
    
    
    
    
    
    
    


