function cari(){
  $('#mds, .mda').show();
};
$('.mda').on('click',function(){
  $('#mds').hide();
  $(this).hide();
});
$(document).keyup(function(e) {
  if (e.key === "Escape") { // escape key maps to keycode `27`
    $('#mds, .mda').hide();
    $('input').blur();
 }
});
var options = {
    valueNames: [ 'ak1', 'ak2' ]
  };
  
  var userList = new List('users', options);