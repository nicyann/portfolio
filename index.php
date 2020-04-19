<?php
 require "php/contact.php"; ?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- META -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Yann Nicolle">
    <meta name="description" content="Développeur web en recherche d'un poste sur la région Nantaise .passionné par le dévellopement, curieux ">
    <meta name="Keywords" content="x² ">
    <meta name="robots" content="index,follow" />
    <meta name="Revisit-After" content="15 days">
    <meta name="Rating" content="general">
    <meta name="Distribution" content="global">
    <title>Yann Nicolle - Développeur web</title>
    <!-- fontawesome icons -->
    <!-- <link rel="stylesheet" href="fontawesome-free-5.12.0-web/css/all.css"> -->

    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cookie&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cookie&display=swap" rel="stylesheet">

    <link href="fontawesome-free-5.12.1-web/css/all.min.css" rel="stylesheet">
    <link rel="icon" href="images/logoAI.png" sizes="" type="image/svg">
    <!--load all styles -->
    <link rel="stylesheet" href="css/style.css">
    <!-- animation -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- animation AOS-->

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/script.js"></script>


    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

</head>

<body data-spy="scroll" data-target=".navbar" data-offset="60">

    <?php include("./pages/menu.php"); ?>

    <section id="about" class="container-fluid">
        <h1 class=" animated bounce ">Développeur Web</h1>

        <div class=" heading">
            <h3>Yann Nicolle </h3>
            <a href="docs/CV-Yann_Nicolle-16-04-2020-.pdf" class="button1">Télécharger &nbsp;&nbsp; CV</a>
        </div>

    </section>
    <!---------------------------- Section A propos --------------------------->
    <section id="apropos">
        <div class="container">
            <div class="blue-divider "></div>
            <div class="heading " >
                <h2>présentation</h2>

            </div>
            <div class="row ">
                <div class="col-sm-8 text-presentation" data-aos="zoom-in-up">
                    <p> 
                        <span>Bonjour</span>, &nbsp;je vous souh data-aos="fade-down-right"ite la bienvenue dans mon portfolio !<br>
                        je m'appelle <span>Yann Nicolle</span> et je suis développeur web.&nbsp;
                        Après 17 ans dans le domaine informatique,&nbsp; j'ai souhaité donner un second souffle à ma
                        carrière.&nbsp; Attiré par le développement informatique, &nbsp; j'ai décidé de suivre une
                        formation de <span>développeur web</span>.&nbsp;
                        De nature curieux et passionné,&nbsp; cette formation a particulièrement répondu à mes attentes.
                        <br> J'ai passé un an à étudier une multitude de langages dont certains ont été approfondis
                        lors de projet et d'évaluations <br>
                        Je projette maintenant de travailler en tant que développeur <span></span>front-end ou back-end,
                        &nbsp;intégrer une équipe dans laquelle je pourrai à la fois apprendre et apporter mes idées et
                        mon expérience .

                    </p>

                </div>

                <div class="col-sm-4  apropos-picture" data-aos="zoom-in-up">
                    <img src="images/photo-cv2.jpg" alt="Photo-id-yann" class="rounded-circle">
                </div>
            </div>
        </div>
    </section>
    <!---------------------------- Section Compétences --------------------------->
    <section id="skills">
        <div class="blue-divider"></div>
        <div class="heading">
            <h2>Compétences</h2>
        </div>
        <div class="container">
            <div class="row skills-block">
                <div class="col-md-6 part-left">
                    <div class="competprincip">
                        <h4>Langages et outils</h4>
                        <div class="single-competence">
                            <div class="title">
                                <div class="iconHtmlCss"></div>
                                <div class="iconHtmlCss2"></div>
                                <!-- <div class="html-css">html css</div> -->
                            </div>
                            <div class="bar">
                                <div class="percentage htmlcss">
                                    <h6>HTML-CSS &nbsp &nbsp 85%</h6>
                                </div>
                            </div>
                        </div>
                        <div class="single-competence">
                            <div class="title">
                                <div class="iconBoostrap"></div>
                                <!-- <div class="bootstrap">Boostrap</div> -->
                            </div>
                            <div class="bar">
                                <div class="percentage boot">
                                    <h6>BOOTSTRAP &nbsp; &nbsp; 70%</h6>
                                </div>
                            </div>
                        </div>
                        <div class="single-competence">
                            <div class="title">
                                <div class="iconJavasc"></div>
                            </div>

                            <div class="bar">
                                <div class="percentage javasc">
                                    <h6>JAVASCRIPT &nbsp; &nbsp; 60%</h6>
                                </div>
                            </div>
                        </div>
                        <div class="single-competence">
                            <div class="title">
                                <div class="iconPhp"></div>
                            </div>
                            <div class="bar">
                                <div class="percentage php">
                                    <h6>PHP &nbsp; &nbsp; 65%</h6>
                                </div>
                            </div>
                        </div>
                        <div class="single-competence">
                            <div class="title">
                                <div class="iconSymfony"></div>
                            </div>
                            <div class="bar">
                                <div class="percentage symfony">
                                    <h6>Symfony &nbsp; &nbsp; 40%</h6>
                                </div>
                            </div>
                        </div>
                        <div class="single-competence">
                            <div class="title">
                                <div class="iconWordpress"></div>
                            </div>
                            <div class="bar">
                                <div class="percentage wordpress">
                                    <h6>WORDPRESS&nbsp; &nbsp; 50%</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="competinit">
                        <h4></i>Langages et outils initiation</h4>
                        <ul class="compItems">
                            <li>reactJs</li>
                            <li>git</li>
                            <li>Reactnative</li>
                            <li>python</li>
                            <li>Saas</li>
                            <li>MySQL</li>
                            <li>Prestashop</li>
                            <li>VueJs</li>
                            <li>Magento</li>
                            <li>Drupal</li>
                            <li>ExpressJs</li>
                            <li>AngularJS</li>
                            <li>VueJS</li>
                            <li>NodeJS</li>
                            <li>Webpack</li>
                            <li>npm</li>

                        </ul>
                    </div>
                </div>
                <div class="col-md-6 part-right">
                    <h4>Compétences</h4>
                    <ul>
                        <li>Front-end</li>
                        <li>back-end</li>
                        <li>gestion de projet</li>
                        <li>Web Marketing</li>
                    </ul>
                    <h4>Outils et services</h4>
                    <ul>
                        <li>PhpStorm, Visual studio code, Brackets </li>
                        <li>phpMyAdmin, MySQL Workbench </li>
                        <li>Git</li>
                        <li>Suite Adobe (photosop, Xd)</li>
                    </ul>
                    <div class="groupLangue">
                        <h4>Langues</h4>
                        <div class="language">

                            <div class="title">
                                <div class="Anglais">ANGLAIS</div>
                            </div>
                            <div class="bar">
                                <div class="percentage anglais">
                                    <h6> A2 &nbsp;&nbsp;37% </h6>
                                </div>
                            </div>
                            <div class="language">

                                <div class="title">
                                    <div class="llemand">ALLEMAND</div>
                                </div>
                                <div class="bar">
                                    <div class="percentage allemand">
                                        <h6>A2 &nbsp;&nbsp;30% </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!---------------------------- Section Expériences--------------------------->
    <section id="experience">

        <div class="container">
            <div class="white-divider">
            </div>
            <div class="heading">
                <h2>Expériences professionnelles</h2>
            </div>
            <ul class="timeline">
                <li>
                    <div class="timeline-badge"><span><i class="fa fa-briefcase"></i></span></div>
                    <div class="timeline-panel-container ">
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h3>Digital-Campus - Rennes</h3>
                                <h4>Développement d’un site internet</h4>
                                <p class="text-muted"><small><i class="far fa-clock"></i></small> 2019</p>

                            </div>
                            <div class="timeline-body">
                                <p>Réalisation d'un projet personnel dans le cadre de la formation
                                    Le projet : Site de partage de prêts d'objets entre amis développé en PHP.</p>
                                <p>Réalisation d'un cahier des charges (présentation projet, description
                                    graphique et ergonomique,
                                    charte graphique et maquettes, descriptions fonctionnelles et techniques).
                                </p>
                                <p>Développement Frontend : HTML, CSS, Bootstrap 4.</p>
                                <p>Développement backend PHP Symfony, twig.</p>
                                <p>Bases de données SQL , phpMyAdmin, Git</p>

                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="timeline-badge"><span><i class="fa fa-briefcase"></i></span></div>
                    <div class="timeline-panel-container-inverted">
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h3> ECONOCOM - EDF - Nantes</h3>
                                <h4>Appui pilotage service Desk </h4>
                                <p class="text-muted"><small><i class="far fa-clock"></i></small> 2015- 2018 </p>

                            </div>
                            <div class="timeline-body">
                                <p>Pilotage du service desk d'EDF region ouest sud-ouest</p>

                                <p>Surveillance opérationnelle de l’infogérant : Audit et contrôle de la
                                    prestation.
                                </p>
                                <p>Pilotage de la résolution des problèmes d’exploitation hors champs de
                                    l’infogérant.
                                </p>
                                <p>Traitement des réclamations et des relances clients.
                                </p>
                                <p>Participation au COTECHS hebdomadaire Contrôle des indicateurs du module.
                                </p>
                                <p>Synthèse des faits marquants (difficultés rencontrées, incidents majeurs).
                                </p>
                                <p>Extraction de données via requêtes SQL pour production de rapports, Tableaux
                                    de bord, statistiques (Bases Oracle) .
                                </p>

                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="timeline-badge"><span><i class="fa fa-briefcase"></i></span></div>
                    <div class="timeline-panel-container">
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h3>DECONOCOM – SNCF
                                    - Nantes</h3>
                                <h4>Superviseur Service Desk</h4>
                                <p class="text-muted"><small><i class="far fa-clock"></i></small> 2008- 2015 </p>

                            </div>
                            <div class="timeline-body">
                                <p>Mangement d'une équipe de 10 hotliners :
                                </p>

                                <p>Dispatching des tâches pour assurer un fonctionnement optimal du service.

                                    <p>Respect des objectifs quantitatifs et qualitatifs fixés contractuellement
                                        (SLA).
                                    </p>
                                    <p>Supervision des flux téléphonique adaptation des ressources en fonction de
                                        la volumétrie des appels .
                                    </p>
                                    <p>Mesurer et évaluer l’évolution des performances des collaborateurs –
                                        Scorcard.
                                    </p>
                                    <p>Traitement des réclamations clients.
                                    </p>
                                    <p>Revue et amélioration des procédures et consignes.
                                    </p>

                            </div>
                        </div>
                    </div>
                    </p>
                <li>
                    <div class="timeline-badge"><span><i class="fa fa-briefcase"></i></span></div>
                    <div class="timeline-panel-container-inverted">
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h3>ECONOCOM - SNCF
                                    - Nantes</h3>
                                <h4>Technicien Helpdesk</h4>
                                <p class="text-muted"><small><i class="far fa-clock"></i></small> 2004- 2008 </p>

                            </div>
                            <div class="timeline-body">
                                <p>Sevice desk dédié aux Empoyés SNCF</p>

                                <p>Prise d'appels et résolution incidents (niv 1et 2).

                                </p>
                                <p>Traitement des demandes utilisateurs.
                                </p>
                                <p>Gestion de parc.
                                </p>
                                <p>Participation à un projet de développement d'un site intranet en PHP.

                                </p>

                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="timeline-badge"><span><i class="fa fa-briefcase"></i></span></div>
                    <div class="timeline-panel-container">
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h3>ECONOCOM - EADS
                                    - Vélizy (78)</h3>
                                <h4>Technicien Helpdesk</h4>
                                <p class="text-muted"><small><i class="far fa-clock"></i></small> 2002 2004 </p>

                            </div>
                            <div class="timeline-body">
                                <p>Service desk interbne EADS</p>

                                <p>Prise d'appels et résolution incidents (niv 1et 2).

                                </p>
                                <p>Traitement des demandes utilisateurs.
                                </p>
                                <p>DCréation des comptes messagerie utilisateurs sur lotus notes.
                                </p>


                            </div>
                        </div>
                    </div>
                </li>
            </ul>

        </div>

    </section>
    <!---------------------------- Section Formation--------------------------->
    <section id="education">
        <div class="container">
            <div class="blue-divider"></div>
            <div class="heading">
                <h2>Formation</h2>
            </div>
            <div class="row">
                <div class="col-sm-6 education ">
                    <div class="education-block">
                        <h5>2019</h5>
                        <span><i class="fas fa-user-graduate"></i></span>
                        <a href="https://www.digital-campus.fr/formation/developpement-web" target="_blank">
                            <h3>Digital Campus Rennes</h3>
                        </a>
                        <h4>Développeur web digital </h4>
                        <div class="blue-divider"></div>
                        <div class="educationDescription">
                            <ul>
                                <li>Bases du web : HTML, CSS (Sass, Less, Bootstrap).</li>
                                <liBases du développement : Algorithmie, bases de données, SQL, Git.</p> <li>PHP : PHP orienté objet / PDO -MySQL, Framework Symfony./PHP</li>
                                    <li>JavaScript / ReactJS : jQuery, API, AJAX</li>
                                    <li>Application mobile : NodeJS, MongoDB, ExpressJS, React Native</li>
                                    <li>Gestion de projet, webmarketing, référencement.</l>
                            </ul>
                        </div>
                        <a href="https://www.digital-campus.fr/formation/developpement-web" target="_blank" class="button">Plus d'infos</a>
                    </div>
                </div>
                <div class="col-sm-6 education">
                    <div class="education-block">
                        <h5>2000</h5>
                        <span><i class="fas fa-user-graduate"></i></span>
                        <h3> AFPA de
                            Créteil</h3>
                        <h4>Technicien supérieur en informatique </h4>
                        <div class="blue-divider"></div>
                        <div class="educationDescription">
                            <ul>
                                <li>Administration système et réseau , Infrastructure
                                    réseaux TCP/IP</li>
                                <li>Gestion base de données et requêtes</li>
                                <li>Gestion incidents et problèmes installations et configurations de
                                    postes. </li>
                                <li>Stage de fin de formation de 3 mois - support utilisateur et gestion du réseau </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-sm-6 education">
                    <div class="education-block">
                        <h5>1991</h5>
                        <span><i class="fas fa-user-graduate"></i></span>
                        <h3>Université de Rennes</h3>
                        <h4>Licence de Biologie Cellulaire </h4>
                        <div class="blue-divider"></div>
                        <p>Biologie moléculaire - génétique et biochimie</p>
                        <p>Physiologie animale</p>
                    </div>
                </div>
                <div class="col-sm-6 education">
                    <div class="education-block">
                        <h5>1987</h5>
                        <span><i class="fas fa-user-graduate"></i></span>
                        <h3>lycée Brequigny Rennes</h3>
                        <h4>Bac sciences et technologie de Laboratoire </h4>
                        <div class="blue-divider"></div>
                        <p>Biologie : microbiologie, Biochimie</p>
                        <p>Chimie</p>

                    </div>
                </div>

            </div>

        </div>


    </section>
    <!---------------------------- Section Projets --------------------------->
    <section id="portfolio" class="text-center py-5">
        <!-- Container -->
        <div class="container">
            <div class="white-divider"></div>
            <!-- Section heading -->
            <div class="heading">
                <h2 class="h1-responsive font-weight-bold mb-5">Mes Réalisations</h2>
            </div>
            <!-- Section description -->
            <p class="grey-text w-responsive mx-auto mb-5">Quelques projets et réalisations que j'ai effectués pendant ma
                formation</p>

            <!-- Grid row -->
            <div class="row text-center">

                <!-- Grid column -->
                <div class="col-lg-4 col-md-12 mb-lg-0 mb-4">
                    <!--Featured image-->
                    <div class="view " data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                        <a href="./pages/projet-realhome.php" target="_blank">
                            <span class="title">Realhome</span>
                            <img src="images/screenshot-realhome3.jpg" class="img-fluid" alt="Projet wordpress">
                            <span class="bgk"></span>
                        </a>
                    </div>
                    <!--Excerpt-->
                    <div class="card-body pb-0">
                        <h4 class="font-weight-bold my-3">Realhome</h4>
                        <div class="spacer" data-type="group">
                            <span class="trait-before"></span>
                            <i class="fab fa-wordpress"></i>
                            <span class="trait-after"></span>
                        </div>
                        <p class="grey-text">Wordpress</p>

                    </div>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-lg-4 col-md-6 mb-md-0 mb-4">
                    <!--Featured image-->
                    <div class="view overlay rounded z-depth-1"data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                        <a href="./pages/projet-trouave.php" target="_blank">
                            <span class="title">Trouavé</span>
                            <img src="images/Screenshot-trouave.png"" class=" img-fluid" alt="Projet en php symfony">
                            <span class="bgk"></span>
                        </a>

                    </div>
                    <!--Excerpt-->
                    <div class="card-body pb-0">
                        <h4 class="font-weight-bold my-3">Traouvé</h4>
                        <div class="spacer" data-type="group">
                            <span class="trait-before"></span>
                            <i class="fab fa-symfony"></i>
                            <span class="trait-after"></span>
                        </div>
                        <p class="grey-text">PHP Symfony</p>

                    </div>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-lg-4 col-md-6">
                    <!--Featured image-->
                    <div class="view overlay rounded z-depth-1" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                        <a href="./pages/sharesamis.php" target="_blank">
                            <span class="title">Sharesamis</span>
                            <img src="images/sharesamis-projet.png" class="img-fluid" alt="Sample project image">
                            <span class="bgk"></span>
                        </a>
                    </div>
                    <!--Excerpt-->
                    <div class="card-body pb-0">
                        <h4 class="font-weight-bold my-3">Sharesamis</h4>
                        <div class="spacer" data-type="group">
                            <span class="trait-before"></span>
                            <i class="fab fa-symfony"></i>
                            <span class="trait-after"></span>
                        </div>
                        <p class="grey-text">PHP Symfony</p>

                    </div>
                </div>
                <!-- Grid column -->

            </div>
            <div class="row text-center">

                <!-- Grid column -->
                <div class="col-lg-4 col-md-12 mb-lg-0 mb-4">
                    <!--Featured image-->
                    <div class="view "data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                        <a href="http://voyage.yannicolle.fr/" target="_blank">
                            <span class="title">Travel Agency</span>
                            <img src="images/projet-boostrap-2.png" class="img-fluid" alt="Projet wordpress">
                            <span class="bgk"></span>
                        </a>
                    </div>
                    <!--Excerpt-->
                    <div class="card-body pb-0">
                        <h4 class="font-weight-bold my-3">Travel Agency</h4>
                        <div class="spacer" data-type="group">
                            <span class="trait-before"></span>
                            <i class="fab fa-css3-alt"></i>
                            <span class="trait-after"></span>
                        </div>
                        <p class="grey-text">CSS</p>

                    </div>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-lg-4 col-md-6 mb-md-0 mb-4">
                    <!--Featured image-->
                    <div class="view overlay rounded z-depth-1"data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                        <a href="http://projetjquery.yannicolle.fr/" target="_blank">
                            <span class="title">Projet Jquery</span>
                            <img src="images/projet-jquery.png"" class=" img-fluid" alt="Projet jquery">
                            <span class="bgk"></span>
                        </a>

                    </div>
                    <!--Excerpt-->
                    <div class="card-body pb-0">
                        <h4 class="font-weight-bold my-3">Projet Jquery</h4>
                        <div class="spacer" data-type="group">
                            <span class="trait-before"></span>
                            <img src="images/icons8-jquery-50.png" alt="">
                            <span class="trait-after"></span>
                        </div>
                        <p class="grey-text">Jquery</p>

                    </div>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-lg-4 col-md-6">
                    <!--Featured image-->
                    <div class="view overlay rounded z-depth-1" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                        <a href="http://jeuxjs.yannicolle.fr/" target="_blank">
                            <span class="title">jeux JS</span>
                            <img src="images/jeux-JS.png" class="img-fluid" alt="Sample project image">
                            <span class="bgk"></span>
                        </a>
                    </div>
                    <!--Excerpt-->
                    <div class="card-body pb-0">
                        <h4 class="font-weight-bold my-3">Jeux JS</h4>
                        <div class="spacer" data-type="group">
                            <span class="trait-before"></span>
                            <i class="fab fa-js-square"></i>
                            <span class="trait-after"></span>
                        </div>
                        <p class="grey-text">JavaScript</p>

                    </div>
                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row -->

        </div>
        <!-- Container -->

    </section>
    <!---------------------------- Section Contact --------------------------->
    <section id="contact">
        <div class="container">
            <div class="blue-divider"></div>
            <div class="heading">
                <h2>CONTACT</h2>
            </div>

            <div class="row">
                <div class="col-lg-4 col-lg-offset-1 mesCoordonnees">

                    <h4>Mes coordonnées</h4>

                    <div class="wrapper-coord">
                        <p><i class="fas fa-map-marker-alt"></i>Sainte Luce sur Loire - France</p>
                        <p><i class="fas fa-mobile-alt"></i> 06 73 80 65 27</p>
                        <p><i class="far fa-envelope"></i><a href="mailto:yann.nicolle@orange.fr">yann.nicolle@orange.fr</a></p>
                        <p><i class="fab fa-linkedin-in"></i><a href="https://linkedin.com/in/yannncl/" target="_blank">Linkedin</a></p>
                        <p><i class="fab fa-github"></i><a href="https://github.com/nicyann" target="_blank">Github</a></p>
                        <p></p>

                    </div>

                </div>
                <div class="col-lg-8 col-lg-offset-1 formcenter">
                    <h4>Laissez moi un message</h4>
                    <form id="contact-form" method="post" action="php/contact.php" role="form">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="firstname">Prénom <span>*</span></label>
                                <input id="firstname" type="text" name="firstname" class="form-control" placeholder="Votre prénom" value="<?php echo $array["firstname"];?>">
                                <p class="comments"></p>
                            </div>
                            <div class="col-md-6">
                                <label for="name">Nom <span>*</span></label>
                                <input id="name" type="text" name="name" class="form-control" placeholder="Votre Nom">
                                <p class="comments"></p>
                            </div>
                            <div class="col-md-6">
                                <label for="email">Email <span>*</span></label>
                                <input id="email" type="text" name="email" class="form-control" placeholder="Votre Email">
                                <p class="comments"></p>
                            </div>
                            <div class="col-md-6">
                                <label for="phone">Téléphone<span>*</span></label>
                                <input id="phone" type="tel" name="phone" class="form-control" placeholder="Votre Téléphone">
                                <p class="comments"></p>
                            </div>
                            <div class="col-md-12">
                                <label for="message">Message <span>*</span></label>
                                <textarea id="message" name="message" class="form-control" placeholder="Votre Message" rows="4"></textarea>
                                <p class="comments"></p>
                            </div>
                            <div class="col-md-12">
                                <p><strong>* Ces informations sont requises.</strong></p>
                            </div>
                            <div class="col-md-12">
                                <input type="submit" class="button1" value="Envoyer">
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>

    </section>

    <!---------------------------- Section Footer --------------------------->

    <?php include("./pages/footer.php"); ?>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>