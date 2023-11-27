<?php

session_start();

$user_authentication = false;

$users_app = [
    [
        'email' => 'adm@teste.com.br',
        'senha' => 123456
    ],

    [
        'email' => 'user@teste.com.br',
        'senha' => 'abcd'
    ],
    [
        'email' => 'pedro@email.com',
        'senha' => '123pedro'
    ]
];


foreach ($users_app as $user) {
    if ($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']) {
        $user_authentication = true;
    }
}

if ($user_authentication) {
    echo 'Usuário autenticado.';
    $_SESSION['autenticado'] = 'SIM';
    $_SESSION['x'] = 'valor x';
    $_SESSION['y'] = 'valor y';
    header('Location: ../pages/home.php');

} else {
    $_SESSION['autenticado'] = 'NAO';
    header('Location: ../index.php?login=erro');
}




/* print_r($_POST);
echo '<br />';
echo $_POST['email'];
echo '<br />';
echo $_POST['senha'];

 */


/* echo '<pre>';
print_r($usuarios_app);
echo '</pre>';
 */
?>