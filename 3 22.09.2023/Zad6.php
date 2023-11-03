<?php
$podaneHaslo = "Haslo";

do {
    echo"Podaj haslo: ";
    $wprowadzoneHaslo = readline();

    if ($podaneHaslo == $wprowadzoneHaslo) {
        echo "Podane haslo jest poprawne";
        break;
    } else {
        echo "Haslo jest nie poprawne. Podaj jeszcze raz ";
    }

}   while (true);
?>