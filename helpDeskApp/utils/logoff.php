<?php
session_start();

/* echo '<pre>';
print_r($_SESSION);
echo '</pre>';

unset($_SESSION['x']);
/* remover índices do array do sessão
unset(), remove apenas se o item existir
 */

/* Destruir a variável de sessão
 session_destroy(), normal forçar um redirecionamento
 */ 

 session_destroy();
 header('Location: ../index.php');