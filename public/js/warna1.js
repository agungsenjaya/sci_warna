//   ==== Warna ====
$('.ans').hide();
var tok,tok;
$('.b1').hide();
$('#loading').modal('show');
$.ajax({
    type: "POST",
    url: "http://192.168.1.6:8000/api/auth/login",
    data:({
        email : 'scipaint@gmail.com',
        password: 'pdl6866128'
      }),
      cache: false,
      global: true,
    success: function (res1) {
        $.getJSON("http://192.168.1.6:8000/api/brands?token=" + res1.token,
        function (res2) {
          $('#loading').modal('hide');
            jok = res2;
            for (let iin = 0; iin < jok.length; iin++) {
                var eem = jok[iin];
                if ($('.a'+eem.id).length) {
                    $('.a'+eem.id).html(`<div class="p-4 p-0-mobile mt-mobile aa1" id="${eem.id}">
                    <div class="mks d-none">${eem.judul}</div>
                    <div class="media">
                    <div class="d-sm-none d-block mr-3">
                    <div class="round-icon bg-primary p-small">
                      <div class="round-icon bg-light" style="height:60px;width:60px;"></div>
                    </div>
                    </div>
                    <div class="media-body">
                    <h4 class="mb-0 title-2 text-capitalize">${eem.judul}</h4>
                    <img src="http://192.168.1.6:8080/img/palette.png" alt="" width="100%" height="8" class="d-none">
                    <p class="text-secondary">Ekslpor warna untuk pengecatan <br> rumah anda.</p>
                    <div class="d-none d-sm-block">
                    <div class="btn btn-primary rounded-pill">Select Brands</div>
                    </div>
                    </div>
                    </div>
                  </div>`);
                }
            }
            var a;
            var b = [];
            $('.aa1').on('click',function(){
              $('.b1').append(`<div class="bb1 row"></div>`);
              $('#loading').modal('show');
                // $('#smartwizard').smartWizard("next");
                var kkn = $(this).find('.mks');
                a = this.id;
                // $('.ens').text($(this).text());
                $('.ens').text(kkn.text());
                $('.ans').show();
                // ====
                $.ajax({
                  type: "POST",
                  url: "http://192.168.1.6:8080/api/auth/login",
                  data:({
                      email : 'scipaint@gmail.com',
                      password: 'pdl6866128'
                    }),
                    cache: false,
                    global: true,
                  success: function (res3) {
                    $.getJSON("http://192.168.1.6:8080/api/products?token=" + res3.token,
                      function (res4) {
                        for (let oon = 0; oon < res4.length; oon++) {
                          var oom = res4[oon];
                          if (oom.brand_id == a) {
                            // b.push(oom.id);
                            // b.push('id' + ' : ' + oom.id + ' , ' + 'kate_id' + ' : ' + oom.kate_id);
                            b.push({id: oom.id ,kate_id: oom.kate_id,judul: oom.judul, ktt: oom.ktt, slug: oom.slug});
                          }
                        }

                        $.getJSON("http://192.168.1.6:8080/api/warnas?token=" + res3.token,
                        function (res5) {
                          $('#loading').modal('hide');
                          for (let aan = 0; aan < b.length; aan++) {
                            var aam = b[aan];
                            var c = 0;

                            // $.getJSON(`http://192.168.1.6:8000/api/products/${aam.id}?token=` + res1.token,
                            // function (res6) {
                            // });
                            $('.bb1').append(`<a href="http://192.168.1.6:8080/palet-warna/${aam.slug}" class="col-md-6 my-4 aaaa1 text-dark">
                            <div class="p-4 h-100 p-0-mobile">
                            <div class="media">
                            <div class="d-sm-none d-block mr-3">
                    <div class="round-icon bg-primary p-small">
                      <div class="round-icon bg-light" style="height:60px;width:60px;"></div>
                    </div>
                    </div>
                              <div class="media-body">
                              <h4 class="text-capitalize title-2 mb-0">${aam.judul}</h4>
                              <p class="text-secondary mb-0">Warna <span class="text-capitalize">${aam.judul}</span></p>
                              <p class="text-secondary text-capitalize d-none d-sm-block">${aam.ktt}</p>
                              <div class="d-none d-sm-block">
                                <div class="btn btn-primary rounded-pill">Select Product</div>
                              </div>
                              </div>
                            </div>
                            </div>
                          </a>`);

                            // for (let ann = 0; ann < res5.length; ann++) {
                            //   var amm = res5[ann];
                            //   if (amm.kate_id == aam.kate_id) {
                            //     c++;
                            //   }
                            // }
                            // alert(c);
                            $('.aaa1').hide();
                            $('.b1').show();
                            // ====
                            $('.aaaa1').on('click',function(){
                              $('#loading').modal('show');
                            })
                            // ====

                          }
                        });
                        
                      });
                      $('.trs').hide();
                  }
                });
                // ====
            });
        });
    }
});
// ======
// $(document).bind("ajaxSend", function(){
//     $("#loading").show();
//   }).bind("ajaxComplete", function(){
//     $("#loading").hide();
//   }).bind("ajaxError", function(){
//     $("#loading").show();
//   });
//   ==== End Warna ====