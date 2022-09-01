<?php 

function menu() {

    $nav = ['Accueil' => ['libelle' => 'Accueil', 'href' => 'index.php'], 
        'Adhérents' => ['libelle' => 'Adhérents', 'href' => 'adherents.php'],
        'Activités' => ['libelle' => 'Activités', 'href' => 'activites.php'],
        'Animateurs' => ['libelle' => 'Animateurs', 'href' => 'animateurs.php'],
        'Acutalités' => ['libelle' => 'Actualités', 'href' => 'actualite.php'],
        'Contact' => ['libelle' => 'Contact', 'href' => 'contact.php']];

    ?>
    <nav>
        <ul>
            <?php foreach ($nav as $value): ?>
                <li><a href="<?= $value['href'];?>"><?= $value['libelle']; ?></a></li>
            <?php endforeach; ?>
        </ul>
    </nav> 
    <?php
}

function geneCarte($personne) {
    ?>
        <div class="card">
            <div class="image">
                <img src="include/images/dude.png" alt="random_dude">
            </div>
            <p class="rens_name"><?= $personne['prénom']; ?></p>
            <p class="card_text">lorem ipsum</p>
            <p class="rens_tel"><?= $personne['téléphone']; ?></p>
        </div> 

    <?php };

?>