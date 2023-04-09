$(document).ready(function() {
    $('.toggler').onClick(function(){
        $(this).toggleClass('toggled');
        $('.dropdownbg').toggleClass('shown');
    });
});