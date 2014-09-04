<?php

namespace Ivoba\VideoPreviewImageExtractor\Extractor;


use TubeLink\TubeLinkInterface;

class YoutubeExtractor extends IframeExtractor
{
    function __construct(TubeLinkInterface $tubeLink, $xpath = '//iframe[contains(@src, "youtube.com/embed")]')
    {
        $this->tubeLink = $tubeLink;
        $this->xpath = $xpath;
    }

    public static function create()
    {
        $tubeLink = new \TubeLink\TubeLink();
        $tubeLink->registerService(new \TubeLink\Service\Youtube());

        return new self($tubeLink);
    }
} 