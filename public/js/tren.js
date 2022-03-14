// === 2018 ===
var divs = $('.color-2018s');
var kks = $('.kks');
var ddn = $('.ddn');
$(window).on('scroll', function() {
   var st = $(this).scrollTop();
   divs.css({ 'opacity' : (0 + st/150)});
   ddn.css({ 'opacity' : (0 + st/150)});
      if(st) {
        //  document.getElementById("tx-years").style.fontSize = "3rem";
         kks.css("color",'#fff');
      }else {
        //  document.getElementById("tx-years").style.fontSize = "2rem";
         kks.css("color",'#000');
      }
});

// var scene = document.getElementById('scene');
// var parallaxInstance = new Parallax(scene);

$(window).scroll(function() {
  
    // selectors
    var $window = $(window),
        $body = $('body'),
        $panel = $('.panel');
    
    // Change 33% earlier than scroll position so colour is there when you arrive.
    var scroll = $window.scrollTop() + ($window.height() / 3);
   
    $panel.each(function () {
      var $this = $(this);
      
      // if position is within range of this panel.
      // So position of (position of top of div <= scroll position) && (position of bottom of div > scroll position).
      // Remember we set the scroll to 33% earlier in scroll var.
      if ($this.position().top <= scroll && $this.position().top + $this.height() > scroll) {
            
        // Remove all classes on body with color-
        $body.removeClass(function (index, css) {
          return (css.match (/(^|\s)color-\S+/g) || []).join(' ');
        });
         
        // Add class of currently active div
        $body.addClass('color-' + $(this).data('color'));
      }
    });    
    
  }).scroll();

  var a2a_config = a2a_config || {};
  a2a_config.icon_color = "#0062cc,#ffffff";

  var swiper1 = new Swiper('.swiper-18', {
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
  });
  // === End 2018 ===
  // === 2019 ===
  // var swiper2 = new Swiper('.swiper-19', {
    //   slidesPerView: 1.2,
    //     spaceBetween: 30,
    //   pagination: {
      //     el: '.swiper-pagination',
      //     clickable: true,
      //   },
      // });
      $(".hero").click(function() {
        $('html,body').animate({
                  scrollTop: $("#hero").offset().top - 0},
                  1000);
          });
      // === End 2019 ===