


  /* HERO SLIDER */
  $('.hero-slider').owlCarousel({
      loop: true,
      items: 1,           // 🔥 hero hamesha single
      margin: 0,
      nav: true,
      dots: false,
      autoplay: true,
      autoplayTimeout: 5000,
      autoplayHoverPause: true,
      navText: [
        '<i class="fa-solid fa-long-arrow-left"></i>',
        '<i class="fa-solid fa-long-arrow-right"></i>'
      ]
  });



/* TESTIMONIAL SLIDER */
  $('.testimonial-wrapper').owlCarousel({
      loop: true,
      items: 3,
      margin: 30,
      nav: true,
      dots: false,
      autoplay: false,
      autoplayTimeout: 4000,
      autoplayHoverPause: true,
      smartSpeed: 700,
      navText: [
        '<i class="fa-solid fa-long-arrow-left"></i>',
        '<i class="fa-solid fa-long-arrow-right"></i>'
      ],
   responsive: {
        0: {        // Mobile
            items: 1
        },
        768: {      // Tablet
            items: 2
        },
        1024: {     // Desktop
            items: 3
        }
    }
});


$(document).ready(function () {

    const $scrollTop = $('#scroll-top');

    $(window).on('scroll', function () {
        const scroll = $(this).scrollTop();

        // Show / Hide Scroll To Top Button
        if (scroll > 100) {
            $scrollTop.addClass('active');
        } else {
            $scrollTop.removeClass('active');
        }
    });

    // Scroll To Top Click
    $scrollTop.on('click', function (e) {
        e.preventDefault();
        $('html, body').animate({ scrollTop: 0 }, 800);
    });

});


// sticky header 
$(window).scroll(function () {
    if ($(window).width() <= 767) {
        // Mobile: always fixed
        $(".navbar").addClass("fixed-top");
    } else {
        // Desktop/tablet: scroll > 50px triggers stickiness
        if ($(this).scrollTop() > 50) {
            $(".navbar").addClass("fixed-top");
        } else {
            $(".navbar").removeClass("fixed-top");
        }
    }
});


$(document).ready(function(){
    $(window).trigger('scroll');
});

    // booking page css 
   
document.querySelectorAll('.tab').forEach(tab=>{
  tab.addEventListener('click',()=>{
    document.querySelectorAll('.tab').forEach(t=>t.classList.remove('active'));
    document.querySelectorAll('.tab-content').forEach(c=>c.classList.remove('active'));

    tab.classList.add('active');
    document.getElementById(tab.dataset.tab).classList.add('active');
  });
});

/**
 * Calculates the great-circle distance between two points on the Earth's surface.
 * @param {number} lat1 
 * @param {number} lon1 
 * @param {number} lat2 
 * @param {number} lon2 
 * @returns {number} distance in kilometers
 */
function haversineDistance(lat1, lon1, lat2, lon2) {
    const R = 6371; // Earth radius in km
    const dLat = (lat2 - lat1) * Math.PI / 180;
    const dLon = (lon2 - lon1) * Math.PI / 180;
    const a = Math.sin(dLat / 2) * Math.sin(dLat / 2) +
        Math.cos(lat1 * Math.PI / 180) * Math.cos(lat2 * Math.PI / 180) *
        Math.sin(dLon / 2) * Math.sin(dLon / 2);
    const c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));
    return R * c;
}
