<?php

namespace Ivoba\VideoPreviewImageExtractor\Test;

use Ivoba\VideoPreviewImageExtractor\VideoPreviewImageExtractor;

class VideoPreviewImageExtractorTest extends \PHPUnit_Framework_TestCase
{

    public function testCreate(){
        $videoImagesExtractor = VideoPreviewImageExtractor::create();
        $this->assertInstanceOf('Ivoba\VideoPreviewImageExtractor\VideoPreviewImageExtractor', $videoImagesExtractor);

        $images = $videoImagesExtractor->extract(file_get_contents(__DIR__ . '/../Resources/embedded_videos.html'));
        $this->assertNotNull($images[0]->getSrc());
        $this->assertNotNull($images[1]->getSrc());
        $this->assertNotNull($images[1]->getSrc());

    }
} 