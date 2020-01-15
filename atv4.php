<?php
$texto = $_GET['texto']; 

$texto = fopen('msg2.txt' , 'r'); 
    echo fgets($texto);
    fclose($texto);
    
?>