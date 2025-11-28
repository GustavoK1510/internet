<form method="POST">
    Lado A: <input type="number" name="a"><br>
    Lado B: <input type="number" name="b"><br>
    Lado C: <input type="number" name="c"><br>
    <button type="submit">Verificar</button>
</form>

<?php
    if (isset($_POST['a'], $_POST['b'], $_POST['c'])) {
        $a = $_POST['a'];
        $b = $_POST['b'];
        $c = $_POST['c'];

        if ($a < $b + $c && $b < $a + $c && $c < $a + $b) {

            if ($a == $b && $b == $c) echo "Equilátero";
            else if ($a == $b || $a == $c || $b == $c) echo "Isósceles";
            else echo "Escaleno";

        } else {
            echo "Não pode formar triângulo.";
        }
    }
?>
