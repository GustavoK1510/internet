<form method="POST">
    Texto: <input type="text" name="txt">
    <button type="submit">Analisar</button>
</form>

<?php
    if (isset($_POST['txt'])) {
        $s = strtolower($_POST['txt']);
        $semEspaco = str_replace(" ", "", $s);

        $tamanho = strlen($semEspaco);
        $palindromo = ($semEspaco == strrev($semEspaco)) ? "Sim" : "Não";

        $vogais = preg_match_all('/[aeiou]/', $semEspaco);
        $consoantes = preg_match_all('/[bcdfghjklmnpqrstvwxyz]/', $semEspaco);

        echo "Tamanho: $tamanho<br>";
        echo "Palíndromo: $palindromo<br>";
        echo "Vogais: $vogais<br>";
        echo "Consoantes: $consoantes<br>";
    }
?>
