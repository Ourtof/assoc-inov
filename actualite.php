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
   include_once('include/scripts/header.php');

   $mois = array('Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septebre', 'Octobre', 'Novembre', 'Décembre');
   $mois_num = array('Janvier'=>1, 'Février'=>2, 'Mars'=>3, 'Avril'=>4, 'Mai'=>5, 'Juin'=>6, 'Juillet'=>7, 'Août'=>8, 'septembre'=>9, 'Octobre'=>10, 'Novembre'=>11, 'Décembre'=>12);
   $saison = array('été', 'hiver', 'automne', 'printemps');

   echo "Le mois d'$mois[7] est en été.";

   include_once('include/scripts/footer.php');
   ?>

</body>