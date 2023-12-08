<?php
function czyLiczbaPierwsza($liczba) {
    if ($liczba <= 1) {
        return false;
    }
    if ($liczba <= 3) {
        return true;
    }
    if ($liczba % 2 == 0 || $liczba % 3 == 0) {
        return false;
    }
    $i = 5;
    while ($i * $i <= $liczba) {
        if ($liczba % $i == 0 || $liczba % ($i + 2) == 0) {
            return false;
        }
        $i += 6;
    }
    return true;
}

$liczba = 0;

while (true) {
    echo "Proszę wprowadzić liczbę: ";
    $liczba = (int) readline();
    
    if (czyLiczbaPierwsza($liczba)) {
        echo "Gratulacje! Podana liczba ($liczba) jest liczbą pierwszą.";
        break;
    } else {
        echo "Podana liczba nie jest liczbą pierwszą. Proszę spróbować ponownie.";
    }
}
?>
