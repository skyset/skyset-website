$(document).ready(function() {
    $('.toggler').click(function(){
        $(this).toggleClass('toggled');
        $('nav').toggleClass('shown');
    });
});