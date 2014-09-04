<?php

namespace Ivoba\VideoPreviewImageExtractor\Test\Integration;

use Ivoba\VideoPreviewImageExtractor\Extractor\IframeExtractor;
use Symfony\Component\DomCrawler\Crawler;
use TubeLink\TubeLink;

class IframeExtractorTest extends \PHPUnit_Framework_TestCase
{
    public function testExtract()
    {
        $crawler = new Crawler();
        $str = html_entity_decode(file_get_contents(__DIR__ . '/../../Resources/embedded_videos.html'));
        $crawler->addContent($str);
        $tubelink = TubeLink::create();
        $extractor = new IframeExtractor($tubelink);
        $generated = $extractor->extract($crawler);
        $this->assertCount(3, $generated);
    }
} 