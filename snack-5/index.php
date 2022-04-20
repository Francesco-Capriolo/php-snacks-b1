<?php
    /* Prendere un paragrafo abbastanza lungo, contenente diverse frasi. 
    Prendere il paragrafo e suddividerlo in tanti paragrafi. 
    Ogni punto un nuovo paragrafo. */
?>
<?php 
    $paraghap="La Repubblica promuove lo sviluppo della cultura e la ricerca scientifica e tecnica.Tutela il paesaggio e il patrimonio storico e artistico della Nazione.Tutela l’ambiente, la biodiversità e gli ecosistemi, anche nell’interesse delle future generazioni. La legge dello Stato disciplina i modi e le forme di tutela degli animali";
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
    <div>
        <h4>
            <!-- faccio vedere il paragrafo -->
            <?php echo $paraghap;  ?>
        </h4>
        <!-- //! con explode() divido il praragrafo ogni volta che ci sta il punto -->
        <?php $pieces = explode(".", $paraghap);  ?>

        <ol>
            <!-- //£  ciclo for sul ogni sottostringa creata -->
            <?php for ($i=0; $i < count($pieces) ; $i++) { ?>
            <li>
                <?php echo $pieces[$i];  ?>
            </li>
            <?php } ?>
        </ol>
    </div>
</body>
</html>