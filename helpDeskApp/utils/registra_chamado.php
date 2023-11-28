<?php
//Montagem do texto
$texto = "{$_POST['titulo']}#{$_POST['categoria']}#{$_POST['descricao']}" . PHP_EOL;


//Criação do arquivo:




$arquivo = fopen('../db/chamado.txt', 'a');

echo '<pre>';
print_r($texto);
echo '</ pre>';

fwrite($arquivo, $texto);

fclose($arquivo);

header('location: ../pages/abrir_chamado.php');
