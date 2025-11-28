<form method="POST">
    Número: <input type="number" name="num">
    <button type="submit">Verificar</button>
</form>

<?php
    if (isset($_POST['num'])) {
        $num = $_POST['num'];

        echo "Número informado: $num<br>";

        if ($num % 2 == 0) {
            echo "Resultado: Par";
        } else {
            echo "Resultado: Ímpar";
        }
    }
?>
