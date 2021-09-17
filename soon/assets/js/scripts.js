/*
 Author: Ukieweb
 Template: ukieBoy (Coming Soon)
 Version: 1.0
 URL: http://themeforest.net/user/UkieWeb
 */


$(document).ready(function(){

    "use strict";


/*
 ----------------------------------------------------------------------
 Preloader
 ----------------------------------------------------------------------
 */
    $(".loader").delay(400).fadeOut();
    $(".animationload").delay(400).fadeOut("fast");


/*
 ----------------------------------------------------------------------
 Animation
 ----------------------------------------------------------------------
 */
    $('.animated').appear(function() {
        var elem = $(this);
        var animation = elem.data('animation');
        if ( !elem.hasClass('visible') ) {
            var animationDelay = elem.data('animation-delay');
            if ( animationDelay ) {
                setTimeout(function(){
                    elem.addClass( animation + " visible" );
                }, animationDelay);
            } else {
                elem.addClass( animation + " visible" );
            }
        }
    });

/*
 ----------------------------------------------------------------------
 Mobile Menu
 ----------------------------------------------------------------------
 */
    $("#show-mobile-menu").on("click", function(){
        $("#navigation-menu").toggleClass("active-menu");
    });


/*
 ----------------------------------------------------------------------
 Nice scroll
 ----------------------------------------------------------------------
 */
    $("html").niceScroll({
        cursorcolor: '#fff',
        cursoropacitymin: '0',
        cursoropacitymax: '1',
        cursorwidth: '2px',
        zindex: 999999,
        horizrailenabled: false,
        enablekeyboard: false
    });


/*
 ----------------------------------------------------------------------
 Watch
 ----------------------------------------------------------------------
 */
    if($.find('#watch')[0]) {

        $('#watch').countDown({
            targetDate: {
                'day': 		10,
                'month': 	9,
                'year': 	2020,
                'hour': 	12,
                'min': 		20,
                'sec': 		0
            },
            omitWeeks: true
        });
        //enter the count down date using the format year, month, day, time: hour, min, sec

        if( $('.day_field .top').html() == "0" ) $('.day_field').css('display','none');
    }


/*
 ----------------------------------------------------------------------
 Carousel
 ----------------------------------------------------------------------
 */
    $("#carousel").carousel({
        interval: false
    });

    $(".gohome").on("click", function(){
        $(".navbar-nav a").removeClass("active");
        $("#carousel").carousel(0);
        $(this).addClass("active");
    });
    $(".gosubscribe").on("click", function(){
        $(".navbar-nav a").removeClass("active");
        $("#carousel").carousel(1);
        $(".gosubscribe").addClass("active");
    });
    $(".goabout").on("click", function(){
        $(".navbar-nav a").removeClass("active");
        $("#carousel").carousel(2);
        $(this).addClass("active");
    });
    $(".gocontact").on("click", function(){
        $(".navbar-nav a").removeClass("active");
        $("#carousel").carousel(3);
        $(this).addClass("active");
    });
    $(".gofeatures").on("click", function(){
        $(".navbar-nav a").removeClass("active");
        $("#carousel").carousel(4);
        $(this).addClass("active");
    });


/*
 ----------------------------------------------------------------------
 Forms
 ----------------------------------------------------------------------
 */

    /* Email validation */
    function valid_email_address(email) {
        var pattern = new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i);
        return pattern.test(email);
    }

    /*
     ----------------------------------------------------------------------
     Subscribe form
     ----------------------------------------------------------------------
     */

    $('#subscribe-form').submit( function() {

        if ( !valid_email_address( $("#subscribe-input").val() ) )
        {
            $("#subscribe-input").addClass("error");
        }
        else
        {
            var data_of_form = $(this).serialize();
            $.ajax({
                url: 'assets/php/subscribe.php',
                data: data_of_form,
                type: 'POST',
                success: function(data) {
                    if ( data == "success" )
                    {
                        $("#subscribe-input").val("");
                        $("#subscribe-submit").val(" ").addClass("btn-success");
                        setTimeout(
                            function(){
                                $("#subscribe-submit").val("Subscribe").removeClass("btn-success");
                            }, 5000
                        );
                    }
                    else
                    {
                        $("#subscribe-submit").val(" ").addClass("btn-error");
                        setTimeout(
                            function(){
                                $("#subscribe-submit").val("Subscribe").removeClass("btn-error");
                            }, 5000
                        );
                    }
                },
                error: function(){
                    $("#subscribe-submit").val(" ").addClass("btn-error");
                    setTimeout(
                        function(){
                            $("#subscribe-submit").val("Subscribe").removeClass("btn-error");
                        }, 5000
                    );
                }
            });
        }
        return false;
    });

    $("#subscribe-input").on("click", function() {

        $(this).removeClass("error");

    });

    /*
     ----------------------------------------------------------------------
     Contact form validation
     ----------------------------------------------------------------------
     */

    $("#contact-form").submit( function() {

        if ( !valid_email_address( $("#contact-form-email").val() ) || $("#contact-form-name").val().length <= 2  )  {

            if ( !valid_email_address( $("#contact-form-email").val() ) ) {
                $("#contact-form-email").addClass("error");
            }
            if ( $("#contact-form-name").val().length <= 2 ){
                $("#contact-form-name").addClass("error");
            }

        } else {

            var data_of_form = $(this).serialize();
            $.ajax({
                url: 'assets/php/contact.php',
                data: data_of_form,
                type: 'POST',
                success: function(data) {
                    if ( data == "success" )
                    {
                        $("#contact-form-name").val("");
                        $("#contact-form-email").val("");
                        $("#contact-form-subject").val("");
                        $("#contact-form-message").val("");

                        $("#contact-form-submit").val(" ").addClass("btn-success");
                        setTimeout(
                            function(){
                                $("#contact-form-submit").val("Send Message").removeClass("btn-success");
                            }, 5000
                        );
                    }
                    else
                    {
                        $("#contact-form-submit").val(" ").addClass("btn-error");
                        setTimeout(
                            function(){
                                $("#contact-form-submit").val("Send Message").removeClass("btn-error");
                            }, 5000
                        );
                    }
                },
                error: function(){
                    $("#contact-form-submit").val(" ").addClass("btn-error");
                    setTimeout(
                        function(){
                            $("#contact-form-submit").val("Send Message").removeClass("btn-error");
                        }, 5000
                    );
                }
            });

        }

        return false;
    });

    $("#contact-form-name, #contact-form-email").on("click", function() {

        $(this).removeClass("error");

    });



}); // End $(document).ready(function(){





















