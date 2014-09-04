<?php

namespace Ivoba\VideoPreviewImageExtractor\Extractor;


use TubeLink\TubeLinkInterface;

class DailymotionExtractor extends IframeExtractor
{
    function __construct(TubeLinkInterface $tubeLink, $xpath = '//iframe[contains(@src, "dailymotion.com/embed")]')
    {
        $this->tubeLink = $tubeLink;
        $this->xpath = $xpath;
    }

    public static function create()
    {
        $tubeLink = new \TubeLink\TubeLink();
        $tubeLink->registerService(new \TubeLink\Service\Dailymotion());

        return new self($tubeLink);
    }
} 