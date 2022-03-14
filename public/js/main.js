// $('#toTop').hide();
// $(window).scroll(function() {
//     if ($(this).scrollTop()) {
//         $('#toTop:hidden').stop(true, true).show();
//     } else {
//         $('#toTop').stop(true, true).fadeOut();
//     }
// });
// $("#toTop").click(function() {
//     $(window).scrollTop(0);
//   });

var loading = document.getElementById('modalLoading');
var bas = new bootstrap.Modal(loading);

var dom = document.getElementById('liveToast');
if(dom) {
    var toast = new bootstrap.Toast(dom);
    toast.show();
}

// Fancybox.bind("[data-fancybox]", {
//     Image: {
//         zoom: true,
//     },
// });


// var loading = document.getElementById('modalLoading');
// if(loading) {
//     var toast = new bootstrap.Modal(dom);
//     toast.show();
// }


// $('.produk').on('click',function(){
//     $('.menu').addClass('d-none');
//     $('.sub-menu').removeClass('d-none');
// });

// $('.produk-back').on('click',function(){
//     $('.sub-menu').addClass('d-none');
//     $('.menu').removeClass('d-none');
// });

// var modalMenu = document.getElementById('modalMenu')
// modalMenu.addEventListener('hidden.bs.modal', function (event) {
//     $('.sub-menu').addClass('d-none');
//     $('.menu').removeClass('d-none');
// });