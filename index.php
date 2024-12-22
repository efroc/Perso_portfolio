<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="src/style/style.css">
    <link rel="icon" href="ressources/images/icon.jpeg" type="image/x-icon">
    <title>Portfolio of Evan Froc</title>
</head>
<body>
    <header>
        <h2 class="titre">My Port<span style="color: #d82d47;">folio</span></h2>
        <ul class="head-menu">
            <li><a href="index.php?menu=1">Accueil</a></li>
            <li><a href="index.php?menu=2">Compétences</a></li>
            <li><a href="index.php?menu=3">Projets</a></li>
            <li><a href="index.php?menu=4">Contact</a></li>
        </ul>  
        <div class="download-cv">
            <a href="ressources/CV.pdf" download="EVAN_FROC_CV.pdf">Télécharger le CV</a>
        </div>
    </header>
<?php
    if(!isset($_GET['menu'])) $_GET['menu'] = 1;
    switch($_GET['menu']) {
        case 1:
?>
    <div class="main-page-1">
        <!--ACCUEIL-->
        <div class="accueil-image"><img class="myself" src="ressources/images/myself.jpg"></div>
        <div class="accueil-presentation">
            <h3>Qui es-tu ?</h3>
            <p>Je m'appelle Evan Froc et j'ai 23 ans.</p>
            <h3>Que fais-tu ?</h3>
            <p>Je suis actuellement en dernière année de Licence Informatique à l'Université de Rennes, 
                et je suis activement à la recherche d'une alternance dans le cadre du master Ingénierie Logicielle
                que je ferai l'année prochaine.</p>
        </div>
    </div>
<?php
            break;
        case 2:
?>
    <div class="main-page-2">
        <!--COMPETENCES--><p>competences</p>
    </div>
<?php
            break;
        case 3:
?>
    <div class="main-page-3">
        <!--PROJETS--><p>projets</p>
    </div>
<?php
            break;
        case 4:
?>
    <div class="main-page-4">
        <!--CONTACT--><p>contact</p>
    </div>
<?php
            break;
    }
?>
    <footer>
        
    </footer>
</body>
</html>