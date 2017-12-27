/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//attendre que toute la page soit chargée


$(document).ready(function () {

    $("#gt_carousel").carousel({
        interval: 1500,
        pause: false
    });

//traitement directe d ela liste deroulante
$('#id_gt_type_gateau').change(function(){
    //élement appartenant àselect
    //on releve l'attribut name de la balise select
    var parametre = $(this).attr('name');
    //recupere la valeur du select
    var val = $(this).val();
    //recreer l'url
    var refresh='index.php?'+ parametre +'=' + val +'&choix_type=1';
    window.location.href=refresh;
});

// supprimer le bouton choisir
$("#choix_type").remove();
//exercices
    $("#balise3").hide();
    $("#balise1")
            .on(
            'mouseover', function () {

                $("#balise4").css({
                    'color': 'red',
                    'font-weight': 'bold'

                }),
                        $("#balise3").show();
                }

            )
                    .on(
                    'mouseout',function(){
                        
                $("#balise4").css({
                    'color': 'blue',
                    'font-weight': 'bold'
                    }),
                            $("#balise3").hide();
                }
            );


    
    $("#lien1,#lien2,#lien3").hide(); // pour cacher hider
    $("#lien4").click(function () {
        $("#lien1").show();
        $("#lien1").hover(function () {
            $("#lien2,#lien3").show();
        });
        $("#lien2").hover(function () {
            $("#lien3,#lien4").hide();
        });

    });
    $("#coucou").hide();
    $("#clic_couleur").click(function () {
        $(".clic").css("color", "red");
        $("#coucou").show();
        $("#ajoutClasse").addClass("txtBleu");
    });
}); 