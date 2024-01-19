var swiper = new Swiper(".product_detail_slider", {
  slidesPerView: 2,
  speed: 1000,
  spaceBetween: 20,
  breakpoints: {
      640: {
        slidesPerView: 2,
      },
      768: {
        slidesPerView: 3,
      },
      1024: {
        slidesPerView: 3,
      },
    }
});

var swiper = new Swiper(".thumb_product", {
  loop: true,
  spaceBetween: 10,
  slidesPerView: 4,
  freeMode: true,
  watchSlidesProgress: true,
});
var swiper2 = new Swiper(".thumb_product1", {
  loop: true,
  spaceBetween: 10,
  thumbs: {
    swiper: swiper,
  },
});

var swiper = new Swiper(".index-fifteenth-slider", {
  slidesPerView: 1,
  speed: 1000,
  spaceBetween: 20,
  breakpoints: {
      640: {
        slidesPerView: 2,
      },
      768: {
        slidesPerView: 3,
      },
      1024: {
        slidesPerView: 3,
      },
    }
});

var swiper = new Swiper(".index-thirteenth-slider", {
  slidesPerView: 1,
  speed: 1000,
  spaceBetween: 20,
  breakpoints: {
      640: {
        slidesPerView: 2,
      },
      768: {
        slidesPerView: 3,
      },
      1024: {
        slidesPerView: 3,
      },
    }
});

var swiper = new Swiper(".index-fifth-slider", {
  slidesPerView: 1,
  spaceBetween: 30,
  breakpoints: {
    640: {
      slidesPerView: 1,
    },
    768: {
      slidesPerView: 3,
    },
    1024: {
      slidesPerView: 4,
    },
  }
});

var swiper = new Swiper(".desktop-product-slider", {
  slidesPerView: 2,
  loop: true,
  speed: 1000,
  spaceBetween: 30,
  breakpoints: {
      640: {
        slidesPerView: 2,
      },
      768: {
        slidesPerView: 4,
      },
      1024: {
        slidesPerView: 5,
      },
    }
});

var swiper = new Swiper(".testimonial-slider", {
  slidesPerView: 3,
  loop: true,
  speed: 1000,
  spaceBetween: 10,
  breakpoints: {
      640: {
        slidesPerView: 2,
      },
      768: {
        slidesPerView: 4,
      },
      1024: {
        slidesPerView: 3,
      },
    }
});

var swiper = new Swiper(".brands-fisrt-slider", {
  slidesPerView: 1,
  speed: 1000,
  spaceBetween: 20,
  breakpoints: {
      640: {
        slidesPerView: 2,
      },
      768: {
        slidesPerView: 3,
      },
      1024: {
        slidesPerView: 3,
      },
    }
});

var input = $('.quantity'),
    minValue =  parseInt(input.attr('min')),
    maxValue =  parseInt(input.attr('max'));
    

$('.plus').on('click', function () {
  var inputValue = input.val();
  if (inputValue < maxValue) {
    input.val(parseInt(inputValue) + 1);
  }
});

$('.minus').on('click', function () {
    var inputValue = input.val();
		if (inputValue < maxValue) {
      input.val(parseInt(inputValue) - 1);
    }
});

function getVals(){
    // Get slider values
    var parent = this.parentNode;
    var slides = parent.getElementsByTagName("input");
      var slide1 = parseFloat( slides[0].value );
      var slide2 = parseFloat( slides[1].value );
    // Neither slider will clip the other, so make sure we determine which is larger
    if( slide1 > slide2 ){ var tmp = slide2; slide2 = slide1; slide1 = tmp; }
    
    var displayElement = parent.getElementsByClassName("rangeValues")[0];
        displayElement.innerHTML = "$ " + slide1 + "k - $" + slide2 + "k";
  }
  
  window.onload = function(){
    // Initialize Sliders
    var sliderSections = document.getElementsByClassName("range-slider");
        for( var x = 0; x < sliderSections.length; x++ ){
          var sliders = sliderSections[x].getElementsByTagName("input");
          for( var y = 0; y < sliders.length; y++ ){
            if( sliders[y].type ==="range" ){
              sliders[y].oninput = getVals;
              // Manually trigger event first time to display values
              sliders[y].oninput();
            }
          }
        }
  }




$(document).ready(function () {
  var div1 = $("#cat_panel_2");
  var div2 = $("#cat_panel_1");
  var navItem1 = $(".nav_item_1");
  var navItem2List = $(".nav_item_2");

  navItem1.mouseover(function () {
      div1.addClass("show");
      div2.removeClass("show");
  });

  navItem2List.mouseover(function () {
      div1.removeClass("show");
      div2.addClass("show");
  });

  $("body").mouseover(function (event) {
      if (!$(event.target).closest(".menu-main-wrap").length) {
          div1.removeClass("show");
          div2.removeClass("show");
      }
  });
});


// MOBILE MENU TOGGLE START
$(document).ready(function () {
    $(document).on("click","#menu_toggle_btn",function(){
      $(".header-main-mobile-screen-1").addClass("active");
      $(".fade_wrap").addClass("show");
      $("body").addClass("deactive");
    });
    $(document).on("click", ".main_cat_item", function () {
      $(".header-main-mobile-screen-2").addClass("active");
      setTimeout(function () {
            $(".header-main-mobile-screen-1").removeClass("active");
        }, 1000);
    });
    $(document).on("click", ".main_cat_item_2", function () {
      $(".header-main-mobile-screen-1").addClass("active");
      $(".header-main-mobile-screen-2").removeClass("active");
      $(".header-main-mobile-screen-3").removeClass("active");
      $(".header-main-mobile-screen-4").removeClass("active");
    });
    $(document).on("click", ".main_cat_item_3", function () {
      $(".header-main-mobile-screen-3").addClass("active");
      setTimeout(function () {
            $(".header-main-mobile-screen-2").removeClass("active");
        }, 1000);
    });
    $(document).on("click", ".main_cat_item_4", function () {
      $(".header-main-mobile-screen-4").addClass("active");
      setTimeout(function () {
        $(".header-main-mobile-screen-3").removeClass("active");
    }, 1000);
    });
    $(document).on("click",".mobile-sub-menu .close_btn , .main_cat_item_5",function(){
      $(".mobile-sub-menu").removeClass("active");
      $(".fade_wrap").removeClass("show");
      $("body").removeClass("deactive");
    });
    $(document).on("click",".fade_wrap",function(){
      $(".mobile-sub-menu").removeClass("active");
      $(".fade_wrap").removeClass("show");
      $("body").removeClass("deactive");
    });
    $(document).on("click",".header-wrap-search",function(){
      $(".header-main-search-suggestion").addClass("show");
      $("body").addClass("deactive");
    });
    $(document).on("click",".header-main-search-suggestion .close_btn",function(){
      $(".header-main-search-suggestion").removeClass("show");
      $("body").removeClass("deactive");
    });
    $(document).on("click",".header-suggestion-search",function(){
      $(".header-main-search-suggestion-after").addClass("show");
    });
    $(document).on("click",".header-main-search-suggestion-after .close_btn",function(){
      $(".header-main-search-suggestion-after").removeClass("show");
      $("body").removeClass("deactive");
    });
    
    $(document).on("click", "#productListMobile", function () {
      $(".mobile_menu").addClass("activeListMenu");
    });
    $(document).on("click", ".mobile_menu .close_btn", function () {
      $(".mobile_menu").removeClass("activeListMenu");
    });
});
// MOBILE MENU TOGGLE END

$('.header-bag-desktop').on('click', function() {
  $('.header-main-wrap-addcart').toggleClass('addcart-show');
});

$(document).ready(function(){
  $('section').on('click', function(){
      if($('.header-main-wrap-addcart').hasClass('addcart-show')) {
          $(".header-main-wrap-addcart").removeClass("addcart-show"); 
      }
  });
});

$('.header-wrap-bag ').on('click', function() {
  $('.header-wrap-bag ').toggleClass('addcart-show');
});

$(document).ready(function(){
  $('section').on('click', function(){
      if($('.header-main-wrap-addcart').hasClass('addcart-show')) {
          $(".header-main-wrap-addcart").removeClass("addcart-show"); 
      }
  });
});