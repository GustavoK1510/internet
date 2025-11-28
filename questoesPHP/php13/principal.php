<?php
    session_start();

    if (!isset($_SESSION['logado'])) {
        header("Location: login.php");
        exit;
    }
?>

<h1>Bem-vindo! Você está logado.</h1>

<form action="logout.php">
    <button type="submit">Sair</button>
</form>
