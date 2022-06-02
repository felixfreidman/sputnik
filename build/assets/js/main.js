"use strict";

var serviceSwiper = new Swiper('#serviceSwiper', {
  // Optional parameters
  direction: 'horizontal',
  loop: false,
  speed: 400,
  spaceBetween: 32,
  effect: 'cards',
  slidesPerView: '3',
  // swipeHandler: '.swiper-wrapper',
  // pagination: {
  //     el: '.swiper-pagination',
  //     clickable: true
  // },
  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev'
  }
});
var staffSwiper = new Swiper('#staffSwiper', {
  // Optional parameters
  direction: 'horizontal',
  loop: false,
  speed: 400,
  spaceBetween: 32,
  effect: 'cards',
  slidesPerView: '3',
  // swipeHandler: '.swiper-wrapper',
  // pagination: {
  //     el: '.swiper-pagination',
  //     clickable: true
  // },
  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next--staff',
    prevEl: '.swiper-button-prev--staff'
  }
});
var newsSwiper = new Swiper('#newsSwiper', {
  // Optional parameters
  direction: 'horizontal',
  loop: false,
  speed: 400,
  spaceBetween: 29,
  effect: 'cards',
  slidesPerView: 'auto',
  // swipeHandler: '.swiper-wrapper',
  // pagination: {
  //     el: '.swiper-pagination',
  //     clickable: true
  // },
  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next--news',
    prevEl: '.swiper-button-prev--news'
  }
});
var faqBlocks = document.querySelectorAll('.faq-section__block');
faqBlocks.forEach(function (block) {
  block.addEventListener('click', function () {
    if (!block.classList.contains('faq-section__block--active')) {
      block.classList.add('faq-section__block--active');
    } else {
      block.classList.remove('faq-section__block--active');
    }
  });
}); // // header-swiper
// var swiper = new Swiper('#main-swiper', {
//   fadeEffect: {
//     crossFade: true
//   },
//   navigation: {
//     nextEl: '.swiper-button-next--header',
//     prevEl: '.swiper-button-prev--header',
//   },
//   pagination: {
//     el: '.swiper-pagination',
//     type: 'bullets',
//     clickable: true,
//   },
//   loop: true,
//   // autoplay: {
//   //   delay: 2300,
//   // },
//   fadeEffect: {
//     crossFade: true
//   },
//   speed: 800,
//   watchSlidesProgress: true,
//   watchVisibility: true,
//   disableOnInteraction: true,
// });