<form method="POST">
    Digite números separados por vírgula:<br>
    <input type="text" name="nums" placeholder="ex: 5,10,25,2,99">
    <br><br>
    <button type="submit">Calcular</button>
</form>

<?php
    if (isset($_POST['nums'])) {

        $input = $_POST['nums'];
        $numeros = array_map('intval', explode(",", $input));

        if (count($numeros) > 0) {

            $soma = array_sum($numeros);
            $maior = max($numeros);
            $menor = min($numeros);

            echo "Números informados: ";
            print_r($numeros);
            echo "<br><br>";

            echo "Soma: $soma<br>";
            echo "Maior número: $maior<br>";
            echo "Menor número: $menor<br>";
        }
    }
?>

