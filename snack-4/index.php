<?php 
/* Creare un array con 15 numeri casuali, 
tenendo conto che l'array non dovrà contenere lo stesso numero più di una volta */
    $min=0;
    $max=100;
    $int=15;
    $newArray= [];
        while(count($newArray) < $int){
            $number = rand($min,$max);
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