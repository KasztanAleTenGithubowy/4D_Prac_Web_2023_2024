<?php
$liczba = 5; //Zmiana liczby

echo "Tabela mnożenia dla liczby $liczba: ";

for ($i = 1; $i <= 10; $i++) {
    $wynik = $liczba * $i;
    echo "$liczba x $i = $wynik     ";
}
?>