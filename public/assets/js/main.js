


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
 $("#scroll-top").on("click", function () {
        $("html, body").animate({ scrollTop: 0 }, 1500);
        return false;
    });
    $(window).scroll(function () {
        if ($(this).scrollTop() > 50) {
            $(".navbar").addClass("fixed-top");
        } else {
            $(".navbar").removeClass("fixed-top");
        }
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
