
import Flickity from 'flickity-as-nav-for';

import 'flickity/dist/flickity.css';






/**
 * Slider nav num
 */

var sliderItem = $('.side-slider-item');
var sideSliderNavNum = $('.slider-nav-num');

for (var i = 0; i < sliderItem.length; i++) {
    sideSliderNavNum.append(`<div class="slider-nav-num-item">${i + 1}</div>`);
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
if ($('.partners-video-slider')) {

    var elem2 = document.querySelector('.partners-video-slider');
    var asNavFor = document.querySelector('.partners-slider')
    if (elem2) {

        const flkty2 = new Flickity(elem2, {
            prevNextButtons: false,
            pageDots: false,
            cellAlign: 'left',
            contain: true,
            wrapAround: true,
            draggable: false,
        });

        var navFor = new Flickity(asNavFor, {
            asNavFor: elem2,
            pageDots: false,
            prevNextButtons: false,
            wrapAround: true,
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


/**
 * Sliders case
 */
if ($('.case-slider')) {

    var elemB = document.querySelector('.case-slider');
    if (elemB) {

        const flktyB = new Flickity(elemB, {

            prevNextButtons: false,
            cellAlign: 'left',
            pageDots: false,
            contain: true,
            draggable: false,
            wrapAround: true,
            groupCells: 1
        });


        var prevArrowSide = document.querySelector('.case--prev');

        prevArrowSide.addEventListener('click', function () {
            flktyB.previous(false, false);
        });


        var nextArrowSide = document.querySelector('.case--next');

        nextArrowSide.addEventListener('click', function () {
            flktyB.next(false, false);
        });
    }
}


/**
 * Sliders intro
 */
if ($('.intro-slider')) {

    var elemA = document.querySelector('.intro-slider');
    if (elemA) {

        const flktyA = new Flickity(elemA, {

            prevNextButtons: false,
            cellAlign: 'center',
            contain: true,
            draggable: false,
            groupCells: 1,
            autoPlay: 2000,
            pauseAutoPlayOnHover: false,
            wrapAround: true
        });
    }
}



/**
 * Sliders case
 */
if ($('.case-single-slider')) {

    var elemD = document.querySelector('.case-single-slider');
    if (elemD) {

        const flickD = new Flickity(elemD, {

            prevNextButtons: false,
            cellAlign: 'center',
            pageDots: false,
            contain: true,
            draggable: false,
            wrapAround: true,
            groupCells: 1
        });


        var prevArrowSide = document.querySelector('.case-single--prev');

        prevArrowSide.addEventListener('click', function () {
            flickD.previous(false, false);
        });


        var nextArrowSide = document.querySelector('.case-single--next');

        nextArrowSide.addEventListener('click', function () {
            flickD.next(false, false);
        });
    }
}
