<?php
$wiek = 0;

while ($wiek <= 18) {
    $wiek = (int)readline("Podaj swój wiek: ");
    if ($wiek <= 18) {
        echo "Musisz podać wiek większy niż 18.";
    }
}

echo "Twój wiek wynosi $wiek";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Wynik formularza</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $imie = $_POST["imie"];
        $nazwisko = $_POST["nazwisko"];
        
        echo "<p>Imię: $imie</p>";
        echo "<p>Nazwisko: $nazwisko</p>";
    }
    ?>
</body>
</html>
