<?php
use Model\Db\DbFactory;

 DbFactory::start();
$utilisateurs =\ORM::for_table('t_utilisateurs')->where('id_utilisateur','1')->find_one();
$titres =\ORM::for_table('t_titres_cv')->where('utilisateur_id','1')->find_one();

?>

<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Site CV <?= $utilisateurs->prenom?> <?= $utilisateurs->nom?>  </title>

    <!-- Bootstrap core CSS -->
    <link href=<?= $this->assetUrl("vendor/bootstrap/css/bootstrap.min.css");?> rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href=<?= $this->assetUrl("vendor/font-awesome/css/font-awesome.min.css");?> rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Reenie+Beanie" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href=<?= $this->assetUrl("css/agency.min.css");?> rel="stylesheet">

    <link rel="stylesheet" href=<?= $this->assetUrl("../assets/css/style.css");?>>
    <!-- Temporary navbar container fix -->
    <style>
    .navbar-toggler {
        z-index: 1;
    }

    @media (max-width: 576px) {
        nav > .container {
            width: 100%;
        }
    }
    </style>

</head>

<body id="page-top">

    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-toggleable-md navbar-inverse" id="mainNav">
        <div class="container">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="#page-top"><?= $utilisateurs->prenom?> <?= $utilisateurs->nom?> </a>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#competence">Competences </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#experience">Experiences </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#formation">Formations</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#portfolio">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#loisir">Loisirs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Header -->
    <header class="masthead">
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in"><?= $utilisateurs->prenom?> <?= $utilisateurs->nom?></div>
                <div class="intro-heading">INTEGRATEUR WEB JUNIOR</div>
                <a href=<?= $this->assetUrl("img/cv_annissa.pdf");?> class="btn btn-xl" download>Telecharger</a>
            </div>

        </div>

    </header>


    <?=$this->section('competence'); ?>

    <?=$this->section('experience'); ?>

    <?=$this->section('formation'); ?>

    <?=$this->section('portfolio'); ?>

    <?=$this->section('loisir'); ?>

    <?=$this->section('contact'); ?>



    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; Your Website 2017</span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li class="list-inline-item">
                            <a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li class="list-inline-item">
                            <a href="#">Privacy Policy</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Terms of Use</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="../../../../admin/login.php">Espace admin</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- Portfolio Modals -->





    <!-- Bootstrap core JavaScript -->
    <script src=<?= $this->assetUrl("vendor/jquery/jquery.min.js");?>></script>
    <script src=<?= $this->assetUrl("vendor/tether/tether.min.js");?>></script>
    <script src=<?= $this->assetUrl("vendor/bootstrap/js/bootstrap.min.js");?>></script>

    <!-- Plugin JavaScript -->
    <script src=<?= $this->assetUrl("vendor/jquery-easing/jquery.easing.min.js");?>></script>

    <!-- Contact form JavaScript -->
    <script src=<?= $this->assetUrl("js/jqBootstrapValidation.js");?>></script>
    <script src=<?= $this->assetUrl("js/contact_me.js");?>></script>

    <!-- Custom scripts for this template -->
    <script src=<?= $this->assetUrl("js/agency.min.js");?>></script>

</body>

</html>
