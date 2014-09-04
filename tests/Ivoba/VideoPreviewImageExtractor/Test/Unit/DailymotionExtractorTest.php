<?php

namespace Ivoba\VideoPreviewImageExtractor\Test\Unit;

use Ivoba\VideoPreviewImageExtractor\Extractor\DailymotionExtractor;

class DailymotionExtractorTest extends \PHPUnit_Framework_TestCase
{
    public function testCreate(){
        $extractor =DailymotionExtractor::create();
        $this->assertInstanceOf('Ivoba\VideoPreviewImageExtractor\Extractor\DailymotionExtractor', $extractor);
    }
} 