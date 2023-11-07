<!DOCTYPE html>
<html>
    <head>


    </head>

    <body>
    <form method="post">
        Podaj wiek: <input type="number" name="wiek">
        <input type="submit" value="Sprawdź">
    </form>

    <?php 
        $wiek = $_POST["wiek"];
        if ($wiek < 11) {
            echo "Jesteś dzieckiem";
        } 
        elseif ($wiek >= 11 && $wiek <= 17)
        {
            echo "Jesteś nastolatkiem";
        }
        else
        {
            echo "Jesteś pełnoletni";
        } 
    ?>
    </body>
</html>