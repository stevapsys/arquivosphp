<?php
//usando fopen
//Gravei conteudo do GET na variavel $texto
$texto = $_GET['texto']; 

//msg2.text = nome do arquivo 
//abrindo o arquivo para escrita (modo 'a')
$ponteiro = fopen ('msg2.txt' , 'a'); 

//escreve o conteúdo de $texto no arquivo representado por $ponteiro 
fwrite($ponteiro, $texto);

//fechar o arquivo 
fclose($ponteiro);

//mensagem para o usuário
echo('Salvei as info!');
?>
