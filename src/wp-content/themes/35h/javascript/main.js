var MOBILE_BREAKPOINT = 992;

// Menu principal
$(document).on('click', '#menu-menu-principal > li', function(event) {
    $('#menu-menu-principal > li').not(this).removeClass('active');
    $(this).toggleClass('active');

    if($('.menu35h').is('.active')) {
        var options = {
            duration: 4000,
            startVisible: true,
            delayBeforeStart: 300
        };
        $('.menu35h li a').marquee(options);
        if($(window).innerWidth() >= MOBILE_BREAKPOINT) {
            $('.menu35h li a').marquee('pause');

            $(document).on('mouseover', '.menu35h li a', function() {
                $(this).marquee('resume');
            });
            $(document).on('mouseleave', '.menu35h li a', function() {
                $(this).marquee('destroy');
                $(this).marquee(options);
                $(this).marquee('pause');
            });
        }
    }
    if($('.menuContact').is('.active') && $(window).innerWidth() >= MOBILE_BREAKPOINT) {
        $('#menu-menu-principal > li:not(.menuContact').css('visibility', 'hidden');
    } else {
        $('#menu-menu-principal > li:not(.menuContact').css('visibility', 'visible');
    }
});

// Listing Candidatures
$('body.page-template-page-candidatures').on('click', '.articles > article', function(event) {
    if($(this).is('.active')) {
        $('.articles > article').removeClass('active');
    } else {
        $('.articles > article').removeClass('active');
        $(this).addClass('active');
    }
});

$('body.page-template-page-candidatures .articles > article').addClass('inactive');

// Pages Editions
$('body.page-template-page-edition').on('click', '.content-column-2', function(event) {
    if($(window).innerWidth() >= MOBILE_BREAKPOINT) {
        $('body').toggleClass('center-column-active');
    }
});
$(function() {
    $('body.page-template-page-edition h1').marquee({
        duration: 10000,
        startVisible: true,
        pauseOnHover: true,
        delayBeforeStart: 1500
    });
});

// Scrollbars
$(function() {
    if($(window).innerWidth() >= MOBILE_BREAKPOINT) {
        $('[class^="content-column"], [class~=" content-column"], .scrollable').perfectScrollbar();
    }
});

// FAQ curved text
$(function() {
	$('.faq-circle .question').lettering();
});


// TWEENMAX

$('.wallpaper .tweenZone').hover(bubbleHover, bubbleHoverOff);

function bubbleHover(event) {
  var feedback = $(this).find('.feedback');
  var rect = $(this).get(0).getBoundingClientRect(),
    x = event.clientX - rect.left,
    y = event.clientY - rect.top;

  TweenMax.set(feedback, {
    x: x,
    y: y,
    scaleX: 0,
    scaleY: 0,
    opacity: 0
  });

  TweenMax.to(feedback, 1.2, {
    scaleX: 2,
    scaleY: 2,
    opacity: 1,
    ease: Expo.easeOut
  });
}

function bubbleHoverOff(event) {
  var feedback = $(this).find('.feedback');
  var rect = $(this).get(0).getBoundingClientRect(),
    x = event.clientX - rect.left,
    y = event.clientY - rect.top;

  TweenMax.set(feedback, {
    scaleX: 1,
    scaleY: 1,
    opacity: 1
  });

  TweenMax.to(feedback, .5, {
    x: x,
    y: y,
    scaleX: 0,
    scaleY: 0,
    opacity: 0,
    ease: Expo.easeOut
  });

}