$(() => {

  //navbar dropdown submenu
  $('.dropdown-submenu > a').on("click", function (e) {
    var submenu = $(this);
    $('.dropdown-submenu .dropdown-menu').removeClass('show');
    submenu.next('.dropdown-menu').addClass('show');
    e.stopPropagation();
  });

  $('.dropdown-submenu').on("click", function (e) {
    var submenu = $(this);
    $('.dropdown-submenu .dropdown-menu').removeClass('show');
    submenu.find('.dropdown-menu').addClass('show');
    e.stopPropagation();
  });

  $('.dropdown').on("hidden.bs.dropdown", function () {
    // hide any open menus when parent closes
    $('.dropdown-menu.show').removeClass('show');
  });

  //Carousel settings
  // $('#carousel .carousel').carousel({
  //   interval: 3000
  // });
  $('#carousel .carousel').carousel("pause");

  //Product Carousel Settings
  $('#productCarousel .carousel').carousel({
    interval: 20000
  });

  //Enable Bootstrap tooltips
  $('[data-toggle="tooltip"]').tooltip();

  //Enable Smooth Scroll - Ignore Bootstrap Tabs
  const scroll = new SmoothScroll('a[href*="#"]', {
    ignore: '[data-scroll-ignore]',
    speed: 1000,
  });

  //Scroll to top button animation
  var offsetTop = $(window).height();

  $(window).scroll(function () {
    if ($("html").scrollTop() > offsetTop && $(document).width() > 700) {
      $("#scrollBtn").fadeIn();
    } else {
      $("#scrollBtn").fadeOut();
    }
  });

  $("#scrollBtn").on("click", function () {
    $('html').animate({
      scrollTop: 0
    }, 500);
  });

  //Load Youtube Videos on Click
  $(".youtubeEmbed").each(function () {
    // Set the BG image from the youtube ID
    $(this).css('background-image', 'url(http://i.ytimg.com/vi/' + this.id + '/hqdefault.jpg)');
    // Click the video div
    $(document).delegate('#' + this.id, 'click', function () {
      // Build embed URL
      var iframe_url = "http://www.youtube.com/embed/" + this.id + "?autoplay=1&autohide=1";
      // Grab extra parameters set on div
      if ($(this).data('params')) iframe_url += '&' + $(this).data('params');
      // Build iframe tag
      var iframe = $('<iframe/>', { 'allowfullscreen': 'allowfullscreen', 'frameborder': '0', 'src': iframe_url })
      // Replace the YouTube thumbnail with YouTube HTML5 Player
      $(this).append(iframe);
    });// /click
  }); // /each video

});

