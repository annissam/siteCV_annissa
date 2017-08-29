<?php $this->layout('layout', ['title' => 'Site Cv d\'Annissa Mekiri']) ?>



<!-- Competences -->
<?php $this->start('competence'); ?>
    <section id="competence" class="inc">

        <div class="col-lg-12 text-center">
            <div class="postit">
              "Site CV en cours de construction."
              <br />
              "A Tres Vite !"
            </div>
            <h2 class="section-heading">Competences</h2>
            <h3 class="section-subheading text-muted">Mes competence informatique.</h3>
        </div>
    <div class="row text-center" id="shadows">
                    <div class="col-md-4 col-sm-6 portfolio-item">
                        <img src="public/img/competence/html5.png" class="img-responsive shadows fadeIn">
                        <p></p>
                        <div class="portfolio-caption">
                            <h4 class="service-heading">HTML</h4>
                            <div class="progress">
                                <div class="progress-bar progress-bar-danger progress-bar-striped active" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 65%">65%
                                    <span class="sr-only">65% Complete</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 portfolio-item">
                        <img src="img/competence/css3.png" class="img-responsive shadows fadeIn">
                        <div class="portfolio-caption">
                            <h4 class="service-heading">CSS3</h4>
                            <div class="progress">
                                <div class="progress-bar progress-bar-danger progress-bar-striped active" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 60%">60%
                                  <span class="sr-only">60% Complete</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 portfolio-item">
                        <img src="portfolio/img/logos/spk.png" class="img-responsive shadows fadeIn" >
                        <div class="portfolio-caption">
                            <h4 class="service-heading">Wordpress</h4>
                            <div class="progress">
                                <div class="progress-bar progress-bar-danger progress-bar-striped active" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 80%">80%
                                    <span class="sr-only">80% Complete</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 portfolio-item">
                        <img src="portfolio/img/logos/commission.png" class="img-responsive shadows fadeIn">
                        <div class="portfolio-caption">
                            <h4 class="service-heading">SQL</h4>
                            <div class="progress">
                                <div class="progress-bar progress-bar-danger progress-bar-striped active" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 55%">55%
                                    <span class="sr-only">55% Complete</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 portfolio-item">
                        <img src="portfolio/img/logos/manage.png" class="img-responsive shadows fadeIn" >
                        <div class="portfolio-caption">
                            <h4 class="service-heading">Bootstrap</h4>
                            <div class="progress">
                                <div class="progress-bar progress-bar-danger progress-bar-striped active" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 50%">50%
                                    <span class="sr-only">50% Complete</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 portfolio-item">
                        <img src="../public/img/competence/photoshop.png" class="img-responsive shadows fadeIn" >
                        <div class="portfolio-caption">
                            <h4 class="service-heading">Photoshop</h4>
                            <div class="progress">
                                <div class="progress-bar progress-bar-danger progress-bar-striped active" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="30" style="width: 40%">40%
                                    <span class="sr-only">40% Complete</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
   </section>

</section>
<?php $this->stop('competence'); ?>

<?php $this->start('experience'); ?>
<!--Experience-->
<section id="experience">

    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Experiences</h2>
                <h3 class="section-subheading text-muted">Mes experiences durant ces dernieres années !.</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <ul class="timeline">
                    <li>
                        <div class="timeline-image">
                            <img class="rounded-circle img-fluid" src=<?= $this->assetUrl("img/about/1.jpg");?> alt="">
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Intégratrice et Developpeuse Web Junior</h4>
                                <h5 class="subheading">Depuis 2017</h>
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted">LEPOLES /Pierrefitte-sur-seine</p>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <img class="rounded-circle img-fluid" src=<?= $this->assetUrl("img/about/2.jpg");?> alt="">
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Agent d'accueil</h4>
                                <h5 class="subheading">Aout 2016 à Janvier 2017</h5>
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted">Pôle emploi / Pierrefitte-sur-seine</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image">
                            <img class="rounded-circle img-fluid" src=<?= $this->assetUrl("img/about/3.jpg");?> alt="">
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Conseillère vendeuse</h4>
                                <h5 class="subheading">Mars 2016 - Juin 2016</h5>
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted">C&A /Boulevard Haussmann, Paris</p>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <img class="rounded-circle img-fluid" src=<?= $this->assetUrl("img/about/4.jpg");?> alt="">
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Assistante photographe (stagiaire) </h4>
                                <h5 class="subheading"> Février 2013 - Mai 2013</h5>
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted">Radio France / Paris / Février </p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image">
                            <img class="rounded-circle img-fluid" src=<?= $this->assetUrl("img/about/5.jpg");?> alt="">
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Hotesse d'Accueil</h4>
                                <h5 class="subheading">2010 - 2012</h>
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted">Parc des Princes - Stade de France La plaine Saint Denis /
Académie Fratellini La plaine Saint Denis / Télé-thon – La Plaine Saint Denis</p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<?php $this->stop('experience'); ?>



<!-- Formation-->
<?php $this->start('formation'); ?>
    <section id="formation">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Formations</h2>
                <h3 class="section-subheading text-muted">Les formations parcouru...</h3>
            </div>
        </div>
        <div class="row">
            <?php foreach ($formations as $formation) : ?>
            <div class="col-sm-4">
                <div class="team-member">
                    <img class="mx-auto rounded-circle" src="<?= $this->assetUrl('img/'.$formation->image_f);?>" alt="">
                    <!-- front\template\public\assets\img\wf3.png
                    front\template\app\Views\default\index.php -->
                    <h4><?= $formation->titre_f?></h4>
                    <p class="text-muted"><?= $formation->sous_titre_f?></p>
                    <p class="text-muted"><?= $formation->dates_f?></p>
                    <p class="text-muted"><?= $formation->description_f?></p>
                </div>
            </div>
            <?php endforeach ;?>
        </div>
        <div class="row">
        </div>
    </div>
</section>
<?php $this->stop('formation'); ?>

<!-- Realisation -->

<?php $this->start('portfolio'); ?>

<section class="bg-faded" id="portfolio">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Portfolio</h2>
                <h3 class="section-subheading text-muted">Quelque realisation...</h3>
            </div>
        </div>
        <div class="row">
            <?php foreach ($realisations as $realisation) : ?>
            <div class="col-md-4 col-sm-6 portfolio-item">
                <div class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fa fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img class="img-fluid" src="<?= $this->assetUrl('img/portfolio/'.$realisation->description_r);?>"alt="">
                </div>
                <div class="portfolio-caption">
                    <h4><?= $realisation->titre_r ?></h4>
                    <p class="text-muted"><?= $realisation->sous_titre_r?></p>
                    <p class="text-muted"><?= $realisation->dates_r?></p>

                </div>
            </div>
        <?php endforeach ;?>
        </div>

        </div>
</section>
<!-- Modal 1 -->
<div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Nom de Projet</h2>
                            <p class="item-intro text-muted"></p>
                            <img class="img-fluid d-block mx-auto" src="<?= $this->assetUrl('img/portfolio/'.$realisation->description_r);?>" alt="">
                            </ul>
                            <button class="btn btn-primary" data-dismiss="modal" type="button"><i class="fa fa-times"></i> Fermers</button>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->stop('portfolio'); ?>




<!--Loisirs-->
<?php $this->start('loisir'); ?>
<section id="loisir">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Loisirs </h2>
                <h3 class="section-subheading text-muted">Mes loisirs de tout les jours hors travail...</h3>
            </div>
        </div>
        <div class="row text-center">
                <?php foreach ($loisirs as $loisir) : ?>
            <div class="col-md-4">
                <span class="fa-stack fa-4x">
                    <i class="fa fa-circle fa-stack-2x text-primary"></i>
                    <i class="fa fa-heart fa-stack-1x fa-inverse"></i>
                </span>
                <h4 class="service-heading"><?= $loisir->loisir?></h4>
                <p class="text-muted"></p>
            </div>

        <?php endforeach ;?>
        </div>
    </div>
</section>
<?php $this->stop('loisir'); ?>




<!-- Contact -->
<?php $this->start('contact'); ?>

<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Contactez-moi !</h2>
                <h3 class="section-subheading text-muted"></h3>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <form id="contactForm" name="sentMessage" novalidate>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control" id="name" type="text" placeholder="Votre nom *" required data-validation-required-message="Please enter your name.">
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input class="form-control" id="email" type="email" placeholder="Votre email *" required data-validation-required-message="Please enter your email address.">
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input class="form-control" id="phone" type="tel" placeholder="Votre telephone *" required data-validation-required-message="Please enter your phone number.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <textarea class="form-control" id="message" placeholder=" Votre message*" required data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-lg-12 text-center">
                            <div id="success"></div>
                            <button class="btn btn-xl" type="submit">Envoyez votre message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<?php $this->stop('contact'); ?>
