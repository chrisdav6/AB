$(() => {

  //Carousel settings
  $('#carousel .carousel').carousel({
    interval: 20000
  });

  //Product Carousel Settings
  $('#productCarousel .carousel').carousel({
    interval: 20000
  });

  //Enable Bootstrap tooltips
  $('[data-toggle="tooltip"]').tooltip();

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

