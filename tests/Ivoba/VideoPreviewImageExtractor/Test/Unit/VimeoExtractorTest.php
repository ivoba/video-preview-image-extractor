<?php

namespace Ivoba\VideoPreviewImageExtractor\Test\Unit;

use Ivoba\VideoPreviewImageExtractor\Extractor\VimeoExtractor;

class VimeoExtractorTest extends \PHPUnit_Framework_TestCase
{
    public function testCreate(){
        $extractor = VimeoExtractor::create();
        $this->assertInstanceOf('Ivoba\VideoPreviewImageExtractor\Extractor\VimeoExtractor', $extractor);
    }
} 