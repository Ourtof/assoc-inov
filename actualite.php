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

   $mois = array(1 => 'Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septebre', 'Octobre', 'Novembre', 'Décembre');
   $saison = array('été', 'hiver', 'automne', 'printemps');
   $num_mois = date('12');

   switch($num_mois){
    case 1:
    case 2: {
        print("le mois de ${mois[$num_mois]} est en $saison[1].");
        break;
    }
    case 3: {
        if(date('d') < 21){
            print('C\'est encore l\''.$saison[1].'.');
        }else{
            print('C\'est déjà le '.$saison[3]);
        }
        break;
    }
    case 4:
    case 5:{
        print("le mois de ${mois[$num_mois]} est au $saison[3]");
        break;
    }
    case 6: {
        if(date('d') < 21){
            print('C\'est encore le '.$saison[3].'.');
        }else{
            print('C\'est déjà l\''.$saison[0].'.');
        }
        break;
    }
    case 7:
    case 8: {
        print("le mois de ${mois[$num_mois]} est en $saison[0]");
        break;
    }
    case 9: {
       if(date('d') < 23){
        print('C\'est encore l\''.$saison[0].'.');
       }else{
        print('C\'est déjà l\''.$saison[2].'.');
       }
       break;
    }
    case 10: 
    case 11: {
        print("le mois de ${mois[$num_mois]} est en $saison[2]");
        break;
    }
    case 12: {
        if(date('23') < 21){
            print('C\'est encore l\''.$saison[2].'.');
        }else{
            print('C\'est déjà l\''.$saison[1].'.');
        }
        break;
    }
    default :{
        print("Ce mois n'existe pas.");
        break;
    }
   }
   print('<br>');

   //fait avec une fonction date(); On peut modifier l'année "Y" par n'importe quelle année pours avoir si elle est bisextile ou non.

   $annee = date('Y');

   if($annee % 4 > 0){
    print('Ce n\'est pas une année bisextile');
   }else{
    if($annee % 100 > 0){
        print('C\'est une année bisextile');
    }else if($annee % 400 == 0){
        print('C\'est une année bisextile');
    }else{
        print('Ce n\'est pas une année bisextile');
    }
   }


   include_once('include/scripts/footer.php');
   ?>

</body>