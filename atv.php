<?php
//criar um arquivo escrever e aparecer a mensagem informação salva - usando file_put_contents
$texto = $_GET['texto'];
 file_put_contents("msg.txt",$texto);
 echo "Informação salva"; //poderia ser print também 
    
?>  