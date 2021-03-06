<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projet Realhome</title>

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

    <link href="../fontawesome-free-5.12.1-web/css/all.min.css" rel="stylesheet">
    <!--load all styles -->
    <link rel="stylesheet" href="../css/style.css">
    <!-- <script src="../js/jquery-3.4.1.min.js"></script>
    <script src="../js/script.js"></script> -->
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="60">

<?php include("./menu2.php"); ?>



    <section id="prrojetrealhome">
        <div class="headerTitle">
            <div class="wrapper">
                <h2>Trouavé</h2>
                <p><span>Formation - Evaluation module PHP/symfony</span>  Application web</p>
                <p class="titelDesctiption"></p>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row projet-content wrapper">
                <div class="col-lg-6 left-wrapper">
                    <h2>Le Projet</h2>
                    <p>Réaliser lun site d'objets perdus en Bretagne <br>

                    </p>
                    <h2>Les objectifs</h2>
                    <p>Réalisation d'une application web ayant pour but de mettre en relation des personnes ayant trouvé / perdu des objets dans la région Bretagne.<br><br>
L'application devra donc permettre de : <br>
- Poster un avis de recherche si l'on perd un objet<br>
- Poster également si l'on trouve un objet pour retrouver son propriétaire<br>
- Rechercher un objet en effectuant notamment des filtres par département et par catégorie<br>
- Permettre d'administrer les données du site avec un compte adminitrateur.<br><br>
Les objets seront organisés par catégories (Clés, jouets, animaux...) et il faudrait pouvoir ajouter des catégories si nécessaire. De plus, les catégories devront également être identifiables par un icone et un code couleur. <br><br>
Les internautes pourront renseigner les informations suivantes concernant les objets trouvés ou perdus : Catégories, date, lieu, image, titre, descriotion. <br><br>
Concernant la mise en relation des internautes, il pourront commenter les différentes annonces postées mais également s'envoyer des messages privés afin de pouvoir valider qu'il s'agit bien du propriétaire d'un objet.

</p>
                    <h2>Outils et langages</h2>
                    <p>HTML5 CSS3 PHP, Synfony. <br>
                        PhpStorm</p>

                </div>
                <div class="col-lg-6 text-center right-wrapper">
                    <img src="../images/trouave-logo.png" alt="site realhome">
                </div>
            </div>

            <div class=" bloc-pitures">
                <div class="row">
                    <div class="col-md-6 bloc-picture">
                        <div class="thumbnail">
                            <img class="col-md-6" src="../images/trouave-img-1.png" alt="image-1  projet trouave">
                        </div>
                    </div>
                    <div class="col-md-6 bloc-picture">
                        <div class="thumbnail">
                            <img class="col-md-6 " src="../images/trouave-img-2.png" alt="image-2  projet trouave"">
                        </div>
                    </div>
                </div>
              

            </div>



            <?php include("./footer.php"); ?>


    </section>
</body>

</html>