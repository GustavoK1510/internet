<style>
    .box { 
        padding: 5px; 
        margin: 3px; 
        display: inline-block; 
        background: lightblue; 
        border-radius: 4px; 
    }
</style>

<form method="POST">
    Início: <input type="number" name="a"><br>
    Fim: <input type="number" name="b"><br>
    <button type="submit">Mostrar</button>
</form>

<?php
    if (isset($_POST['a']) && isset($_POST['b'])) {
        for ($i = $_POST['a']; $i <= $_POST['b']; $i++) {
            echo "<span class='box'>$i</span>";
        }
    }
?>
