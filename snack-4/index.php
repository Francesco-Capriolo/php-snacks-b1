<?php 
/* Creare un array con 15 numeri casuali, 
tenendo conto che l'array non dovrà contenere lo stesso numero più di una volta */
    //$creo delle variabili da 0 a 100 fino al massimo di 15
    $min=0;
    $max=100;
    $int=15;
    //£ iniziallizzo una variabile vuota
    $newArray= [];
    //!faccio un while finchè non arrivo a 15
        while(count($newArray) < $int){
            //!creo dei numeri randomici con rand()
            $number = rand($min,$max);
            //! se non ci sta il numero che si è appena creato allora lo inserisco nell'array
            if (!in_array($number,$newArray)) {
                $newArray[]= $number;
            }
        }
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
    <ol>
        <li> <?php var_dump($newArray);  ?> </li>
    </ol>
</body>
</html>