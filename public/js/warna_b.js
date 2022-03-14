var galleryThumbs = new Swiper('.gallery-thumbs', {
    spaceBetween: 0,
    slidesPerView: 4,
    freeMode: false,
    lazy: true,
    watchSlidesVisibility: true,
    watchSlidesProgress: true,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    breakpoints: {
      1024: {
        slidesPerView: 4,
        spaceBetween: 0,
      },
      640: {
        slidesPerView: 3.4,
        spaceBetween: 0,
      },
      320: {
        slidesPerView: 3.4,
        spaceBetween: 0,
      }
    }
  });
var swiper = new Swiper('.slider-1', {
    loop:false,
    speed: 1,
    lazy: true,
    slidesPerView: 1,
    spaceBetween: 20,
    autoplay:false,
    allowTouchMove: false,

    on: {
      slideChange: function() {
        // console.log(this.realIndex);
        // $('.real-index').html(this.realIndex);
      }
    },

    effect:'slide',
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    thumbs: {
      swiper: galleryThumbs
    },
    breakpoints: {
      1024: {
        slidesPerView: 1,
        spaceBetween: 20,
      },
      640: {
        slidesPerView: 1,
        spaceBetween: 20,
      },
      320: {
        slidesPerView: 1,
        spaceBetween: 10,
      }
    }
  });

$('.closen').on('click',function(){
  $("#hid").hide();
});
var aas = $('.img2').attr('id');
$('#loading').modal('show');

      $.getJSON(`https://sci-paint.com/api/products/${aas}?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOi8vMTkyLjE2OC4xMDAuMjIzOjgwMDAvYXBpL2F1dGgvbG9naW4iLCJpYXQiOjE2MDkzODc5MDQsIm5iZiI6MTYwOTM4NzkwNCwianRpIjoiR2JiQTY5SHJYMXNYWUxRSCIsInN1YiI6MSwicHJ2IjoiODdlMGFmMWVmOWZkMTU4MTJmZGVjOTcxNTNhMTRlMGIwNDc1NDZhYSJ9.ROKm-PW9nrn8OYNlbRdC2hdtbihBBGIAnP0pSUyhpT0`,
      function (res2) {
        $('.img2').attr('src',res2.img);
    }).done(function(){
      $('#loading').modal('hide');
    }).fail(function(){
      $('#loading').modal('show');
    });

      $.getJSON(`http://warna.sci-paint.com/api/warnas?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOi8vMTkyLjE2OC4xMDAuMjIzOjgwODAvYXBpL2F1dGgvbG9naW4iLCJpYXQiOjE2MDkzODc4MDcsIm5iZiI6MTYwOTM4NzgwNywianRpIjoiS0M5VzZjT2l4VWI0ZDBnaSIsInN1YiI6MSwicHJ2IjoiODdlMGFmMWVmOWZkMTU4MTJmZGVjOTcxNTNhMTRlMGIwNDc1NDZhYSJ9.NVdNWa0g2kg5OwNwpcofVDaNFGZR9lf0pzLQWc1YbwA`,
      function (res2) {
        warnas = res2;
    }).done(function(){
      $('#loading').modal('hide');
    }).fail(function(){
      $('#loading').modal('show');
    });
  

$('#ebd, .tp').hide();

$( "#abd" ).click(function() {
  var wasVisible = $("#ebd").is(":visible");
  $(".tp").hide();
  $(".dn").show();
  $( "#ebd" ).toggle( "slow", function() {
  if (!wasVisible) {
    $(".tp").show();
    $(".dn").hide();
  }
  });
});