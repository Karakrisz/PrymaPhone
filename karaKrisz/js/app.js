$(document).ready(run);

function run() {
    var SCROLL_TIME = 1000;

    if (window.location.href.search('single') == -1 && window.location.href.search('allmobile') == -1 && window.location.href.search('administ') == -1) {
        $(".scroll").click(menuClick);
    }

    function menuClick(event) {
        event.preventDefault();
        var id = '#' + $(this).attr("href").replace(/\.\/#/, '');
        $("html, body").animate({
            "scrollTop": $(id).offset().top - 100
        }, SCROLL_TIME);

        /******************** requested amendments **********************/

        let sideMenu = $(".side-menu");
        sideMenu.removeClass("side-menu-active");
        $("body").removeClass("overflow-hidden");
        $("#close_side_menu").css("display", "none");
    }
}

$(window).on("load", function () {
    $('#largeModal').modal('show');
});


var tempData = localStorage.getItem('myTempDataKey');
var media = window.matchMedia("(max-width: 767px)");

if (tempData !== "cookieAccepted") {
    $('#CookieModal').modal('show');
    $('#cookie-settings').fadeIn();
    $('#mobile-registration-btn').hide();
} else {
    $('#registration-btn').fadeIn();
    $('#cookie-settings').hide();
}

if (tempData == "cookieAccepted" && media.matches) {
    $('#mobile-registration-btn').fadeIn();
    $('#mobile-cookie-settings').hide();
} else if (!media.matches) {
    $('#mobile-registration-btn').hide();
    $('#mobile-cookie-settings').hide();
}


$("#registration_form_ID").submit(function (event) {

    event.preventDefault();

    var event = 'sendemail';
    var register_name = $("#register_name").val();
    var register_email = $("#register_email").val();
    var register_password = $("#register_password").val();
    var register_password_2 = $("#register_password_2").val();
    var request_id = $("#request_id").val();


    if (register_password !== register_password_2) {

        $('.inserted-alert-danger').fadeIn();
        $('#incorrect_password').text('A jalszavak nem egyeznek meg, próbáld meg újra!');
    }

    else if (request_id != "") {

        $('#request').text('!');

    }

    else {

        $.ajax({

            type: "POST",
            url: "/quickreg",
            data: "event=" + event + "&register_name=" + register_name + "&register_email=" + register_email + "&register_password=" + register_password,

            success: function () {
                $('.inserted-alert-success').fadeIn();
                $('#inserted').text('Köszönjük, hogy regisztráltál');
                $("#beep__active").delay(50).get(0).play();
            }

        });
    }

});



// else if (grecaptcha.getResponse() == "") {

//     $('.inserted-alert-danger').fadeIn();
//     $('#incorrect_password').text('Pipálni kell, hogy nem vagy robot!');
// }

/**
 * @theme PrymaPhone
 * @version 1.0.1.
 * @framework Bootstrap - https://getbootstrap.com/
 * @naming Vanilla - http://vanilla-js.com/
 * @author KaraKrisz
 */

/******************** external variables start **********************/

let cookie_btn_accept = document.querySelector('#cookie_btn_accept');
let cookie_p_info_toggle = document.querySelector('#cookie_p_info_toggle');
let not_accepted_cookies = document.querySelector('#not_accepted_cookies');
let not_accepted_cookies_false = document.querySelector('#not_accepted_cookies_false');

/******************** call functions start **********************/

cookieAccept();
cookieProductInfoSecondPhaseShow();
notAcceptedCookieProductInfoSecondPhaseShow();
cookieAcceptFalse();

/******************** writing functions start **********************/

function cookieAccept() {
    const media = window.matchMedia("(max-width: 767px)");
    cookie_btn_accept.addEventListener('click', function (e) {
        e.preventDefault();
        const someTempData = 'cookieAccepted';
        localStorage.setItem('myTempDataKey', someTempData);
        let registration_btn = document.querySelector('#registration-btn');
        registration_btn.classList.toggle('d-block');
        if (media.matches) {
            let mobile_registration_btn = document.querySelector('#mobile-registration-btn');
            mobile_registration_btn.classList.toggle('d-block');
            let mobile_cookie_settings = document.querySelector('#mobile-cookie-settings');
            mobile_cookie_settings.classList.toggle('d-none');
        }
        let cookie_settings = document.querySelector('#cookie-settings');
        cookie_settings.classList.toggle('d-none');
    });
}

function cookieAcceptFalse() {
    not_accepted_cookies_false.addEventListener('click', function (e) {
        e.preventDefault();
        let someTempData = 'cookieAccepted';
        localStorage.setItem('myTempDataKey', someTempData);
        let registration_btn = document.querySelector('#registration-btn');
        registration_btn.classList.toggle('d-block');
        if (media.matches) {
            let mobile_registration_btn = document.querySelector('#mobile-registration-btn');
            mobile_registration_btn.classList.toggle('d-block');
            let mobile_cookie_settings = document.querySelector('#mobile-cookie-settings');
            mobile_cookie_settings.classList.toggle('d-none');
        }
        let cookie_settings = document.querySelector('#cookie-settings');
        cookie_settings.classList.toggle('d-none');
    });
}

function cookieProductInfoSecondPhaseShow() {
    cookie_p_info_toggle.addEventListener('click', function (e) {
        e.preventDefault();
        let cookie_product_info_second_phase = document.querySelector('#cookie_product_info_second_phase');
        cookie_product_info_second_phase.classList.toggle('d-block');
    });
}

function notAcceptedCookieProductInfoSecondPhaseShow() {
    not_accepted_cookies.addEventListener('click', function (e) {
        e.preventDefault();
        let not_accepted_cookie_product_info_second_phase = document.querySelector('#not_accepted_cookie_product_info_second_phase');
        not_accepted_cookie_product_info_second_phase.classList.toggle('d-block');
    });
}