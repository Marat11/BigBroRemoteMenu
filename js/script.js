$(document).ready(function(){
  $('.links').hover(function(){
    if (!$('.links').hasClass('active')) {
      $('.links').addClass('active');
    }
  }, function() {
    var visible = false;
    $('.links-item').each(function(index, item) {
      console.log(item);
      if ($(item).css('display') == 'block') {
        visible = true;
      }
    });
    console.log(visible);
    if ($('.links').hasClass('active') && !visible) {
      $('.links').removeClass('active');
    }
  });

});