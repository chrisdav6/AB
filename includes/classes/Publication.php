<?php

class Publication
{
    protected $record;

    public function __construct(SimpleXMLElement $record)
    {
        $this->record = $record;
    }

    /**
     * Get publication type, "Journal Article", or "Book Section"
     *
     * @return string
     */
    public function getType()
    {
        return $this->record->{'ref-type'}['name']->__toString();
    }

    /**
     * Get publication title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->record->titles->title->__toString();
    }

    /**
     * Get publication electronics resource number
     *
     * @return string
     */
    public function getElectronicResourceNum()
    {
        return $this->record->{'electronic-resource-num'}->__toString();
    }

    public function getDelimitedPublicationLabels()
    {
        return $this->record->label->__toString();
    }

    /**
     * Get an array of publication labels after stripping all labels of "ECIS "
     *
     * @return array
     */
    public function getPublicationLabels()
    {
        $labels = explode(';', $this->record->label);

        return array_map('Publications::stripECIS', array_filter($labels));
    }

    /**
     * Get published dates, which turns out to be just a year
     *
     * @return string
     */
    public function getPublishedDates()
    {
        return $this->record->dates->year->__toString();
    }

    /**
     * Generate DOI Url from electronic resource number
     *
     * @return string
     */
    public function getDoiUrl()
    {
        return 'https://doi.org/' . $this->getElectronicResourceNum();
    }

    /**
     * Get an array of authors
     *
     * @return array
     */
    public function getAuthors()
    {
        $authors = $this->record->xpath('contributors/authors/author');

        return array_map(function ($author) {
            return $author->__toString();
        }, $authors);
    }

    /**
     * Get Publisher
     *
     * @return string
     */
    public function getPublisher()
    {
        return $this->record->publisher->__toString();
    }

    /**
     * Get published in periodical title
     *
     * @return string
     */
    public function getPublishedIn()
    {
        return $this->record->periodical->{'full-title'}->__toString();
    }

    /**
     * Get published Volume
     *
     * @return string
     */
    public function getPublishedVolume()
    {
        return $this->record->volume->__toString();
    }

    /**
     * Get published issue
     *
     * @return string
     */
    public function getPublishedIssue()
    {
        return $this->record->issue->__toString();
    }

    /**
     * Get published pages
     *
     * @return string
     */
    public function getPublishedPages()
    {
        return $this->record->pages->__toString();
    }

    /**
     * Get published abstract
     *
     * @return string
     */
    public function getAbstract()
    {
        return $this->record->abstract->__toString();
    }
}