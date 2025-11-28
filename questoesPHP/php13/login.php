<?php
    session_start();

    if (isset($_POST['user'])) {
        if ($_POST['user'] == "gustavo" && $_POST['pass'] == "1510") {
            $_SESSION['logado'] = true;
            header("Location: principal.php");
            exit;
        } else {
            echo "Login inválido!";
        }
    }
?>

<form method="POST">
    Usuário: <input type="text" name="user"><br>
    Senha: <input type="password" name="pass"><br>
    <button type="submit">Entrar</button>
</form>
