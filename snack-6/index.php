<?php 
/* Utilizzare questo array: https://pastebin.com/CkX3680A. 
Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde.
*/
?>
<?php
    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <?php 
        //£ prendo le chiavi dell'array associativo
        $Keys = array_keys($db);
        var_dump($Keys);
    ?>
        <?php  for ($i=0; $i < count($Keys) ; $i++) { ?>
                <div class="<?php if ($Keys[$i] == 'teachers') { echo 'green'; } else { echo 'gray'; } ?>">
                    <ol>
                        u<?php for ($index=0; $index < count($db[$Keys[$i]]) ; $index++) { ?>
                        <li> 
                            <?php echo $db[$Keys[$i]][$index]["name"] . " " . $db[$Keys[$i]][$index]["lastname"];}  ?> 
                        </li>
                    </ol> 
                </div>
        <?php }  ?>
        
    <!-- 
    <div class="green"> <?php for ($index=0; $index < count($db["teachers"]) ; $index++) { 
        echo $db["teachers"][$index]["name"] . " " . $db["teachers"][$index]["lastname"] ;
    }  ?> </div>
    <div class="gray"><?php for ($index=0; $index < count($db["pm"]) ; $index++) { 
        echo $db["pm"][$index]["name"] . " " . $db["pm"][$index]["lastname"] ;
    }  ?> </div> 
    -->

</body>
</html>