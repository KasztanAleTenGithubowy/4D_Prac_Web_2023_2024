<?php
    $conn = mysqli_connect('localhost', 'root', '', 'baza') or die ('błąd płączenia') 
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gromady kręgowców</title>
    <link rel="stylesheet" href="style12.css">
</head>
<body>
    <div id='menu'>
        <a href='gromada-ryby.html'>gromada ryb</a>
        <a href='gromada-ptaki.html'>gromada ptaków</a>
        <a href='gromada-ssaki.html'>gromada ssaków</a>
    </div>

    <div id='logo'>
        <h2>GROMADY KRĘGOWCÓW</h2>
    </div>

    <div id='lewy'>
        <?php
            $lista = mysqli_query($conn, 'SELECT zwierzeta.id,Gromady_id,gatunek,wystepowanie,nazwa from zwierzeta,gromady where (Gromady_id=4 or Gromady_id=5) and Gromady_id=gromady.id');
            while($data = mysqli_fetch_assoc($lista))
            {
                echo $data['id'].'. '.$data['gatunek'].'</br></br>'.'Występowanie: '.$data['wystepowanie'].', gromada '.$data['nazwa'].'<hr>';
            }
        ?>
    </div>

    <div id='prawy'>
        <h1>PTAKI</h1>
        <?php
            $ptaki = mysqli_query($conn, 'SELECT gatunek, obraz from zwierzeta where Gromady_id=4');
            echo'<ol>';
            while($data = mysqli_fetch_assoc($ptaki))
            {
                echo '<li><a href =' .$data['obraz'].'>'.$data['gatunek'].'</a></li>';
            };
            echo'<ol>';
        ?>      
        <img src="sroka.jpg" alt="Sroka zwyczajna, gromada ptaki">
    </div>

    <div id='stopa'>
        Strone o kręgowcach przygotował: WW4D
    </div>
    
</body>
</html>