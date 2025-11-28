<form method="GET">
    Início: <input type="number" name="min"><br>
    Fim: <input type="number" name="max"><br>
    <button type="submit">Sortear</button>
</form>

<?php
    if (isset($_GET['min']) && isset($_GET['max'])) {
        $n = rand($_GET['min'], $_GET['max']);
        echo "Número sorteado: $n";
    }
?>
