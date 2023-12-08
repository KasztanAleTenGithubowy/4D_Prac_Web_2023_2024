<?php
$liczba = 0;

do {
    echo "Proszę wprowadzić liczbę większą niż 0 i mniejszą niż 100: ";
    $liczba = (int) readline(); // Wprowadzenie liczby ze standardowego wejścia
    
    if ($liczba <= 0 || $liczba >= 100) {
        echo "Liczba musi być większa niż 0 i mniejsza niż 100. Spróbuj ponownie.\n";
    }
} while ($liczba <= 0 || $liczba >= 100);

echo "Wprowadzona poprawna liczba: $liczba";
?>
