<?php

require_once __DIR__ . '/Publication.php';

class Publications
{

    /**
     * @var SimpleXMLElement
     */
    private $publications;

    public function __construct()
    {
        $this->publications = simplexml_load_file(dirname(dirname(__DIR__)) . '/public/xml/publications.xml');
    }

    /**
     * Get Publications from XML file and instantiate new object
     * based on type
     *
     * @return array
     */
    public function getPublications()
    {
        $publications = [];

        foreach ($this->publications->xpath('records/record') as $record) {
            $publications[] = new Publication($record);
        }

        return $publications;
    }

    /**
     * Get a unique set of labels from all publications
     *
     * @return array
     */
    public function getUniqueLabels()
    {
        $labels = [];

        foreach ($this->publications->xpath('records/record/label') as $publicationLabels) {
            $_labels = explode(';', $publicationLabels);
            $labels = array_merge($labels, $_labels);
        }

        $labels = array_map('Publications::stripECIS', array_unique($labels));

        sort($labels);

        return $labels;
    }

    /**
     * Strip the beginning of any string of "ECIS "
     *
     * @param $string
     * @return string|string[]|null
     */
    public static function stripECIS($string)
    {
        return preg_replace('/^ECIS\s/', '', $string);
    }
}