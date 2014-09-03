<?php

namespace Ivoba\VideoPreviewImageExtractor;


use Ivoba\ImageExtractor\ImageExtractor;
use Ivoba\VideoPreviewImageExtractor\Extractor\VimeoExtractor;
use TubeLink\Service\Dailymotion;
use TubeLink\Service\Vimeo;
use TubeLink\Service\Youtube;
use TubeLink\TubeLink;

class VideoPreviewImageExtractor extends ImageExtractor
{

    /**
     * factory method to create default VideoPreviewImageExtractor
     * @return VideoPreviewImageExtractor
     */
    public static function create()
    {
        $tubeLink = new TubeLink();
        $tubeLink->registerService(new Youtube());
        $tubeLink->registerService(new Dailymotion());
        $tubeLink->registerService(new Vimeo());
        return new self([new VimeoExtractor($tubeLink)],
                        $filter = []);
    }
} 