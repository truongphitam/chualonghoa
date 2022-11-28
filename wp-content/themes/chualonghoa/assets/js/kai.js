$('.owl-banners').owlCarousel({
    loop: true,
    dots: false,
    nav: false,
    margin: 10,
    autoplay: true,
    autoplayTimeout: 3000,
    autoplayHoverPause:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
});

$('.owl-news').owlCarousel({
    loop: true,
    dots: false,
    nav: false,
    margin: 10,
    autoplay: true,
    autoplayTimeout: 3000,
    autoplayHoverPause:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items: 5
        }
    }
});
