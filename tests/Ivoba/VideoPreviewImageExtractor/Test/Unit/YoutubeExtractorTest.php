<?php

namespace Ivoba\VideoPreviewImageExtractor\Test\Unit;

use Ivoba\VideoPreviewImageExtractor\Extractor\YoutubeExtractor;

class YoutubeExtractorTest extends \PHPUnit_Framework_TestCase
{
    public function testCreate(){
        $extractor = YoutubeExtractor::create();
        $this->assertInstanceOf('Ivoba\VideoPreviewImageExtractor\Extractor\YoutubeExtractor', $extractor);
    }
} 