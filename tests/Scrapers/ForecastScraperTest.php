<?php

declare(strict_types=1);

namespace BVP\TokuyamaScraper\Tests\Scrapers;

use BVP\TokuyamaScraper\Scrapers\ForecastScraper;
use PHPUnit\Framework\TestCase;

/**
 * @author shimomo
 */
final class ForecastScraperTest extends TestCase
{
    /**
     * @var \BVP\TokuyamaScraper\Scrapers\ForecastScraper
     */
    protected ForecastScraper $scraper;

    /**
     * @return void
     */
    protected function setUp(): void
    {
        $this->scraper = new ForecastScraper();
    }

    /**
     * @return void
     */
    public function testScrapeWithRaceCode1AndDate20250102(): void
    {
        $this->expectException(\BadMethodCallException::class);
        $this->expectExceptionMessage(
            "BVP\TokuyamaScraper\Scrapers\ForecastScraper::scrape() - " .
            "The 'scrape' feature is currently not implemented."
        );

        $this->scraper->scrape(1, '2025-01-02');
    }

    /**
     * @return void
     */
    public function testThrowsExceptionWhenMethodDoesNotExist(): void
    {
        $this->expectException(\BadMethodCallException::class);
        $this->expectExceptionMessage(
            "BVP\TokuyamaScraper\Scrapers\BaseScraper::__call() - " .
            "Call to undefined method 'BVP\TokuyamaScraper\Scrapers\BaseScraper::invalid()'."
        );

        $this->scraper->invalid(1, '2025-01-02');
    }
}
