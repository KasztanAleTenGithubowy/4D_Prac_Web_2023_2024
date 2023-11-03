<?php
function obliczSilnie($liczba) {
    $silnia = 1;
    $licznik = 1;
    
    do {
        $silnia *= $licznik;
        $licznik++;
    } while ($licznik <= $liczba);
    
    return $silnia;
}

$liczba = 5; //zmiana liczby do silni

$silniaWynik = obliczSilnie($liczba);
echo "Silnia z $liczba wynosi: $silniaWynik";
?>