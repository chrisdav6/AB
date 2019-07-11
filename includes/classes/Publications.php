<?php

require_once __DIR__ . '/Publication.php';

class Publications
{

    /**
     * @var SimpleXMLElement
     */
    private $publicationsXML;

    public $publications;

    public function __construct()
    {
        $this->publicationsXML = simplexml_load_file(dirname(dirname(__DIR__)) . '/public/xml/publications.xml');

        $this->setPublications();
    }

    /**
     * Set Publications from XML file and instantiate new object
     * based on type
     *
     * @return array
     */
    public function setPublications()
    {
        $publications = [];

        foreach ($this->publicationsXML->xpath('records/record') as $record) {
            $publications[] = new Publication($record);
        }

        $this->publications = $publications;
    }

    /**
     * Get a unique set of labels from all publications
     *
     * @return array
     */
    public function getUniqueLabels()
    {
        $labels = [];

        foreach ($this->publications as $publication) {
            $_labels = $publication->getPublicationLabels();
            $labels = array_merge($labels, $_labels);
        }

        $labels = array_unique($labels);

        sort($labels);

        return $labels;
    }
}