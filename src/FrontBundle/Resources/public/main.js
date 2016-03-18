$(document).ready(function(){

   var gamme = $('#vehicule_gamme');
    gamme.on('change', function () {
        addColorGamme( $( 'option:selected', this ).text() );
    });
    addColorGamme( $( 'option:selected', gamme ).text() );

    var idUser = $("#reservation_user");
    var idVehicule = $("#reservation_voiture");

    $('#surclassement').on('click', function () {
        $.get(
            Routing.generate('user_is_surclassable', {vehicule: idVehicule.val(), user: idUser.val()}),

            function (data) {

                if (data.bool){

                    alert(data.user +  'a le droit d’être surclassé sur les TieFighters')

                }else{

                    alert(data.user + ' ne peut être surclassé sur les TieFighters et doit donc rester sur les XWing')
                }
            }
        );
    });

});


function addColorGamme( gamme )
{
    var  vahiculeColor = $('#vehicule_color');
    var div = vahiculeColor.parent('div');
    if( 'TieFighter' != gamme ) {
        vahiculeColor.val('');
        div.hide();
    }else {
        div.show();
    }

}