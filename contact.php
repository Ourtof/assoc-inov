<?php
    ini_set("display_errors", "on");
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>assoc'inov</title>
    <link rel="stylesheet" href="include/css/styles.css">
</head>

<body>

    <?php
    include_once("include/scripts/functions.php");
    include_once("include/scripts/header.php");

    $admin = ['Responsable administratif' => 
        ['nom' => 'Pierre', 'prénom' => 'Jean', 'téléphone' => '06 06 06 06 06', 'email' => 'jean.pierre@gmail.com'],
        'Responsable RH' => 
        ['nom' => 'Marrant', 'prénom' => 'Damien', 'téléphone' => '07 07 07 07 07', 'email' => 'damien.marrant@gmail.com']
    ];
    ?>
    <div class="flex">

    <?php
        foreach($admin as $indice => $personne) {
        geneCarte($personne);
        };
        
        ?>
        </div>

    <?php
    include_once("include/scripts/footer.php");
    ?>

</body>
</html>