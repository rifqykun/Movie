$(document).ready(function(){
    $('.addmovie').click(function(){
        $('#box, #modal-insert').fadeIn();
    });

    $('.cancel').click(function(){
        $('#box, #modal-insert').fadeOut();
    });
});