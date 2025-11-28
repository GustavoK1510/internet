<?php
    $host = "localhost";
    $usuario = "root";
    $senha = ""; 
    $banco = "empresa";
    $porta = 3306;

    $conn = new mysqli($host, $usuario, $senha, $banco, $porta);

    if ($conn->connect_error) {
        die("Erro de conexão: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM usuarios";
    $result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 15</title>
</head>
<body>
    <h2>Lista de Usuários</h2>

    <?php
        if ($result->num_rows > 0) {
            echo "<table>";
            echo "<tr><th>ID</th><th>Nome</th><th>Email</th><th>Telefone</th></tr>";

            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["nome"] . "</td>";
                echo "<td>" . $row["email"] . "</td>";
                echo "<td>" . $row["telefone"] . "</td>";
                echo "</tr>";
            }

            echo "</table>";
        } else {
            echo "<p>A tabela está vazia.</p>";
        }

        $conn->close();
    ?>
</body>
</html>
