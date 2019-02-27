<?php
$header_class = 'publications';
$page_name = 'video';
include('includes/header.php');

include('dynamic_publications.php');
include('includes/sidebars/dynamic_publications.php');
?>



<!-- Base link/script for all pages REMOVE after install -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- -->


<!-- link/script for dynamic publications page -->
<link rel="stylesheet" type="text/css" href="./css/jquery.dataTables.min.css" />
<!-- publications.css after dataTables css to override defaults -->
<link rel="stylesheet" type="text/css" href="./css/dynamic_publications.css" />
<link rel="stylesheet" type="text/css" href="./css/magnific-popup.css" />
<script type="text/javascript" src="includes/jquery/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="includes/jquery/underscore-min.js"></script>
<script type="text/javascript" src="includes/jquery/jquery.magnific-popup.min.js"></script>
<!-- -->


<!-- REMOVE after install -->
<script type="text/javascript">
  //<![CDATA[
  $j = jQuery.noConflict();
  //]]>
</script>


<!-- server generated json from XML based publications -->
<script>
  var publications = <?php echo $publications_json; ?>;
</script>
<!-- -->

<!-- Lightbox markup dynmically filled upon choosing publication -->
<div id="publication-modal" class="publication-popup mfp-hide">
</div>

<div id="sub-content">
	<div class="content">
    
    <!-- New content for XML based publications -->
    <h2>Recent Publications</h2>
    <div id="publications-filter-message"></div>

    <a href="submit.php"><button style="margin-top: 10px;">Submit a Publication</button></a>

    <?php
      echo "<table id=\"publications-table\" class=\"publications-table\">\n";
      echo "  <thead>\n";
      echo "    <th></th>\n";
      echo "    <th></th>\n";
      echo "    <th></th>\n";
      echo "  </thead>\n";
      echo "  </tbody>\n";

      $publication_index = 0;
      foreach ($records->record as $record) {
        switch ($record->{'ref-type'}) {
          case '0':
            $publication = new PublicationInJournal($record);
            break;
          case '1':
            $publication = new PublicationInBook($record);
            break;
        }

        $publication->echoTableRow($publication_index);
        ++$publication_index;
      }

      echo "  </tbody>\n";
      echo "</table>\n";
    ?>

    <p>&nbsp;</p>
    <p>&nbsp;</p>
		<!-- -->

	</div>
</div>

<!-- Underscore template for journal based publication modal dialog -->
<script type="text/x-underscore" id='publication-journal-details-template'>
  <div class="publication-item-detail">
    <dl class="publication-item-description-list">
      <dt>Authors</dt>
      <dd class="publication-authors"><%= authors %></dd>

      <dt>Title</dt>
      <dd class="publication-title"><%= title %></dd>

      <dt>Published In</dt>
      <dd class="publication-title"><i><%= publishedIn %></i></dd>

      <dt>Volume</dt>
      <dd class="publication-published-volume"><%= volume %></dd>

      <dt>Issue</dt>
      <dd class="publication-published-issue"><%= issue %></dd>

      <dt>Date</dt>
      <dd class="publication-published-date"><%= date %></dd>

      <dt>Pages</dt>
      <dd class="publication-published-pages"><%= pages %>.</dd>

      <dt>DOI</dt>
      <dd>
        <a href="http://doi.org/<%= doi %>" target="blank">doi:<%= doi %></a>
      </dd>

      <dt>Abstract</dt>
      <dd><%= abstract %></dd>

      <dt>Label</dt>
      <dd><%= label %></dd>
    </dl>
  </div>
</script>

<!-- Underscore template for book based publication modal dialog -->
<script type="text/x-underscore" id='publication-book-details-template'>
  <div class="publication-item-detail">
    <dl class="publication-item-description-list">
      <dt>Authors</dt>
      <dd class="publication-authors"><%= authors %></dd>

      <dt>Title</dt>
      <dd class="publication-title"><%= title %></dd>

      <dt>Publisher</dt>
      <dd class="publication-publisher"><i><%= publisher %></i></dd>
      
      <dt>Date</dt>
      <dd class="publication-published-date"><%= date %></dd>

      <dt>DOI</dt>
      <dd>
        <a href="http://doi.org/<%= doi %>" target="blank">doi:<%= doi %></a>
      </dd>

      <dt>Label</dt>
      <dd><%= label %></dd>
    </dl>
  </div>
</script>

<script type="text/javascript">
  var publicationsJournalDetailsTemplate;
  var publicationsBookDetailsTemplate;
  var publicationsDataTable;

  function formatLabel(rawLabel) {
    'use strict';
    
    if (typeof rawLabel === 'undefined') { return ''; }

    var labels = rawLabel.split(';');
    labels = _.map(labels, function(label) {
      return label.replace(/^ECIS\s/i, '');
    });
    return labels.join(', ');
  }

  // Current site referenced jQuery as $j
  $j(document).ready(function(){
    'use strict';
    (function($) {
      publicationsJournalDetailsTemplate = _.template($('#publication-journal-details-template').html());
      publicationsBookDetailsTemplate = _.template($('#publication-book-details-template').html());

      publicationsDataTable = $('#publications-table').DataTable({
        order: [[ 0, 'desc' ]],
        columnDefs: [
          {
            targets: [ 1, 2 ],
            visible: false,
            searchable: true
          },
          {
            targets: 0,
            orderData: [ 1 ]
          }
        ]
      });

      //Move Datatables elements to top of table
      $('#publications-table_info').detach().prependTo('#publications-table_wrapper');
      $('#publications-table_paginate').detach().prependTo('#publications-table_wrapper');
      $('#publications-table_filter').detach().prependTo('#publications-table_wrapper');
      
      $('.publication-label').click(function(){
        $(this).toggleClass( 'publication-label-filtering' );

        var filterLabels = [];
        $('.publication-label-filtering').each(function() {
          filterLabels.push( $(this).data('label') );
        });

        var regex;
        if (filterLabels.length > 0) {
          regex = '(' + filterLabels.join('|') + ')';

          var filterLabelsCount = filterLabels.length;
          var filterLabelsSentence;
          if (filterLabelsCount === 1) {
            filterLabelsSentence = filterLabels[0] + '.';
          } else {
            var partial = filterLabels.slice(0, filterLabelsCount-1);
            filterLabelsSentence = partial.join(', ') + ' or ' + filterLabels[filterLabelsCount-1];
          }

          $('#publications-filter-message').html('<h3>in ' + filterLabelsSentence + '</h3>');
        } else {
          regex = '';
          $('#publications-filter-message').html('');
        }
        
        publicationsDataTable.columns(2).search(regex, true, false).draw();
      });

      // Open the publication details in a modal dialog
      $(document).on('click', '.publication-details-link', function(){
        var publicationIndex = $(this).data('publication-index');
        var record = publications.records.record[publicationIndex * 1];
        var authors = '';
        var title = '';
        var templateData;
        
        switch (record['ref-type']) {
          case '0': //Journal
            authors = record.contributors.authors.author.join(', ');
            title = record.titles.title;
            var publishedIn = record.periodical['full-title'];

            templateData = {
              authors: authors,
              title: title,
              publishedIn: publishedIn,
              volume: record.volume,
              issue: record.issue,
              pages: record.pages,
              date: record.dates.year,
              doi: record['electronic-resource-num'],
              abstract: record.abstract,
              label: formatLabel(record.label)
            };
            $('#publication-modal').html( publicationsJournalDetailsTemplate(templateData) );

            break;
          case '1': //Book
            authors = record.contributors['secondary-authors'].author;
            title = record.titles.title;
            var publisher = record.publisher;

            templateData = {
              authors: authors,
              title: title,
              publisher: publisher,
              date: record.dates.year,
              doi: record['electronic-resource-num'],
              label: formatLabel(record.label)
            };
            $('#publication-modal').html( publicationsBookDetailsTemplate(templateData) );

            break;
        }

        $.magnificPopup.open({
          items: {
            src: '#publication-modal',
            type: 'inline'
          }
        });
      });

    })( jQuery );
  });
</script>

<?php
include('includes/footer.php');
?>

