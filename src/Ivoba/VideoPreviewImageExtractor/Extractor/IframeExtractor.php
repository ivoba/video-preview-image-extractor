<?php

namespace Ivoba\VideoPreviewImageExtractor\Extractor;


use Ivoba\ImageExtractor\Entity\Image;
use Ivoba\ImageExtractor\ExtractorInterface;
use Symfony\Component\DomCrawler\Crawler;
use TubeLink\TubeLinkInterface;

class IframeExtractor implements ExtractorInterface
{

    protected $tubeLink;
    protected $xpath;

    function __construct(TubeLinkInterface $tubeLink, $xpath = '//iframe')
    {
        $this->tubeLink = $tubeLink;
        $this->xpath = $xpath;
    }

    /**
     * @inheritdoc
     */
    public function extract(Crawler $crawler)
    {
        $images = [];
        $tags = $crawler->filterXPath($this->xpath);
        foreach ($tags as $iframe) {
            $src = null;
            $height = null;
            $width = null;
            $title = null;
            $attributes = [];
            foreach ($iframe->attributes as $attr) {
                switch ($attr->name) {
                    case 'src':
                        $tube = $this->tubeLink->parse($attr->value);
                        if ($img = $tube->thumbnail()) {
                            $src = $img;
                        }
                        break;
                    case 'width':
                        $width = null; //$attr->value;
                        break;
                    case 'height':
                        $height = null; //$attr->value;
                        break;
                    case 'alt':
                        $title = $attr->value;
                        break;
                    case 'title':
                        $title = $attr->value;
                        break;
                    default:
                        $attributes[$attr->name] = $attr->value;
                        break;
                }
            }
            if ($src) {
                $images[] = new Image($src, $height, $width, $title, $attributes);
            }
        }
        return $images;
    }
} 