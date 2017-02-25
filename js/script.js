$(document).ready(function () {
  var options        = {
        horizontal: 1,
        itemNav: 'basic',
//        smart: false,
        mouseDragging: 1,
        touchDragging: 1,
//        releaseSwing: 1,
//        startAt: 0,
//        speed: 300,
//        elasticBounds: true,
//        dragHandle: 1,
//        dynamicHandle: 1,
      },
      submenu_active = false;
  $('#links').sly(options, {
    move: function() {
      submenu_active = false;
      $('.children-menu').removeClass('active');
    }
  });
  $(".links-item").hover(function () {
    var key    = $(this).data('key'),
        offset = $(this).offset();
    $('.children-menu').removeClass('active');
    if ($('.children-menu[data-key="' + key + '"]').length > 0) {
      if (!$('.children-menu[data-key="' + key + '"]').hasClass('active')) {
        submenu_active = true;
        $('.children-menu[data-key="' + key + '"]').offset({left: offset.left});
        $('.children-menu[data-key="' + key + '"]').addClass('active');
      }
    }
  }, function () {
    if (!submenu_active) {
      $('.children-menu').removeClass('active');
    }
  });
  $('.children-menu').hover(function () {
    submenu_active = true;
  }, function () {
    submenu_active = false;
    $('.children-menu').removeClass('active');
  });
});