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
<?php 
include_once("include/scripts/header.php");
include_once("include/scripts/footer.php");
?>
<body>

    <?php
    print(entete());
    ?>

    <main>
        <p>hello</p>
    <div class=container>
        <div id=title_home>
            <p>Page d'accueil</p>
        </div>
    </div>
    </main>
    <?php
    print(footer());
    ?>

</body>