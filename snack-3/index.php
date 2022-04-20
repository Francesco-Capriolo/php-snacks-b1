<?php
/* Creare un array di array. 
Ogni array figlio avrà come chiave una data in questo formato:
DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data.
Stampare ogni data con i relativi post.

Qui l'array di esempio: https://www.codepile.net/pile/R2K5d68z
 */
?>
<?php

$posts = [
    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1',
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2',
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3',
        ],
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4',
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5',
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6',
        ],
    ],
];
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
        <?php 
        //£ prendo le chiavi dell'array associativo
        $postsKeys = array_keys($posts);

        //£ prendo i valori delle chiavi dell'array associtivo
        $postsValues = array_values($posts);

        //$ faccio un ciclo for per ogni chiave dell'array
        for($i = 0; $i < count($postsKeys); $i++) {
        ?>
            <h3>Post in data: <?php echo $postsKeys[$i] ?> </h3>
        
            <!-- //! faccio un altro ciclo for per ogni valore della chiave  -->
                <?php for ($index=0; $index < count($postsValues[$i]); $index++) { ?>
                    
                    <h4> 
                        <?php echo $postsValues[$i][$index]['title']; ?>
                    </h4>
                    <p>
                        <?php echo $postsValues[$i][$index]['author']; ?>
                    </p>
                    <p>
                        <?php echo $postsValues[$i][$index]['text']; ?>
                    </p>
                <?php } ?>
        <?php }?>
        
    </ol>
</body>
</html>