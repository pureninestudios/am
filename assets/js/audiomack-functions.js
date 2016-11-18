(function($) {

    console.log('ready');

    // Widget "load more"

    var
        $widgetTrigger = $('.widget__load-stuff'),
        $widgetTarget = $('.widget__menu--secondary');

    $widgetTrigger.on('click', function(){
        var thisText = $(this).text();
        $(this).text( thisText == 'More' ? "Less" : "More" );
        $(this).toggleClass('widget__load-more widget__load-less');
        $widgetTarget.slideToggle(250);
    });

    // burger
    var
        $burgerTrigger = $('.action-trigger'),
        $siteSidebar = $('.site-sidebar'),
        burgerActiveClass = 'burger__filling--active',
        sidebarOpenClass = 'site-sidebar--open';

    $burgerTrigger.on('click', function(){
        $('body').toggleClass('has-active-sidebar');
        $(this).find('.burger__filling').toggleClass(burgerActiveClass);
        $siteSidebar.toggleClass(sidebarOpenClass);
    });

    // Close sidebar on small screens
    // Run in window.resize function
    function hideSidebar() {
        if ( $(window).width() < 1401 ) {
            $('body').removeClass('has-active-sidebar');
            $siteSidebar.removeClass('site-sidebar--open');
        } else {
            $('body').addClass('has-active-sidebar');
            $siteSidebar.addClass('site-sidebar--open');
        }
    }

    // User summary
    var
        $menuTrigger = $('.main-header__account-summary'),
        $menu = $('.main-header__sub-menu'),
        menuActiveClass = 'main-header__sub-menu--active';

    $menuTrigger.on('click', function(){
        $menu.toggleClass(menuActiveClass);
    });

    // notifications
    var
        $notificationTrigger = $('.main-header__block--notifications'),
        $notificationPopout = $('.main-header__popout');

    $notificationTrigger.on('click', function(){
        $notificationPopout.toggle();
    });

    // Tooltips

    var $tooltipTrigger = $('.js-tooltip');

    $tooltipTrigger.on('click', function(e){

        e.preventDefault();

        var thisTarget, $targetTooltip;

        thisTarget = $(this).data('target-tooltip'),
        $targetTooltip = $('.tooltip[data-tooltip-id="' + thisTarget + '"]');

        $targetTooltip.toggleClass('tooltip--active');

    });

    // Titles
    var $titleTrigger = $('.js-title');

    $titleTrigger.on('mouseenter', function(){
        var thisText = $(this).data('original-title'),
        html = '<div class="popover-title"><div class="popover-title__inner">' + thisText + '</div></div>';
        $(this).prepend(html);
    });

    $titleTrigger.on('mouseleave', function(){
        $(this).find('.popover-title').remove();
    });

    // Toggle player icon
    var playIcon = $('.player__control--main');
    playIcon.on('click', function(){
        $(this).find('.glyphicons').toggleClass('play pause');
    });

    // Slide player in
    $('.music__detail-overlay').on('click', function(){
        $(this).toggleClass('music__detail-overlay--is-active');
        $(this).find('.glyphicons').toggleClass('play pause');
        $('.player').toggleClass('player--is-active');
        $('body').toggleClass('has-active-player');
    });

    // Player icon trigger
    $('.js-trigger--player-icons').on('click', function(){
        $(this).find('i').toggleClass('option-horizontal remove');
        $('.player__icons').fadeToggle(300);
    });

    // Window resize function
    $(window).on('resize', function(){
        hideSidebar();
    }).resize();

})(jQuery);

(function($){
	"use strict";
    $(window).load(function() {

        console.log('loaded');

    });
})(jQuery);
