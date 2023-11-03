<?php
$liczba = 1;

while (($kwadrat = $liczba * $liczba) <= 1000) {
    echo "Kwadrat liczby $liczba wynosi $kwadrat<br>";
    $liczba++;
}
?>