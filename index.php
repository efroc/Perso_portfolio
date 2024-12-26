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
            <p>Je m'appelle Evan Froc, j'ai 23 ans et je suis étudiant.</p>
            <h3>Dans quel domaine ?</h3>
            <p>Je suis actuellement en dernière année d'une Licence Informatique à l'Université de Rennes, 
                et je suis activement à la recherche d'une alternance dans le cadre du master Ingénierie Logicielle
                que je ferai l'année prochaine.</p>
            <h3>Qu'aimes-tu faire en particulier ?</h3>
            <p>Je suis passionné par le développement logiciel ET web. J'aime aussi me diversifier et 
                apprendre de nouvelles choses. En fait j'aime l'idée, qu'avec une base solide en algorithmique,
                on peut vraiment faire énormément de choses.</p>
        </div>
    </div>
<?php
            break;
        case 2:
?>
    <div class="main-page-2">
        <!--COMPETENCES-->
        <div class="skills">
            <h3>Maîtrise de langages :</h3>
            <!--<div>Java
                <div>4/5</div>
            </div>
            <div>PHP
                <div>3/5</div>
            </div>
            <div>HTML
                <div>4/5</div>
            </div>
            <div>MySQL
                <div>4/5</div>
            </div>-->
        </div>
        <div class="soft-skills">
            <h3>Soft skills :</h3>
            <p>autonomie, esprit d'équipe, esprit critique, curiosité</p>
        </div>
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
        <div>
            <div>5+</div>
            <p>Langages maitrisés</p>
        </div>
        <div>
            <div>2</div>
            <p>Projets réalisés en<br/> autonomie et en équipe</p>
        </div>
        <div>
            <div>1</div>
            <p>Expérience professionnelle</p>
        </div>
    </footer>
</body>
</html>