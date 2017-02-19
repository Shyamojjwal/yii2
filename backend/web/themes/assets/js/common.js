$("body").niceScroll();
$(document).ready(function () {
    $('#yii-debug-toolbar').remove();
    $('.title-tooltip').tooltip();
    setTimeout(function () {
        $('.bg_load').fadeOut('slow');
    }, 1000);
});
