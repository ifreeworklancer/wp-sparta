import jquery from 'jquery';
import Flickity from 'flickity';
window.jQuery = window.$ = jquery;
import ScrollReveal from 'scrollreveal'
import 'flickity/dist/flickity.css';


(function () {

    /**
     * Burger-menu
     */
    $('.burger-menu').on('click', function () {
        var menu = $('.menu');
        $(this).toggleClass('active');
        if ($(this).hasClass('active')) {
            menu.addClass('active');
        } else {
            menu.removeClass('active');
        }
    });

    /**
     * Form
     */
    $('.form-control').on('focus', function () {
        $(this).parent().addClass('in-focus');
    });

    $('.form-control').on('blur', function () {
        if ($(this).val() !== "") {
            $(this).parent().addClass('in-focus');
        } else {
            $(this).parent().removeClass('in-focus');
        }
    });

    /**
     * Services tabs
     */

    var servicesTabsNavItem = $('.services-tabs-nav-item');
    var servicesTabsContentItem = $('.services-tabs-content-img');

    $(servicesTabsContentItem).eq(0).addClass('active');

    $(servicesTabsNavItem).on('click', function () {
        $(servicesTabsNavItem).removeClass('active');
        $(this).addClass('active');
        $(servicesTabsContentItem).removeClass('active');
        $(servicesTabsContentItem).eq($(this).data('value')).addClass('active');
    });

    /**
     * Menu
     */
    var appHeader = $('#app-header');
    var headerBannerColor;
    var sideColor;
    var partnersColor;
    var footerColor;
    var caseColor;

    $(window).on('scroll', function () {
        if ($('#header-banner').length !== 0) {
            if ($(this).scrollTop() > $('#header-banner').offset().top) {
                headerBannerColor = $('#header-banner').data("color");
                $(appHeader).removeClass().addClass(headerBannerColor);
            }
        }
        if ($('#side').length !== 0) {
            if ($(this).scrollTop() > $('#side').offset().top) {
                sideColor = $('#side').data("color");
                $(appHeader).removeClass().addClass(sideColor);
            }
        }
        if ($('#teams').length !== 0) {
            if ($(this).scrollTop() > $('#teams').offset().top) {
                $('.teams-section-description').addClass('is-focus')
            }
        }
        if ($('#services').length !== 0) {
            if ($(this).scrollTop() > $('#services').offset().top) {
                $('.section-title--services').addClass('is-focus');
            }
        }
        if ($('#partners').length !== 0) {
            if ($(this).scrollTop() > $('#partners').offset().top) {
                $('.section-title--partners').addClass('is-focus');
                partnersColor = $('#partners').data("color");
                $(appHeader).removeClass().addClass(partnersColor);
            }
        }
        if ($('#case-page').length !== 0) {
            if ($(this).scrollTop() > $('#case-page').offset().top) {
                caseColor = $('#case-page').data("color");
                $(appHeader).removeClass().addClass(caseColor);
                $('.section-title--services').addClass('is-focus');
            }
        }
        if ($('#portfolio-page').length !== 0) {
            if ($(this).scrollTop() > $('#portfolio-page').offset().top) {
                caseColor = $('#portfolio-page').data("color");
                $(appHeader).removeClass().addClass(caseColor);
            }
        }
        if ($('#app-footer').length !== 0) {
            if ($(this).scrollTop() > $('#app-footer').offset().top) {
                footerColor = $('#app-footer').data("color");
                $(appHeader).removeClass().addClass(footerColor);
            }
        }
    })

    /**
     * Animate scroll
     */
    setTimeout(() => {
        $('.header-banner-item').addClass('is-focus');
    }, 1000);
    ScrollReveal().reveal('.header-banner-item', {
        origin: 'left',
        delay: 400,
        distance: '200px',
    });
    ScrollReveal().reveal('.section-title--side', {
        origin: 'bottom',
        delay: 400,
        distance: '200px',
    });
    ScrollReveal().reveal('.side-content', {
        origin: 'left',
        delay: 400,
        distance: '200px',
    });
    ScrollReveal().reveal('.section-title--teams', {
        origin: 'left',
        delay: 400,
        distance: '200px',
    });
    ScrollReveal().reveal('.teams-content', {
        origin: 'right',
        delay: 400,
        distance: '200px',
    });
    ScrollReveal().reveal('.partners-slider', {
        origin: 'bottom',
        delay: 400,
        distance: '200px',
    });
    ScrollReveal().reveal('.slider-nav-arrow--partners', {
        origin: 'bottom',
        delay: 400,
        distance: '200px',
    });


    /**
     * Slider nav num
     */

    var sliderItem = $('.side-slider-item');
    var sideSliderNavNum = $('.slider-nav-num');

    for (var i = 0; i < sliderItem.length; i++) {
        sideSliderNavNum.append(`<div class="slider-nav-num-item">${i+1}</div>`);
    }

    var sideSliderNavNumItem = $('.slider-nav-num-item');
    $(sideSliderNavNumItem[0]).addClass('active')

    /**
     * Sliders side
     */
    if ($('.side-slider')) {

        var elem1 = document.querySelector('.side-slider');
        if (elem1) {

            const flkty1 = new Flickity(elem1, {

                prevNextButtons: false,
                cellAlign: 'left',
                contain: true,
                draggable: false,
                groupCells: 1
            });


            var prevArrowSide = document.querySelector('.slider-nav-arrow-item--prev');

            prevArrowSide.addEventListener('click', function () {
                flkty1.previous(false, false);
                $(sideSliderNavNumItem).removeClass('active');
                $(sideSliderNavNumItem[flkty1.selectedIndex]).addClass('active')
            });


            var nextArrowSide = document.querySelector('.slider-nav-arrow-item--next');

            nextArrowSide.addEventListener('click', function () {
                flkty1.next(false, false);
                $(sideSliderNavNumItem).removeClass('active');
                $(sideSliderNavNumItem[flkty1.selectedIndex]).addClass('active')
            });
        }
    }

    /**
     * partners side
     */
    if ($('.partners-slider')) {

        var elem2 = document.querySelector('.partners-slider');
        if (elem2) {

            const flkty2 = new Flickity(elem2, {

                prevNextButtons: false,
                pageDots: false,
                cellAlign: 'left',
                contain: true,
                wrapAround: true,
                draggable: true,
            });


            var prevArrowSide = document.querySelector('.slider-nav-arrow-item--prev-partners');

            prevArrowSide.addEventListener('click', function () {
                flkty2.previous(false, false);
            });


            var nextArrowSide = document.querySelector('.slider-nav-arrow-item--next-partners');

            nextArrowSide.addEventListener('click', function () {
                flkty2.next(false, false);
            });
        }
    }

})(jQuery)