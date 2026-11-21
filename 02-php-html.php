<?php

$nom = "Zakaria";
$age = 20;
$ville = "Agadir" ; 

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>PHP et HTML</title>
</head>

<body>

    <h1>informations</h1>

    <p>
        Bonjour
        <?php echo $nom; ?>
    </p>

    <p>
        Vous avez
        <?php echo $age; ?>
        ans.
    </p>

    <p>
        from 
        <?php echo $ville ?>
    </p>

</body>

</html>