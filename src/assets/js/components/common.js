const serviceSwiper = new Swiper('#serviceSwiper', {
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
        prevEl: '.swiper-button-prev',
    },
});
const staffSwiper = new Swiper('#staffSwiper', {
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
        prevEl: '.swiper-button-prev--staff',
    },
});
const newsSwiper = new Swiper('#newsSwiper', {
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
        prevEl: '.swiper-button-prev--news',
    },
});

const faqBlocks = document.querySelectorAll('.faq-section__block');
faqBlocks.forEach(block => {
    block.addEventListener('click', () => {
        if (!block.classList.contains('faq-section__block--active')) {
            block.classList.add('faq-section__block--active')
        } else {
            block.classList.remove('faq-section__block--active')
        }
    })

})