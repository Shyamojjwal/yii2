//=================== Initialization ===================
jQuery(document).ready(function () {
    Metronic.init(); // init metronic core componets
    Layout.init(); // init layout
    Demo.init(); // init demo features 
});
//=================== End Initialization ===================

//=================== document ready functionality ===================

$(document).ready(function () {
    checkToggleSideProfile();
    $('#usermaster-dob').datepicker({
        format: 'yyyy/mm/dd',
        autoclose: true,
        endDate: '0d'
    });
});

//=================== end document ready functionality ===================

checkToggleSideProfile = function () {
    var hide;

    if ($.cookie('visible-sidebarPro') == 1) {
        $('#sidebar-profile').css('display', 'block');
        $('#sidebar-menu-option').css('display', 'block');
        hide = 0;
    } else if ($.cookie('visible-sidebarPro') === 0) {
        $('#sidebar-profile').css('display', 'none');
        $('#sidebar-menu-option').css('display', 'none');
        hide = 1;
    } else {
        if ($('.logo-default').css('display') === "none") {
            $('#sidebar-profile').hide();
            $('#sidebar-menu-option').hide();
            hide = 1;
        } else if ($('.logo-default').css('display') !== "none") {
            $('#sidebar-profile').show();
            $('#sidebar-menu-option').show();
            hide = 0;
        }
    }
    return hide;
};

toggleSideProfile = function () {
    if ($('#sidebar-profile').is(':visible') === true) {
        $('#sidebar-profile').hide();
        $('#sidebar-menu-option').hide();
        $.cookie('visible-sidebarPro', 0);
    } else {
        $('#sidebar-profile').show();
        $('#sidebar-menu-option').show();
        $.cookie('visible-sidebarPro', 1);
    }
};

//=================== change profile picture ==============
$('#usermaster-profileimg').change(function () {
    $('#cng-profile-pic').submit();
});

//$('#cng-profile-pic').submit(function (e) {
//    e.preventDefault();
//    var url = admin_url + 'profile/uploadproimg';
//    $.ajax({
//        url: url,
//        type: "POST",
//        data: new FormData(this),
//        contentType: false,
//        cache: false,
//        processData: false,
//        success: function (data) {
//            $("#targetLayer").html(data);
//        },
//        error: function () {}
//    });
//});
//=================== end change profile picture ==============