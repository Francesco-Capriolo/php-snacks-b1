<?php
/*
* Secondo snack
*
Passare come parametri GET name, mail e age e verificare
(cercando i metodi che non conosciamo nella documentazione) che:
* - name sia più lungo di 3 caratteri,
* - che mail contenga un punto e una chiocciola e 
* - che age sia un numero.
* 
*  Se tutto è ok stampare "Accesso riuscito", altrimenti "Accesso negato"
*/
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
        Accesso email:
    </h1>
    <p>
        //£ creo una variabile tipo _get (ovvero tramite url del sito)
        <?php
        $check= $_GET;
        //$ stampo la lista
        var_dump($check);
        //! strlen() per dare la lunghezza della stringa
        //! strpos() per vedere se ci sono dei caratteri uguali e quelli scritti subito dopo
        //! is_numeric() per controllare se è un numero
        if ((strlen($check['name'])> 3) && (strpos($check['mail'],'@') && strpos($check['mail'], '.')) && (is_numeric($check['age']))) {
            echo "Accesso riuscito";
        }else{
            echo "Accesso negato";
        }
        ?>
    </p>
</body>
</html>