<?php require '../connexion/connexion.php' ?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Test connexion</title>
        <link rel="stylesheet" href="/github/siteCV_annissa/admin/css/style_annissa.css">
    </head>
    <body>
<?php
$sql =$pdoCV->query("SELECT * FROM t_utilisateurs WHERE id_utilisateur ='2'");
$ligne =$sql->fetch();//va chercher sur une ligne!

 ?>
 <p>coucou ! <?php echo $ligne['prenom'].''.$ligne['nom']; ?></p>
    </body>
</html>
