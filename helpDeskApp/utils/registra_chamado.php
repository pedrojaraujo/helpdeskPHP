<?php
//Montagem do texto
$texto = "Titulo: {$_POST['titulo']}\nCategoria: {$_POST['categoria']}\nDescrição: {$_POST['descricao']}\n";


//Criação do arquivo:


$arquivo = '../db/chamado.txt';

$arquivo = fopen($arquivo, 'a');

echo '<pre>';
print_r($texto);
echo '</ pre>';

fwrite($arquivo, $texto);

fclose($arquivo);

header('location: ../pages/abrir_chamado.php');