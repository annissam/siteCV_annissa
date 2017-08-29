<?php require '../connexion/connexion.php' ?>

<?php
//gestion des contenus
//insertion d'une realisation
if(isset($_POST['titre_r'])){ // si onn recupere une nouvelle experience
    if($_POST['titre_r']!=''){//si compétencde n'est pas vide
        $titre = addslashes($_POST['titre_r']);
        $sous_titre = addslashes($_POST['sous_titre_r']);
        $date = addslashes($_POST['dates_r']);
        $description = addslashes($_POST['description_r']);
        $image = addslashes($_POST['image_r']);
        $pdoCV->exec("INSERT INTO t_realisations VALUES (NULL,'$titre','$sous_titre', '$date','$description','$image' '1') ");//mettre $id_utilisateur quand on l'aura en variable de Session
            header("location: realisations.php");
            exit();

            }//ferme le if
        }// ferme le if isset
 //suppression d'une realisation
 if(isset($_GET['id_realisation'])){
     $efface =$_GET['id_realisation'];
     $sql ="DELETE FROM t_realisations WHERE id_realisation = '$efface'";
     $pdoCV-> query($sql);//ou on peut avec exex
     header("location :../admin/realisations.php");
 }
 ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <?php
    $sql =$pdoCV->query("SELECT * FROM t_utilisateurs WHERE id_utilisateur ='1'");
    $ligne_utilisateur =$sql->fetch();//va chercher sur une ligne!
     ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin<?php echo $ligne_utilisateur['prenom'].''.$ligne_utilisateur['nom']; ?></title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <script src="//cdn.ckeditor.com/4.7.1/basic/ckeditor.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">SB Admin</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu message-dropdown">
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong><?php echo $ligne_utilisateur['prenom'].''.$ligne_utilisateur['nom']; ?></strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong><?php echo $ligne_utilisateur['prenom'].''.$ligne_utilisateur['nom']; ?></strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong><?php echo $ligne_utilisateur['prenom'].''.$ligne_utilisateur['nom']; ?></strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-footer">
                            <a href="#">Read All New Messages</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu alert-dropdown">
                        <li>
                            <a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-primary">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-success">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-info">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-warning">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-danger">Alert Badge</span></a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">View All</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>  <?php echo $ligne_utilisateur['prenom']; ?><b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="index.php"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="login.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="index.php"><i class="fa fa-fw fa-dashboard"></i>  <?php echo $ligne_utilisateur['prenom']; ?></a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Insertion <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="competences.php">Competences</a>
                            </li>
                            <li>
                                <a href="experiences.php">Experience</a>
                            </li>
                            <li>
                                <a href="formations.php">Formations</a>
                            </li>
                            <li>
                                <a href="loisirs.php">Loisirs</a>
                            </li>
                            <li>
                                <a href="realisations.php">Realisations</a>
                            </li>

                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <?php
                        $sql =$pdoCV->query("SELECT * FROM t_titres_cv WHERE utilisateur_id ='1'");
                        $ligne_titre =$sql->fetch();//va chercher sur une ligne!
                        ?>
                        <small></small>
                        <h1 class="page-header">
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i><?php echo $ligne_titre['accroche']; ?>
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="alert alert-info alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <i class="fa fa-info-circle"></i>  <strong>Like SB Admin?</strong> Try out <a href="http://startbootstrap.com/template-overviews/sb-admin-2" class="alert-link">SB Admin 2</a> for additional features!
                        </div>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-3 col-md-6">


                        </div>
                    </div>
                        <header>
                    <div class="col-lg-3 col-md-6">
                        <div class="">
                         </header>
                             <!--/HEADER -->
                             <!--SECTION-1 -->
                             <section>
                                 <div class="row">
                                     <?php
                                     $sql =$pdoCV ->prepare("SELECT * FROM t_realisations WHERE utilisateur_id ='1' "); // prépar la requete
                                     $sql ->execute();//execute-la
                                     $nbr_realisations =$sql-> rowCount();
                                     ?>
                                 </div>
                             </section>
                            <div class="col-lg-12 page-header text-center">
                                <h2>REALISATIONS</h2>
                                <p>Il y a <?php echo $nbr_realisations; ?> realisations dans la table pour <?php echo $ligne_utilisateur['pseudo']; ?></p>
                            </div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12 page-header text-center">
                                     <table class="table table-striped">
                                         <tbody>
                                             <tr>
                                                 <th scope="col">Titre de la realisation</th>
                                                 <th scope="col">Sous titre</th>
                                                 <th scope="col">Date </th>
                                                 <th scope="col">Description</th>
                                                 <th scope="col">Modifier</th>
                                                 <th scope="col">Supprimer</th>
                                             </tr>

                                             <tr>
                                                 <?php while($ligne_realisation = $sql->fetch()) { ?>
                                                 <td><?php echo $ligne_realisation['titre_r']; ?></td>
                                                 <td><?php echo $ligne_realisation['sous_titre_r']; ?></td>
                                                 <td><?php echo $ligne_realisation['dates_r']; ?></td>
                                                 <td><?php echo $ligne_realisation['description_r']; ?></td>
                                                 <td><a href="modif_realisation.php?id_realisation=<?php echo $ligne_realisation['id_realisation']; ?>"><span class="glyphicon glyphicon-pencil"></span></a></td>
                                                 <td><a href="realisations.php?id_realisation=<?php echo $ligne_realisation['id_realisation']; ?>"><span class="glyphicon glyphicon-trash"></span></a></td>
                                             </tr>
                                             <?php } ?>
                                         </tbody>
                                     </table>
                                     <!-- form modification d'une realisation -->
                                     <form action="realisations.php" name="titre_r" method="post" class="text-center">
                                         <div class="form-group">
                                             <label for="titre_r">realisation</label>
                                             <input type="text" name="titre_r" class="form-control" id="titre_r" placeholder="inserez une formation" >

                                             <label for="sous_titre_r">Sous-Titre</label>
                                             <input type="text" name="sous_titre_r" class="form-control" id="sous_titre_r" placeholder="inserez un sous-titre" >

                                             <label for="dates_r">Date</label>
                                             <input type="date" name="dates_r" class="form-control" id="dates_r" >

                                             <label for="description_r">Desription</label>
                                             <textarea  name="description_r" class="form-control" id="description_r"></textarea>
                                             <script>CKEDITOR.replace( 'description_r' );</script>

                                         </div>
                                         <input type="submit" name="realisation" value="Envoyez" class="btn btn-primary btn-ig" style="margin-top:10px;">
                                    </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>


                <!-- /.row -->

    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <!-- <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script> -->

    <script src="js/annissa.js"></script>
</body>

</html>
