<?php

$users_app = [
    [
        'email' => 'adm@teste.com.br',
        'senha' => 123456
    ],

    [
        'email' => 'user@teste.com.br',
        'senha' => 'abcd'
    ]
];

$user_authentication = false;

foreach ($users_app as $user) {
    if ($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']) {
        $user_authentication = true;
    }
}

if ($user_authentication) {
    echo 'Usuário autenticado!';
} else {
    header('Location: index.php?login=erro');
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