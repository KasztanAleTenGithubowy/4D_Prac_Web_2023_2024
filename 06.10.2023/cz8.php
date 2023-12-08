<!DOCTYPE html>
<html>
    <head>


    </head>

    <body>
   

<form method="post">
    <label for="num1">Liczba 1: </label>
    <input type="number" name="num1" id="num1"><br>

    <label for="num2">Liczba 2: </label>
    <input type="number" name="num2" id="num2"><br>

    <label for="num3">Liczba 3: </label>
    <input type="number" name="num3" id="num3"><br>

    <input type="submit" name="submit" value="Sprawdź">
</form>

<?php
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $num3 = $_POST['num3'];

    if ($num1 == $num2 || $num1 == $num3 || $num2 == $num3)
    {
        echo "Przynajmniej dwie z podanych liczb są takie same.";
    } 
    else 
    {
        echo "Żadne z podanych liczb nie są takie same.";
    }
    ?>

    </body>
</html>