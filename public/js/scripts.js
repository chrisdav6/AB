$(function () {

  //navbar dropdown submenu
  $('.dropdown-submenu > a').on('click', function (e) {
    var submenu = $(this);
    $('.dropdown-submenu .dropdown-menu').removeClass('show');
    submenu.next('.dropdown-menu').addClass('show');
    e.stopPropagation();
  });

  $('.dropdown-submenu').on('click', function (e) {
    var submenu = $(this);
    $('.dropdown-submenu .dropdown-menu').removeClass('show');
    submenu.find('.dropdown-menu').addClass('show');
    e.stopPropagation();
  });

  $('.dropdown').on('hidden.bs.dropdown', function () {
    // hide any open menus when parent closes
    $('.dropdown-menu.show').removeClass('show');
  });

  //Carousel settings
  // $('#carousel .carousel').carousel({
  //   interval: 3000
  // });
  $('#carousel .carousel').carousel('pause');

  //Product Carousel Settings
  $('#productCarousel .carousel').carousel({
    interval: 20000,
  });

  //Enable Bootstrap tooltips
  $('[data-toggle="tooltip"]').tooltip();

  //Enable Smooth Scroll - Ignore Bootstrap Tabs
  var scroll = new SmoothScroll('a[href*="#"]', {
    ignore: '[data-scroll-ignore], .page-link',
    speed: 1000,
  });

  //Scroll to top button animation
  var offsetTop = $(window).height();

  $(window).scroll(function () {
    if ($('html').scrollTop() > offsetTop && $(document).width() > 700) {
      $('#scrollBtn').fadeIn();
    } else {
      $('#scrollBtn').fadeOut();
    }
  });

  $('#scrollBtn').on('click', function () {
    $('html').animate({
      scrollTop: 0,
    }, 500);
  });

  //Load Youtube Videos on Click
  $('.youtubeEmbed').each(function () {
    // Set the BG image from the youtube ID
    $(this).
      css('background-image',
        'url(https://i.ytimg.com/vi/' + this.id + '/hqdefault.jpg)');
    // Click the video div
    $(document).delegate('#' + this.id, 'click', function () {
      // Build embed URL
      var iframe_url = 'https://www.youtube.com/embed/' + this.id +
        '?autoplay=1&autohide=1';
      // Grab extra parameters set on div
      if ($(this).data('params')) iframe_url += '&' + $(this).data('params');
      // Build iframe tag
      var iframe = $('<iframe/>', {
        'allowfullscreen': 'allowfullscreen',
        'frameborder': '0',
        'src': iframe_url,
      });
      // Replace the YouTube thumbnail with YouTube HTML5 Player
      $(this).append(iframe);
    });// /click
  }); // /each video

});

// Publications
jQuery(document).ready(function () {
  (function ($) {
    var $publicationsTable = $('#publications-table');

    if ($publicationsTable.length) {
      var $publicationLabels = $('#publication-labels > a:not(".submitPubBtn")');
      var publicationsDetailsTemplate = _.template(
        $('#publication-details-template').html());
      var $publicationsModal = $('#publications-modal');

      var publicationsDataTable = $publicationsTable.
        DataTable({
          order: [[0, 'desc']],
          columnDefs: [
            {
              targets: [1, 2],
              visible: false,
              searchable: true,
            },
            {
              targets: 0,
              orderData: [1],
            },
          ],
          ordering: false,
          dom: '<"row"<"col-sm-12"f>>' +
            '<"row"<"col-sm-5"i><"col-sm-7"p>>' +
            '<"row"<"col-sm-12"tr>>' +
            '<"row"<"col-sm-5"i><"col-sm-7"p>>',
          initComplete: function () {
            $publicationsTable.removeAttr('hidden').css('width', '100%');
          },
        });

      $publicationLabels.on('click', function (e) {
        e.preventDefault();
        var $this = $(this);
        var filter = $this.data('filter');
        var $labelsFilterMessage = $('#labels-filter-message');

        if ($this.hasClass('active')) {
          publicationsDataTable.columns().search('').draw();
          $this.removeClass('active');
          $labelsFilterMessage.html(null);
        } else {
          publicationsDataTable.columns(2).
            search(filter, false, true).
            draw();
          $publicationLabels.filter('.active').removeClass('active');
          $this.addClass('active');
          $labelsFilterMessage.html('In ' + filter);
        }
      });

      $publicationsModal.on('show.bs.modal', function (e) {
        var $modal = $(this);

        var $publication = $(e.relatedTarget).closest('.publication');
        var authors = $publication.find('.publication-authors').html();
        var title = $publication.find('.publication-title').html();
        var publishedIn = $publication.find('.publication-published-in').html();
        var volume = $publication.find('.publication-volume').html();
        var issue = $publication.find('.publication-issue').html();
        var date = $publication.find('.publication-year').html();
        var pages = $publication.find('.publication-pages').html();
        var doi = $publication.find('.publication-doi')[0];
        var abstract = $publication.data('abstract');
        var labels = $publication.find('.publication-labels').html();

        $modal.find('.modal-body').html(publicationsDetailsTemplate({
          authors: authors,
          title: title,
          publishedIn: publishedIn,
          volume: volume,
          issue: issue,
          date: date,
          pages: pages,
          doi: doi ? doi.outerHTML : null,
          abstract: abstract,
          labels: labels,
        }));
      });

      $publicationsModal.on('hidden.bs.modal', function (e) {
        var $modal = $(this);
        $modal.find('.modal-body').html(null);
      });
    }

  })(jQuery);
});
