<?php
$liczba = null;

while ($liczba % 2 != 0) {
    $liczba = (int)readline("Podaj liczbę parzystą: ");
    if ($liczba % 2 != 0) {
        echo "To nie jest liczba parzysta. Spróbuj ponownie.\n";
    }
}

echo "Podałeś liczbę parzystą: $liczba.";
?>
