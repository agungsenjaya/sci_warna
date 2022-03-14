// $('.ans').hide();
// var tok,jok;
// $('.b1').hide();
// $('#loading').modal('show');
// $('.b1').append(`<div class="bb1 row"></div>`);
// $.getJSON("http://warna.sci-paint.com/api/products?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOi8vMTkyLjE2OC4xMDAuMjIzOjgwODAvYXBpL2F1dGgvbG9naW4iLCJpYXQiOjE2MDkzODc4MDcsIm5iZiI6MTYwOTM4NzgwNywianRpIjoiS0M5VzZjT2l4VWI0ZDBnaSIsInN1YiI6MSwicHJ2IjoiODdlMGFmMWVmOWZkMTU4MTJmZGVjOTcxNTNhMTRlMGIwNDc1NDZhYSJ9.NVdNWa0g2kg5OwNwpcofVDaNFGZR9lf0pzLQWc1YbwA",function (result2) {
  $('#loading').modal('show');
$.ajax({
    type: "GET",
    url: "https://sci-paint.com/api/brands?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOi8vMTkyLjE2OC4xMDAuMjIzOjgwMDAvYXBpL2F1dGgvbG9naW4iLCJpYXQiOjE2MDkzODc5MDQsIm5iZiI6MTYwOTM4NzkwNCwianRpIjoiR2JiQTY5SHJYMXNYWUxRSCIsInN1YiI6MSwicHJ2IjoiODdlMGFmMWVmOWZkMTU4MTJmZGVjOTcxNTNhMTRlMGIwNDc1NDZhYSJ9.ROKm-PW9nrn8OYNlbRdC2hdtbihBBGIAnP0pSUyhpT0",
    data: "data",
    success: function (result1) {
        jok = result1;
            for (let iin = 0; iin < jok.length; iin++) {
                var eem = jok[iin];
                if ($('.a'+eem.id).length) {
                    $('.a'+eem.id).html(`<div class="p-4 p-0-mobile mt-mobile aa1" id="${eem.id}">
                    <div class="mks d-none">${eem.judul}</div>
                    <div class="media">
                    <i class="bi bi-box-arrow-in-up-right mr-3 d-sm-none d-block"></i>
                    <div class="media-body">
                    <h4 class="mb-0 title-2 text-capitalize">${eem.judul}</h4>
                    <img src="http://warna.sci-paint.com/img/palette.png" alt="" width="100%" height="8" class="d-none">
                    <p class="text-secondary">Ekslpor warna untuk pengecatan <br> rumah anda.</p>
                    <div class="d-none d-sm-block">
                    <div class="btn btn-primary">Select Brands</div>
                    </div>
                    </div>
                    </div>
                  </div>`);
                }
            }
            // =====
            var a;
            var b = [];
            $('.aa1').on('click',function(){
                $('#baking').removeClass('d-none');
              $('.aaa1').hide()
                a = this.id;
                $('#loading').modal('show');
                $.ajax({
                    type: "GET",
                    url: "http://warna.sci-paint.com/api/products?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOi8vMTkyLjE2OC4xMDAuMjIzOjgwODAvYXBpL2F1dGgvbG9naW4iLCJpYXQiOjE2MDkzODc4MDcsIm5iZiI6MTYwOTM4NzgwNywianRpIjoiS0M5VzZjT2l4VWI0ZDBnaSIsInN1YiI6MSwicHJ2IjoiODdlMGFmMWVmOWZkMTU4MTJmZGVjOTcxNTNhMTRlMGIwNDc1NDZhYSJ9.NVdNWa0g2kg5OwNwpcofVDaNFGZR9lf0pzLQWc1YbwA",
                    data: "data",
                    success: function (result2) {
                for (let index = 0; index < result2.length; index++) {
                    const aam = result2[index];
                    if (aam.brand_id == a) {
                $('.bb1').append(`<a href="http://warna.sci-paint.com/palet-warna/${aam.slug}" class="col-md-6 my-4 cc1 text-dark" id="${aam.brand_id}">
                <div class="p-4 h-100 p-0-mobile">
                <div class="media">
                <i class="bi bi-box-arrow-in-up-right mr-3 d-sm-none d-block"></i>
                  <div class="media-body">
                  <h4 class="text-capitalize title-2 mb-0">${aam.judul}</h4>
                  <p class="text-secondary mb-0">Warna <span class="text-capitalize">${aam.judul}</span></p>
                  <p class="text-secondary text-capitalize d-none d-sm-block">${result1[aam.brand_id].judul}</p>
                  
                  <div class="d-none d-sm-block">
                    <div class="btn btn-primary">Select Product</div>
                  </div>
                  </div>
                </div>
                </div>
              </a>`);
            }
            }
            },error: function(xhr) {
              $('#loading').modal('show');
          }
            }).done(function(data){
              $('#loading').modal('hide');
          });
                
            });
        },error: function(xhr) {
          $('#loading').modal('show');
      }
        }).done(function(data){
          $('#loading').modal('hide');
      });