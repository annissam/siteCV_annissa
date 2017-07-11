<?php require '../connexion/connexion.php' ?>
<?php
session_start(); // a mettre dans toute les pages de l'admin ; SESSION et authentification

$msg_authentification_erreur=''; // on initialise la variable en cas d'erreur

if(isset($_POST['connexion'])){ // on envoie le form avec le name du bouton(on a cliqué sur le bouton)
    $email= addslashes($_POST['email']);
    $mdp = addslashes($_POST['mdp']);

    $sql =$pdoCV->prepare(" SELECT * FROM t_utilisateurs WHERE email='$email' AND mdp='$mdp'");
    $sql->execute();
    $nbr_utilisateur = $sql->rowCount();//on compte s'il y est, le compte répond 1 s'il y est

    if($nbr_utilisateur ==0){//il n'y est pas!
        $msg_authentification_erreur="Erreur d'authentification ! ";
    }else{//on le trouve il est inscrit !
        $ligne_utilisateur =$sql->fetch();// on retrouve ses infos

        $_SESSION['connexion']='connecté';
        $_SESSION['id_utilisateur']=$ligne_utilisateur['id_utilisateur'];
        $_SESSION['prenom']=$ligne_utilisateur['prenom'];
        $_SESSION['nom']=$ligne_utilisateur['nom'];

        header('location: ../admin/index.php');
    }
}//ferme if isset
 ?>

 <!DOCTYPE html>
 <html lang="en">
   <head>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title></title>

     <!-- Bootstrap -->
     <link rel="stylesheet" href="../admin/css/login.css">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

     <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
     <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
     <!--[if lt IE 9]>
       <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
       <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
     <![endif]-->
   </head>
   <body>
       <div class="container">
           <div class="row">
               <div class="col-md-6 col-md-offset-3">
                   <div class="panel panel-login">
                       <div class="panel-heading">
                           <div class="row">
                               <div class="col-xs-6">
                                   <a href="index.php" class="active" id="login-form-link">Login</a>
                               </div>
                               <div class="col-xs-6">
                                   <a href="#" id="register-form-link">Register</a>
                               </div>
                           </div>
                           <hr>
                       </div>
                       <div class="panel-body">
                           <div class="row">
                               <div class="col-lg-12">
                                   <form id="login-form" action="login.php" method="post" role="form" style="display: block;">
                                       <div class="form-group">
                                           <input type="text" name="email" tabindex="1" class="form-control" placeholder="Username">
                                       </div>
                                       <div class="form-group">
                                           <input type="password" name="mdp" tabindex="2" class="form-control" placeholder="Password">
                                       </div>
                                       <div class="form-group text-center">
                                           <input type="checkbox" tabindex="3" class="" name="remember" id="remember">
                                           <label for="remember"> Remember Me</label>
                                       </div>
                                       <div class="form-group">
                                           <div class="row">
                                               <div class="col-sm-6 col-sm-offset-3">
                                                   <input type="submit" name="connexion" tabindex="4" class="form-control btn btn-login" >
                                               </div>
                                           </div>
                                       </div>
                                       <div class="form-group">
                                           <div class="row">
                                               <div class="col-lg-12">
                                                   <div class="text-center">
                                                       <a href="https://phpoll.com/recover" tabindex="5" class="forgot-password">Forgot Password?</a>
                                                   </div>
                                               </div>
                                           </div>
                                       </div>
                                   </form>
                                   <form action="login.php" method="post" role="form" style="display: none;">

                                       <div class="form-group">
                                           <input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Adresse email" value="">
                                       </div>
                                       <div class="form-group">
                                           <input type="password" name="mdp" id="mdp" tabindex="2" class="form-control" placeholder="Mot de passe">
                                       </div>
                                       <div class="form-group">
                                           <div class="row">
                                               <div class="col-sm-6 col-sm-offset-3">
                                                   <input type="submit" name="connexion" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register Now">
                                               </div>
                                           </div>
                                       </div>
                                   </form>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>

     <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
     <script src="login.js"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
     <!-- Include all compiled plugins (below), or include individual files as needed -->
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
   </body>
 </html>
<!-- <!DOCTYPE html>
<html lang="fr">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="../admin/css/login.css">

    <title>Admin :</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="panel panel-login">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-6">
                                    <a href="index.php" class="active" id="login-form-link">Login</a>
                                </div>
                                <div class="col-xs-6">
                                    <a href="#" id="register-form-link">Register</a>
                                </div>
                            </div>
                            <hr>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form id="login-form" action="login.php" method="post" role="form" style="display: block;">
                                        <div class="form-group">
                                            <input type="text" name="email" tabindex="1" class="form-control" placeholder="Username">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="mdp" tabindex="2" class="form-control" placeholder="Password">
                                        </div>
                                        <div class="form-group text-center">
                                            <input type="checkbox" tabindex="3" class="" name="remember" id="remember">
                                            <label for="remember"> Remember Me</label>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-6 col-sm-offset-3">
                                                    <input type="submit" name="connexion" tabindex="4" class="form-control btn btn-login" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="text-center">
                                                        <a href="https://phpoll.com/recover" tabindex="5" class="forgot-password">Forgot Password?</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <form action="login.php" method="post" role="form" style="display: none;">

                                        <div class="form-group">
                                            <input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Adresse email" value="">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="mdp" id="mdp" tabindex="2" class="form-control" placeholder="Mot de passe">
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-6 col-sm-offset-3">
                                                    <input type="submit" name="connexion" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register Now">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="login.js"></script>
    </body>
</html> -->
