"use strict"

/////////////// OWL CAROUSEL /////////////
$(document).ready(function(){
    $(".owl-carousel").owlCarousel({
        items:1,
        nav: true,
        loop: true,
        dots: false,
        autoplay: true,
        autoplayHoverPause: true,
        navText: [' <i class="white fas fa-arrow-left"></i> ' , ' <i class="white fas fa-arrow-right"></i> ']
        
    });
});

/////////////// PORTFOLIO FILTER /////////////
let filters = document.querySelectorAll(".btn-portfolio");
let galleryItems = document.querySelectorAll(".portfolio--item");

for (let i = 0; i < filters.length; i++ ){
    filters[i].addEventListener('click', function(){
        for (let l = 0; l < filters.length; l++){
            filters[l].classList.remove('btn-portfolio__active');
        }
        for (let k = 0; k < galleryItems.length; k++ ){
            galleryItems[k].classList.add('hide');
            filters[i].classList.add('btn-portfolio__active');
            if (filters[i].dataset.category == galleryItems[k].dataset.category || filters[i].dataset.category == "all"){
                galleryItems[k].classList.remove('hide');
            }
        }   
    });
}

// --- TOGGLE PORTFOLIO CONTENT
let expander = document.querySelector('#expander');
let hiddenElements = document.querySelector('.hidden');

expander.addEventListener('click', function(){
    $(this).toggleClass("down");
    hiddenElements.classList.toggle("hidden");
});

// /////////////// MOBILE NAVIGATION /////////////
document.querySelector('#burger--menu ul').addEventListener('click', function(){
    document.querySelector('input[type=checkbox]').checked = false;
});