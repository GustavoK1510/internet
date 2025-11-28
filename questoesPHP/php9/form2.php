<?php
    $nome = $_GET['nome'];
    $email = $_GET['email'];
?>

<form action="resultado.php" method="POST">
    <input type="hidden" name="nome" value="<?= $nome ?>">
    <input type="hidden" name="email" value="<?= $email ?>">

    Peso (kg): <input type="number" step="0.01" name="peso"><br>
    Altura (m): <input type="number" step="0.01" name="altura"><br>

    <button type="submit">Calcular IMC</button>
</form>
