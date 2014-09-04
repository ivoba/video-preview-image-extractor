<?php

namespace Ivoba\VideoPreviewImageExtractor;


use Ivoba\ImageExtractor\ImageExtractor;
use Ivoba\VideoPreviewImageExtractor\Extractor\DailymotionExtractor;
use Ivoba\VideoPreviewImageExtractor\Extractor\VimeoExtractor;
use Ivoba\VideoPreviewImageExtractor\Extractor\YoutubeExtractor;

class VideoPreviewImageExtractor extends ImageExtractor
{

    /**
     * factory method to create default VideoPreviewImageExtractor
     * @return VideoPreviewImageExtractor
     */
    public static function create()
    {
        $vimeoExtractor = VimeoExtractor::create();
        $youtubeExtractor = YoutubeExtractor::create();
        $dailymotionExtractor = DailymotionExtractor::create();
        return new self([$vimeoExtractor,
                         $youtubeExtractor,
                         $dailymotionExtractor],
                        $filter = []);
    }
} 