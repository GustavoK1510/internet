<?php
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $peso = $_POST['peso'];
    $altura = $_POST['altura'];

    $imc = $peso / ($altura * $altura);
    $imc = number_format($imc, 2);
?>

Nome: <?= $nome ?><br>
Email: <?= $email ?><br>
Peso: <?= $peso ?> kg<br>
Altura: <?= $altura ?> m<br>
IMC: <b><?= $imc ?></b>
