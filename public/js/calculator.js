$(document).ready(function(){
		// $('#calculator').each(function() {
		//         $(this).validate({
		//         });
		//     });
	    $('#button1').click(function () {
	        if ($("#calculator").valid()) {
	            var b = parseFloat($('#2').val());
				var c = parseFloat($('#3').val() * 1.80);
				var d = parseFloat($('#4').val() * 1.08);
				var e = b - ( c + d);
				var f = e / $('#1').val();
				if (f.toFixed() <= 0) {
					$('#5').text(1);
				} else {
					$('#5').text(f.toFixed());
				}
				$('#rest').modal({
					show:true,
					keyboard: false,
					backdrop: 'static',
				});
		        }
	    });
		$('#1').on('change', function(){
			var a = $('option:selected').attr("class");
			if (a == 'k') {
				$('#7').text('Kem-Tone');
				$('#6').attr("href", "/product/view/kem-tone-satin-finish-paint");
			}else if (a == 's') {
				$('#7').text('Spectrum');
				$('#6').attr("href", "/product/view/spectrum-interior-exterior-paint");
			}else if (a == 'c') {
				$('#7').text('ColorTone');
				$('#6').attr("href", "/product/view/colortone");
			} else if (a == 't') {
				$('#7').text('Tamitex');
				$('#6').attr("href", "/product/view/tamitex-cat-tembok");
			} else if (a == 'v') {
				$('#7').text('Vinotex');
				$('#6').attr("href", "/product/view/vinotex-cat-tembok");
			} else if (a == 'p') {
				$('#7').text('Panatex');
				$('#6').attr("href", "/product/view/panatex-cat-tembok");
			} else if (a == 'a') {
				$('#7').text('Apollo');
				$('#6').attr("href", "/product/view/apollo-cat-tembok");
			}
		});
		$('#button2').click(function(){
		        $('#calculator')[0].reset();
		        // $('#calculator').validate().destroy();
		  });
		$('.number').keypress(function (event) {
		    var keycode = event.which;
		    if (!(event.shiftKey == false && (keycode == 46 || keycode == 8 || keycode == 37 || keycode == 39 || (keycode >= 48 && keycode <= 57)))) {
		        event.preventDefault();
		    }
		});
});