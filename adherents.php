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
    include_once("include/scripts/header.php");
    
    $annee_bis = array();
    $x = 1900;
    
    while($x <= 2100) {
        if($x % 4 == 0){
            if($x % 100 > 0){
                array_push($annee_bis, $x);
            }else if($x % 400 == 0){
                array_push($annee_bis, $x);
            }
           }
        $x++;
    }
    // print('<pre>');s
    // print_r($annee_bis);
    // print('</pre>');

    $annee = 0;

    print('<ul class="ul_adh">');
    do{
        print('<li>'.$annee_bis[$annee].'</li>');
        $annee++;
    }while(intval(date('Y'))+10 >= $annee_bis[$annee]);
    print('</ul>');
    
    include_once("include/scripts/footer.php");
    ?>

</body>