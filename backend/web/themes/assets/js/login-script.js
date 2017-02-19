//============ login function ==================
$('#loginform').submit(function (e) {
    e.preventDefault();

    $('#help-block').html('');
    $('#help-block').parent('div').addClass('display-hide');
    var _this = $(this);
    var url = admin_url + 'site/login';
    var data = _this.serialize();
    if ($('#loginform-username').val() === '' || $('#loginform-password').val() == '') {
        $('#help-block').html('Please Provide Your Username and Password');
        $('#help-block').parent('div').removeClass('display-hide');
    } else {
        $('#login-progress-loader').parent('button').attr('disabled',true); 
        $('#login-progress-loader').show();
        $.post(url, data,
                function (resp) {
                    console.log(resp);
                    if (resp.flag === true) {
                        notifySuccess(false, true, resp.msg, 'top center', 5000);
                        setTimeout(function () {
                            window.location.href = resp.redirectUrl;
                        }, 2000);
                    } else {
                        $('#login-progress-loader').hide();
                        $('#login-progress-loader').parent('button').attr('disabled',false); 
                        $('#help-block').html(resp.msg);
                        $('#help-block').parent('div').removeClass('display-hide');
                    }
                }, 'json');
    }
});
//============ end login function ==================


