<?php
    if(!isset($_POST['username']) || !isset($_POST['password'])){
        header('Location: login.php');
        exit();
    };
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username === 'admin' && $password === 'senha123'){
        $_SESSION['$username'] = $username;
        echo '<h1>Login bem-sucedido!</h1>';
        echo '<p>Bem vindo, $username!</p>';
    } else{
        header('Location: login.php?error=credenciais_invalidas');
        exit();
    };
?>