<?php
$portrait1 = array('name' => 'Victor', 'firstname' => 'Hugo', 'portrait' => 'http://upload.wikimedia.org/wikipedia/commons/5/5a/Bonnat_Hugo001z.jpg');
$portrait2 = array('name' => 'Jean', 'firstname' => 'de La Fontaine', 'portrait' => 'http://upload.wikimedia.org/wikipedia/commons/e/e1/La_Fontaine_par_Rigaud.jpg');
$portrait3 = array('name' => 'Pierre', 'firstname' => 'Corneille', 'portrait' => 'http://upload.wikimedia.org/wikipedia/commons/2/2a/Pierre_Corneille_2.jpg');
$portrait4 = array('name' => 'Jean', 'firstname' => 'Racine', 'portrait' => 'http://upload.wikimedia.org/wikipedia/commons/d/d5/Jean_racine.jpg');
?>
<!DOCTYPE html>
<html lang="FR">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <title>PHP Partie 10 exercice 3</title>
    </head>
    <body>
        <div class="container" id="page-top">
            <div class="row">
                <div class="col-xl-12">
                    <h1 align="center">PHP Partie 10 exercice 3</h1>
                    <h3 align="center">Exercice 3</h3>
                    <p align="center">Faire une fonction qui permet d'afficher les données des tableaux suivants :</p>
                    <div align="center">
                        <?php

                        function tri($portraits) {
                            foreach ($portraits as $key => $value) {
                                if ($key == 'name') {
                                    $name = $value;
                                } elseif ($key == 'firstname') {
                                    $firstname = $value;
                                } elseif ($key == 'portrait') {
                                    $portrait = $value;
                                }
                            }
                            ?>
                            <h3>Portrait de <?= $name . ' ' . $firstname ?></h3> 
                            <div><img src="<?= $portrait ?>"/></div>          
                            <?php
                        }

 //                       return;
                        ?>
                        <?= tri($portrait1) ?>
                        <?= tri($portrait2) ?>
                        <?= tri($portrait3) ?>
                        <?= tri($portrait4) ?>
                    </div>
                    </body>
                    </html>
