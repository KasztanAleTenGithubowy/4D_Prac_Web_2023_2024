<?php
$suma = 0;

do {
    echo "Proszę wprowadzić liczbę (0 aby zakończyć): ";
    $liczba = (int) readline();
    $suma += $liczba;
} while ($liczba !== 0);

echo "Suma wprowadzonych liczb wynosi: $suma";
?>
