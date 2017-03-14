

$(document).ready(function(){
    $('.js-toggle-sidemenu').click(function(e){
        e.preventDefault();

        $(this).toggleClass('is-active');
        $('#wrapper').toggleClass('toggled');
    });
});