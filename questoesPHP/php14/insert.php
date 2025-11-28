<?php
    $conn = new mysqli("localhost", "root", "", "meubanco");

    if ($conn->connect_error) {
        die("Erro na conexão: " . $conn->connect_error);
    }

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $tel = $_POST['telefone'];

    $sql = "INSERT INTO usuarios (nome, email, telefone) VALUES ('$nome', '$email', '$tel')";

    if ($conn->query($sql)) {
        echo "Usuário inserido com sucesso!<br>";
        echo "<a href='listar.php'>Ver registros</a>";
    } else {
        echo "Erro ao inserir: " . $conn->error;
    }

    $conn->close();
?>
