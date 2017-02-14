$(document).ready(function(){
  $('.links').niceScroll();
  $('.links').hover(function(){
    if (!$('.links').hasClass('active')) {
      $('.links').addClass('active');
    }
  }, function() {
    var visible = false;
    $('.links-item').each(function(index, item) {
      if ($(item).css('display') == 'block') {
        visible = true;
      }
    });
    if ($('.links').hasClass('active') && !visible) {
      $('.links').removeClass('active');
    }
  });

});