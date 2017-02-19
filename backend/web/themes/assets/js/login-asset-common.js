$(document).ready(function () {
    // init background slide images
    $.backstretch([
        admin_url + "themes/assets/images/background-img/bg_1.jpg",
        admin_url + "themes/assets/images/background-img/bg_2.jpg",
        admin_url + "themes/assets/images/background-img/bg_3.jpg",
        admin_url + "themes/assets/images/background-img/bg_4.jpg"
    ], {
        fade: 1000,
        duration: 8000
    }
    );
});