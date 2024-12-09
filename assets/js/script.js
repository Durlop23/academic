 

/*============================= Back To Top Button Script ========================*/
var mybutton = document.getElementById("backTop");
window.onscroll = function () { scrollFunction() };
function scrollFunction() {
  if (document.body.scrollTop > 120 || document.documentElement.scrollTop > 120) {
    mybutton.style.display = "flex";
  } else {
    mybutton.style.display = "none";
  }
}
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}


window.addEventListener('scroll', function(){ 
  var menubar = document.querySelector("#mainNav"); 
  menubar.classList.toggle("fixed-top", window.scrollY > 100);
});

(function ($) {
 
 



  // Main Header Nav links Active Class Genaretor
  $("#mainNav .navbar-nav li a").filter(function () {
    return this.href == location.href.replace(/#.*/, "");
  }).parents("li").addClass("active");
 

 
  $(".writterCarousel").owlCarousel({
    autoplay: false, 
    autoplayHoverPause: true,
    smartSpeed: 550,
    responsiveClass: true,
    autoplayTimeout: 10000,
    autoplaySpeed: 3000,
    loop: false,
    margin: 15,
    items: 4,
    nav: false,
    dots: true,
    responsiveClass: true, 
    responsive: { 
        0: { items: 1, margin: 12 },
        576: { items: 2, margin: 12  },
        768: { items: 2, margin: 15,  },
        992: { items: 2, margin: 15,  }, 
        1200: { items: 3, margin: 15, }, 
        1400: { items: 4, margin: 25 }, 
    } 
  });
  $(".testimonialCarousel").owlCarousel({
    autoplay: false, 
    autoplayHoverPause: true,
    smartSpeed: 550,
    responsiveClass: true,
    autoplayTimeout: 10000,
    autoplaySpeed: 3000,
    loop: true,
    margin: 15,
    items: 4,
    nav: true,
    dots: true,
    responsiveClass: true, 
    responsive: { 
        0: { items: 1, margin: 8 },
        576: { items: 1, margin: 10  },
        768: { items: 1, margin: 15,  },
        992: { items: 2, margin: 15,  }, 
        1200: { items: 2, margin: 15, }, 
        1400: { items: 2, }, 
    },
    navText: [
      '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><path fill="#000" fill-rule="evenodd" d="M10.53 2.97a.75.75 0 0 1 0 1.06L6.56 8l3.97 3.97a.75.75 0 1 1-1.06 1.06l-4.5-4.5a.75.75 0 0 1 0-1.06l4.5-4.5a.75.75 0 0 1 1.06 0" clip-rule="evenodd" /></svg>',
      '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><path fill="#000" fill-rule="evenodd" d="M5.47 13.03a.75.75 0 0 1 0-1.06L9.44 8L5.47 4.03a.75.75 0 0 1 1.06-1.06l4.5 4.5a.75.75 0 0 1 0 1.06l-4.5 4.5a.75.75 0 0 1-1.06 0" clip-rule="evenodd" /></svg>'
    ]
  });
 
  
 
})(jQuery);
 

 