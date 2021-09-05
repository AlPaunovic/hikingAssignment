$('.owl-carousel').owlCarousel({
    loop:true,
    nav:true,
    margin: 10,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})
// $(.gallery).find('img').css('padding','20px'); --> probao ovako ne radi

// $(.gallery > .owl-carousel owl-theme > .item).find('img').css('padding','20px');  --> a ne radi ni ovako