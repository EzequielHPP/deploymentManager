

$(document).ready(function(){
    $('.js-toggle-sidemenu').click(function(e){
        e.preventDefault();

        $(this).toggleClass('is-active');
        $('#wrapper').toggleClass('toggled');
    });

    $('.js-create-website').click( function (e) {
        e.preventDefault();

        $('#mainmodal').modal('show');
    });

    $('.showmodal').click( function (e) {
        e.preventDefault();

        $('#mainmodal').modal('show');
    });
});