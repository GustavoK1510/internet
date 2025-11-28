<?php
    $conn = new mysqli("localhost", "root", "", "meubanco");

    if ($conn->connect_error) {
        die("Erro: " . $conn->connect_error);
    }

    $result = $conn->query("SELECT * FROM usuarios");

    echo "<h2>Usuários cadastrados</h2>";

    if ($result->num_rows > 0) {
        echo "<table border='1' cellpadding='10'>
                <tr>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Telefone</th>
                </tr>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>{$row['nome']}</td>
                    <td>{$row['email']}</td>
                    <td>{$row['telefone']}</td>
                </tr>";
        }

        echo "</table>";
    } else {
        echo "Nenhum usuário cadastrado.";
    }

    $conn->close();
?>
