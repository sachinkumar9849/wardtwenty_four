
$(document).ready(function () {
  window.addEventListener("scroll", function () {
    var header = document.querySelector(".header");
    header.classList.toggle("sticky-bar", window.scrollY > 50);
  });
});
// sticky end
$(document).ready(function () {
  $(".work_slider").slick({
    autoplay: true,
    autoplaySpeed: 2000,
    speed: 600,
    draggable: true,
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    arrows: false,
    dots: false,
    responsive: [
      {
        breakpoint: 991,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
    ],
  });
});
// work end
$(document).ready(function () {
  $(".home_team").slick({
    autoplay: true,
    autoplaySpeed: 2000,
    speed: 600,
    draggable: true,
    infinite: true,
    slidesToShow: 2,
    slidesToScroll: 1,
    arrows: false,
    dots: false,
    responsive: [
      {
        breakpoint: 991,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
    ],
  });
});
// team end

$(function() {
  var $tabButtonItem = $('#tab-button li'),
      $tabSelect = $('#tab-select'),
      $tabContents = $('.tab-contents'),
      activeClass = 'is-active';

  $tabButtonItem.first().addClass(activeClass);
  $tabContents.not(':first').hide();

  $tabButtonItem.find('a').on('click', function(e) {
    var target = $(this).attr('href');

    $tabButtonItem.removeClass(activeClass);
    $(this).parent().addClass(activeClass);
    $tabSelect.val(target);
    $tabContents.hide();
    $(target).show();
    e.preventDefault();
  });

  $tabSelect.on('change', function() {
    var target = $(this).val(),
        targetSelectNum = $(this).prop('selectedIndex');

    $tabButtonItem.removeClass(activeClass);
    $tabButtonItem.eq(targetSelectNum).addClass(activeClass);
    $tabContents.hide();
    $(target).show();
  });
});
// profile tab end 
// testimonial end 

var btn = $("#button");

$(window).scroll(function () {
  if ($(window).scrollTop() > 300) {
    btn.addClass("show");
  } else {
    btn.removeClass("show");
  }
});

btn.on("click", function (e) {
  e.preventDefault();
  $("html, body").animate({ scrollTop: 0 }, "300");
});

// slide up end

$(document).ready(function () {
  $(".testimonial-slider").slick({
    autoplay: true,
    autoplaySpeed: 1000,
    speed: 600,
    draggable: true,
    infinite: true,
    slidesToShow: 2,

    slidesToScroll: 1,
    arrows: true,
    dots: false,
    responsive: [
      {
        breakpoint: 991,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
    ],
  });
});
// testimonial end
$(document).ready(function () {
  $(".logo_block").slick({
    autoplay: true,
    autoplaySpeed: 1000,
    speed: 600,
    draggable: true,
    infinite: true,
    slidesToShow: 4,

    slidesToScroll: 1,
    arrows: false,
    dots: false,
    responsive: [
      {
        breakpoint: 991,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
        },
      },
    ],
  });
});
// testimonial end

$(".category_side-job").slick({
  dots: false,
  arrow: false,
  infinite: true,
  autoplay: true,
  speed: 700,

  responsive: [
    {
      breakpoint: 991,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      },
    },
  ],
});

// job category end

var a = 0;
$(window).scroll(function () {
  var oTop = $("#counter-box").offset().top - window.innerHeight;
  if (a == 0 && $(window).scrollTop() > oTop) {
    $(".counter").each(function () {
      var $this = $(this),
        countTo = $this.attr("data-number");
      $({
        countNum: $this.text(),
      }).animate(
        {
          countNum: countTo,
        },

        {
          duration: 850,
          easing: "swing",
          step: function () {
            //$this.text(Math.ceil(this.countNum));
            $this.text(Math.ceil(this.countNum).toLocaleString("en"));
          },
          complete: function () {
            $this.text(Math.ceil(this.countNum).toLocaleString("en"));
            //alert('finished');
          },
        }
      );
    });
    a = 1;
  }
});

// counter end

$(".destination_slider").slick({
  dots: true,
  arrow: false,
  infinite: true,
  autoplay: true,
  speed: 700,
  slidesToShow: 3,

  responsive: [
    {
      breakpoint: 991,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
      },
    },
    {
      breakpoint: 767,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      },
    },
  ],
});

$(document).ready(function () {
  $(".youtube, .popup-vimeo, .popup-gmaps").magnificPopup({
    disableOn: 700,
    type: "iframe",
    mainClass: "mfp-fade",
    removalDelay: 160,
    preloader: false,
    fixedContentPos: false,
    autoplay: true,
  });
});
$(document).ready(function () {
  window.addEventListener("scroll", function () {
    var header = document.querySelector(".header");
    header.classList.toggle("sticky-bar", window.scrollY > 50);
  });
});
// sticky end
$(".partner_logo").slick({
  dots: false,
  arrow: false,
  infinite: true,
  autoplay: true,
  fade: false,
  speed: 300,
  slidesToShow: 7,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1200,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 1,
      },
    },

    {
      breakpoint: 991,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 1,
      },
    },
    {
      breakpoint: 767,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
      },
    },
  ],
});
// partner_logo slider end
$(".job_slider").slick({
  dots: false,
  arrow: false,
  infinite: true,
  autoplay: true,
  fade: false,
  speed: 300,
  slidesToShow: 3,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1200,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
      },
    },

    {
      breakpoint: 991,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      },
    },
  ],
});
// job slider end

// youtube video end

// about img
// $(".testimonial_slider").slick({
//   dots: false,
//   arrow: true,
//   infinite: true,
//   autoplay: true,
//   speed: 300,
//   slidesToShow: 3,
//   responsive: [
//     {
//       breakpoint: 1199,
//       settings: {
//         slidesToShow: 2,
//         slidesToScroll: 1,
//       },
//     },
//     {
//       breakpoint: 767,
//       settings: {
//         slidesToShow: 2,
//         slidesToScroll: 1,
//       },
//     },
//     {
//       breakpoint: 556,
//       settings: {
//         slidesToShow: 1,
//         slidesToScroll: 1,
//       },
//     },
//   ],
// });

$(".slider")
  .slick({
    autoplay: true,
    speed: 800,
    lazyLoad: "progressive",
    arrows: true,
    dots: false,
  })
  .slickAnimation();

// slider home end

$(document).ready(function () {
  $("#myModal").modal("show");
});
// notice end
$(document).ready(function () {
  $(".toggle-wrap").hide();
  $(".toggle-trigger").click(function () {
    $(this).parent().nextAll(".toggle-wrap").first().toggle("slow");
  });
});
// team read readMore

// $(document).ready(function () {
//   window.addEventListener("scroll", function () {
//     var header = document.querySelector(".header");
//     header.classList.toggle("sticky-bar", window.scrollY > 50);
//   });
// });
// // program sticky end

$(document).ready(function () {
  window.addEventListener("scroll", function () {
    var header = document.querySelector(".header");
    header.classList.toggle("sticky-bar", window.scrollY > 50);
  });
});
// sticky end
$(document).ready(function () {
  //jquery for toggle sub menus
  $(".sub-btn").click(function () {
    $(this).next(".sub-menu").slideToggle();
    $(this).find(".dropdown").toggleClass("rotate");
  });

  //jquery for expand and collapse the sidebar
  $(".menu-btn").click(function () {
    $(".side-bar").addClass("active");
    $(".menu-btn").css("visibility", "hidden");
  });

  $(".close-btn").click(function () {
    $(".side-bar").removeClass("active");
    $(".menu-btn").css("visibility", "visible");
  });
});
// menu mobile end

// read more start
class readMore {
  constructor() {
    this.content = ".readmore__content";
    this.buttonToggle = ".readmore__toggle";
  }

  bootstrap() {
    this.setNodes();
    this.init();
    this.addEventListeners();
  }

  setNodes() {
    this.nodes = {
      contentToggle: document.querySelector(this.content),
    };

    this.buttonToggle = this.nodes.contentToggle.parentElement.querySelector(
      this.buttonToggle
    );
  }

  init() {
    const { contentToggle } = this.nodes;

    this.stateContent = contentToggle.innerHTML;

    contentToggle.innerHTML = `${this.stateContent.substring(0, 800)}...`;
  }

  addEventListeners() {
    this.buttonToggle.addEventListener("click", this.onClick.bind(this));
  }

  onClick(event) {
    const targetEvent = event.currentTarget;
    const { contentToggle } = this.nodes;

    if (targetEvent.getAttribute("aria-checked") === "true") {
      targetEvent.setAttribute("aria-checked", "false");
      contentToggle.innerHTML = this.stateContent;
      this.buttonToggle.innerHTML = "Show Less";
    } else {
      targetEvent.setAttribute("aria-checked", "true");
      contentToggle.innerHTML = `${this.stateContent.substring(0, 800)}...`;
      this.buttonToggle.innerHTML = "Show more";
    }
  }
}

const initReadMore = new readMore();
initReadMore.bootstrap();
//about read more end
$(document).ready(function () {
  $(".Modern-Slider").slick({
    autoplay: true,
    autoplaySpeed: 10000,
    speed: 600,
    slidesToShow: 1,
    slidesToScroll: 1,
    pauseOnHover: false,
    dots: true,
    pauseOnDotsHover: true,
    cssEase: "linear",
    // fade:true,
    draggable: false,
    prevArrow: '<button class="PrevArrow"></button>',
    nextArrow: '<button class="NextArrow"></button>',
  });
});
