<?php
$suma = 0;

for ($liczba = 2; $liczba <= 50; $liczba += 2) {
    $suma += $liczba;
}

echo "Suma liczb parzystych od 1 do 50 wynosi: $suma";
?>