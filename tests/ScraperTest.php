<?php

declare(strict_types=1);

namespace BVP\TokuyamaScraper\Tests;

use BVP\TokuyamaScraper\Scraper;
use BVP\TokuyamaScraper\ScraperInterface;
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
    #[DataProviderExternal(ScraperDataProvider::class, 'scrapeCommentsProvider')]
    public function testScrapeComments(array $arguments, array $expected): void
    {
        $this->assertSame($expected, Scraper::scrapeComments(...$arguments));
    }

    /**
     * @param  array  $arguments
     * @param  array  $expected
     * @return void
     */
    #[DataProviderExternal(ScraperDataProvider::class, 'scrapeTimesProvider')]
    public function testScrapeTimes(array $arguments, array $expected): void
    {
        $this->assertSame($expected, Scraper::scrapeTimes(...$arguments));
    }

    /**
     * @return void
     */
    public function testThrowsExceptionWhenKeyNotFoundInComments(): void
    {
        $this->expectException(\RuntimeException::class);
        $this->expectExceptionMessage(
            "BVP\TokuyamaScraper\Scrapers\CommentScraper::scrape() - " .
            "The specified key '.com-rname' is not found in the content of the URL: " .
            "'https://www.boatrace-tokuyama.jp/modules/yosou/syussou.php?day=20250102&race=1'."
        );

        Scraper::scrapeComments(1, '2025-01-02');
    }

    /**
     * @return void
     */
    public function testThrowsExceptionWhenKeyNotFoundInForecasts(): void
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
    public function testThrowsExceptionWhenKeyNotFoundInTimes(): void
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
    public function testThrowsExceptionWhenMethodDoesNotExist(): void
    {
        $this->expectException(\BadMethodCallException::class);
        $this->expectExceptionMessage(
            "BVP\TokuyamaScraper\ScraperCore::__call() - " .
            "Call to undefined method 'BVP\TokuyamaScraper\ScraperCore::ghost()'."
        );

        Scraper::ghost(1, '2025-01-02');
    }

    /**
     * @return void
     */
    public function testGetInstance(): void
    {
        Scraper::resetInstance();
        $this->assertInstanceOf(ScraperInterface::class, Scraper::getInstance());
    }

    /**
     * @return void
     */
    public function testCreateInstance(): void
    {
        Scraper::resetInstance();
        $this->assertInstanceOf(ScraperInterface::class, Scraper::createInstance());
    }

    /**
     * @return void
     */
    public function testResetInstance(): void
    {
        Scraper::resetInstance();
        $instance1 = Scraper::getInstance();
        Scraper::resetInstance();
        $instance2 = Scraper::getInstance();
        $this->assertNotSame($instance1, $instance2);
    }
}
