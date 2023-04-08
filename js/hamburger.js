$(document).ready(function() {
    $('.toggler').click(function(){
        $(this).toggleClass('toggled');
        $('.dropdownbg').toggleClass('shown');
    });
});