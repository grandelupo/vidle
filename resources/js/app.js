import './bootstrap';



$(document).ready(function() {
    $('.go-back').click(function() {
        $('.right-pane').addClass('hidden');
        $('.left-pane').removeClass('hidden').addClass('col-span-3');
        $('.go-back').addClass('hidden');
    });
});