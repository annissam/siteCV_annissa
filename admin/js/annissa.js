//JavaScript Document annissa

// $(function(){
//     console.log("test");
// });

$(function(){//Verifier que le changement de la page se fait correcteurment
    //on met un écouteur d'evenement, au click sur les balise pour cela  il faut ajouter une class. supr sur la balise a a
    $('.supr').on("click",function(evenement){
    evenement.preventDefault();//cela empeche le compotement par defaut de a
    if(confirm('Voulez -vous effacer cette info?')){// on  verifie si l'utilisateur  a cliqué, oui? on fait le contenue du if; non? on fait rien

        // console.log("coucou");
        var lien=$(this).attr('href');
        window.location.href=lien;
        }

    });
});
