<?php

namespace Ivoba\VideoPreviewImageExtractor\Extractor;


use TubeLink\TubeLinkInterface;

class VimeoExtractor extends IframeExtractor
{
    function __construct(TubeLinkInterface $tubeLink, $xpath = '//iframe[contains(@src, "player.vimeo.com")]')
    {
        $this->tubeLink = $tubeLink;
        $this->xpath = $xpath;
    }

    public static function create()
    {
        $tubeLink = new \TubeLink\TubeLink();
        $tubeLink->registerService(new \TubeLink\Service\Vimeo());

        return new self($tubeLink, $xpath = '//iframe[contains(@src, "player.vimeo.com")]');
    }
} 