$(window).on('resize', function() {
    if ($(window).width() <= 991) {
      $('.fixed').hide();
    } else {
      $('.fixed').show();
    }
  });