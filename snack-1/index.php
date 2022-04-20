<?php  
/**
 * Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario.
 * Ogni array avrà una squadra di casa e una squadra ospite,
 * punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
 * Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60
*
*/
?>


<?php
    $array = [
        [
            "home" => "Olimpia Milano",
            'guest' => 'Cantù',
            'pointshome' => '55',
            'pointsguest' => '60',
        ],
        [
            "home" => "Napoli",
            'guest' => 'RedBull',
            'pointshome' => '80',
            'pointsguest' => '76',
        ],
        [
            "home" => "Lakers",
            'guest' => 'Stars',
            'pointshome' => '38',
            'pointsguest' => '66',
        ],         
    ]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        Partite di Calendario
    </h1>
    <!-- si può dividere fare php e quindi spezzettare il ciclo for  -->
    <!-- il punto(.) serve per aggiungere come il per il js serve il più(+) -->
    <ul>
        <?php for ($i=0; $i < count($array) ; $i++) { ?>
            <li> <?php echo $array[$i]["home"] . "-" . $array[$i]["guest"] . "|". $array[$i]["pointshome"] . "-" . $array[$i]["pointsguest"]; ?> </li>
        <?php } ?>
    </ul>
    <!-- // £ count() nel php è come il .length nel js -->
    <!-- //$ bisogna sempre ricordarsi del dollaro prima di una variabile -->
</body>
</html>