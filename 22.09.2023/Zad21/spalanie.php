<!DOCTYPE html>
<html>
<head>
    <title>Wynik Obliczeń</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $kilometry = floatval($_POST["kilometry"]);
        $paliwo = floatval($_POST["paliwo"]);
        
        if ($kilometry > 0 && $paliwo > 0) {
            $spalanie_na_100_km = ($paliwo / $kilometry) * 100;
            echo "Średnie spalanie na 100 km wynosi: " . number_format($spalanie_na_100_km, 2) . " litrów.";
        } else {
            echo "Podane dane są nieprawidłowe. Proszę wprowadzić dodatnie wartości.";
        }
    }
    ?>
</body>
</html>
