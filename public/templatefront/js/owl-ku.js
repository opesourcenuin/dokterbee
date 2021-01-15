$(document).ready(function() {
    var owl = $('.owl-carousel');
    owl.owlCarousel({
        margin: 10,
        nav: false,
        autoplay: "true",
        loop: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 5
            }
        }
    });
    // $(".product-slider").owlCarousel({
    //     nav: false,
    //     items: 1,
    //     autoplay: false,
    //     responsive: {
    //         0: {
    //             items: 1
    //         },
    //         600: {
    //             items: 3
    //         },
    //         1000: {
    //             items: 5
    //         }
    //     }
    // });

})