<?php

namespace Test\App\Engine\Wikiwix;

use App\Engine\Wikiwix\WikipediaParser;
use App\Engine\Wikiwix\WikipediaEngine;
use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpClient\MockHttpClient;
use Symfony\Component\HttpClient\Response\MockResponse;

class WikiwixEngineTest extends TestCase
{
    /** @test */
    public function performSearch()
    {
        
        $this->assertSame(22, 22);
    }
}
