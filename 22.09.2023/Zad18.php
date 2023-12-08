<?php
$poprawnyLogin = "TwojLogin";
$poprawneHaslo = "TwojeHaslo";

do {
    $login = readline("Podaj login: ");
    $haslo = readline("Podaj hasło: ");

    if ($login == $poprawnyLogin && $haslo == $poprawneHaslo) {
        echo "Poprawne dane logowania. Zalogowano pomyślnie.\n";
        break; 
    } else {
        echo "Błędny login lub hasło. Spróbuj ponownie.\n";
    }
} while (true);
?>
