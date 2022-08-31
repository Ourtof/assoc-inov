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

    function geneTitre($titre) {
        
       ?>
       <h4><?= $titre ?></h4>
       <?php
       return;
    };

    $titre = "Page d'accueil";
    $menu = ['Accueil' => ['libelle' => 'Accueil', 'href' => 'index.php'], 
            'Adhérents' => ['lebelle' => 'Adhérents', 'href' => 'adherents.php'],
            'Activités' => ['libelle' => 'Activités', 'href' => 'activites.php'],
            'Animateurs' => ['libelle' => 'Animateurs', 'href' => 'animateurs.php'],
            'Acutalités' => ['libelle' => 'Actualités', 'href' => 'actualite.php'],
            'Contact' => ['libelle' => 'Contact', 'href' => 'contact.php']];
    
    ?>

    <?php
        include_once("include/scripts/header.php");
    ?>

    <main>
    <div class="container">
        <div id="title_home">
            <?= geneTitre($titre); ?>
        </div>
    </div>
    </main>
    <?php
        include_once("include/scripts/footer.php");
    ?>

</body>