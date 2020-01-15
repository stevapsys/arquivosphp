<?php
//outro jeito de fazer

$texto = $_GET['texto'];
$ponteiro = fopen('meuarquivo.txt' , 'w+');
if ($ponteiro) {
    if (fwrite ($ponteiro, $texto));
    echo 'Informação salva';
    fclose ($ponteiro);
} else {
    die('não foi possível encontrar o arquivo');
}
    ?>