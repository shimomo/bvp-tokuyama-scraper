<?php

declare(strict_types=1);

namespace BVP\TokuyamaScraper\Tests;

use BVP\TokuyamaScraper\Scraper;
use PHPUnit\Framework\Attributes\DataProviderExternal;
use PHPUnit\Framework\TestCase;

/**
 * @author shimomo
 */
final class ScraperTest extends TestCase
{
    /**
     * @param  array  $arguments
     * @param  array  $expected
     * @return void
     */
    #[DataProviderExternal(ScraperCoreDataProvider::class, 'scrapeCommentsProvider')]
    public function testScrapeComments(array $arguments, array $expected): void
    {
        $this->assertSame($expected, Scraper::scrapeComments(...$arguments));
    }

    /**
     * @param  array  $arguments
     * @param  array  $expected
     * @return void
     */
    #[DataProviderExternal(ScraperCoreDataProvider::class, 'scrapeTimesProvider')]
    public function testScrapeTimes(array $arguments, array $expected): void
    {
        $this->assertSame($expected, Scraper::scrapeTimes(...$arguments));
    }

    /**
     * @return void
     */
    public function testScrapeCommentsWithRaceCode1AndDate20250102(): void
    {
        $this->expectException(\RuntimeException::class);
        $this->expectExceptionMessage(
            "BVP\TokuyamaScraper\Scrapers\CommentScraper::scrapeYesterday() - " .
            "The specified key '.com-rname' is not found in the content of the URL: " .
            "'https://www.boatrace-tokuyama.jp/modules/yosou/syussou.php?day=20250102&race=1'."
        );

        Scraper::scrapeComments(1, '2025-01-02');
    }

    /**
     * @return void
     */
    public function testScrapeForecastsWithRaceCode1AndDate20250102(): void
    {
        $this->expectException(\BadMethodCallException::class);
        $this->expectExceptionMessage(
            "BVP\TokuyamaScraper\Scrapers\ForecastScraper::scrape() - " .
            "The 'scrape' feature is currently not implemented."
        );

        Scraper::scrapeForecasts(1, '2025-01-02');
    }

    /**
     * @return void
     */
    public function testScrapeTimesWithRaceCode1AndDate20250102(): void
    {
        $this->expectException(\RuntimeException::class);
        $this->expectExceptionMessage(
            "BVP\TokuyamaScraper\Scrapers\TimeScraper::scrape() - " .
            "The specified key '.com-rname' is not found in the content of the URL: " .
            "'https://www.boatrace-tokuyama.jp/modules/yosou/tenji.php?day=20250102&race=1'."
        );

        Scraper::scrapeTimes(1, '2025-01-02');
    }

    /**
     * @return void
     */
    public function testInvalidWithRaceCode1AndDate20250102(): void
    {
        $this->expectException(\BadMethodCallException::class);
        $this->expectExceptionMessage(
            "BVP\TokuyamaScraper\ScraperCore::__call() - " .
            "Call to undefined method 'BVP\TokuyamaScraper\ScraperCore::invalid()'."
        );

        Scraper::invalid(1, '2025-01-02');
    }
}
