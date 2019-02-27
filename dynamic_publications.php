<?php
  function stripEcisFromLabel($label) {
    return preg_replace('/^ECIS\s/', "", $label);
  }

  $publications_xml = simplexml_load_file('./publication_xml/TestPapers.xml');
  $publications_json = json_encode($publications_xml);

  $records = $publications_xml->records;

  $publication_raw_labels = [];
  foreach ($records->record as $record) {
    if ($record->label != '') {
      $publication_raw_labels = array_merge($publication_raw_labels, explode(";", (string)$record->label));
    }
  }

  $unique_publication_raw_labels = array_unique($publication_raw_labels);

  //Remove leading "ECIS " from each label.
  $publication_labels = array_map("stripEcisFromLabel", $unique_publication_raw_labels);

  sort($publication_labels);

  class Publication {
    protected $_record;
    
    public function __construct($record) {
      $this->_record = $record;
    }

    public function getTitle() {
      return $this->_record->titles->title;
    }

    public function getElectronicResourceNum() {
      return $this->_record->{'electronic-resource-num'};
    }

    public function getDelimitedPublicationLabels() {
      return $this->_record->label;
    }

    public function getPublicationLabels() {
      $delimited_labels = $this->getDelimitedPublicationLabels();

      if ($delimited_labels != '') {
        $delimited_raw_labels = explode(";", (string)$delimited_labels);
        $labels = array_map("stripEcisFromLabel", $delimited_raw_labels);
        return $labels;
      } else {
        return [];  
      }
    }

    public function getPublishedDates() {
      return $this->_record->dates->year;
    }

    public function echoDoiLinkHtml() {
      $electronic_resource_num = $this->getElectronicResourceNum();

      echo "      <a href=\"http://doi.org/" . $electronic_resource_num . "\" target=blank>doi:" . $electronic_resource_num . "</a>\n";
    }

    public function echoPublicationLabelsHtml() {
      $publication_labels = $this->getPublicationLabels();

       if (count($publication_labels) > 0) {
        echo "      <div class=\"publication-label-badges\">";
        foreach ($publication_labels as $publication_label) {
          echo "        <span class=\"publication-label-badge\">", $publication_label, "</span>";
        }
        echo "      </div>";
      }
    }
  }

  class PublicationInJournal extends Publication {
    public function getAuthors() {
      // Should we choose to rearange last/first names
      // $authorArray = array();
      // foreach ((array)$authors as $author) {
      //  $authorArray[] = $author; //faster than push
      // }

      //yes, author is the array! (bad naming in the XML)
      return (array)($this->_record->contributors->authors->author);
    }

    public function getPublishedIn() {
      return $this->_record->periodical->{'full-title'};
    }

    public function getPublishedVolume() {
      return $this->_record->volume;
    }

    public function getPublishedIssue() {
      return $this->_record->issue;
    }

    public function getPublishedPages() {
      return $this->_record->pages;
    }


    public function echoTableRow($publication_index) {
      echo "<tr>\n";
      echo "  <td>\n";
      echo "    <div class=\"publication-item\">\n";
      echo "      <span class=\"publication-authors\">", implode(",", $this->getAuthors()), "</span>\n";
      echo "      <span class=\"publication-date\">(", $this->getPublishedDates(), ").</span>\n";
      echo "      <span class=\"publication-title\">\"", $this->getTitle(), ".\"</span>\n";
      echo "      <span class=\"publication-published-in\">", $this->getPublishedIn(), "</span>\n";
      echo "      <span class=\"publication-published-volume\">", $this->getPublishedVolume(), "</span>\n";
      echo "      <span class=\"publication-published-issue\">(", $this->getPublishedIssue(), ")</span>\n";
      echo "      <span class=\"publication-published-pages\">: ", $this->getPublishedPages(), ".</span>\n";
      $this->echoDoiLinkHtml();
      echo "      <a href=\"#\" class=\"publication-details-link\" data-publication-index=\"", $publication_index, "\"><b>[Abstract]</b></a>\n";
      $this->echoPublicationLabelsHtml();
      echo "    </div>\n";
      echo "  </td>\n";
      echo "  <td>" . $this->getPublishedDates() . "</td>\n";
      echo "  <td>" . $this->getDelimitedPublicationLabels() . "</td>\n";
      echo "</tr>\n";
    }
  }

  class PublicationInBook extends Publication {
    public function getAuthor() {
      return $this->_record->contributors->{'secondary-authors'}->author;
    }

    public function getPublisher() {
      return $this->_record->publisher;
    }

    public function echoTableRow($publication_index) {
      echo "<tr>\n";
      echo "  <td>\n";
      echo "    <div class=\"publication-item\">\n";
      echo "      <span class=\"publication-authors\">", $this->getAuthor(), "</span>\n";
      echo "      <span class=\"publication-title\">\"", $this->getTitle(), ".\"</span>\n";
      echo "      <span class=\"publication-publisher\">", $this->getPublisher(), "</span>\n";
      $this->echoDoiLinkHtml();
      echo "      <a href=\"#\" class=\"publication-details-link\" data-publication-index=\"", $publication_index, "\"><b>[Details]</b></a>\n";
      $this->echoPublicationLabelsHtml();
      echo "    </div>\n";
      echo "  </td>\n";
      echo "  <td>" . $this->getPublishedDates() . "</td>\n";
      echo "  <td>" . $this->getDelimitedPublicationLabels() . "</td>\n";
      echo "</tr>\n";
    }
  }
?>