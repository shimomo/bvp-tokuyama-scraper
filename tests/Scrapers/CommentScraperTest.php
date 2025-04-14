<?php

declare(strict_types=1);

namespace BVP\TokuyamaScraper\Tests\Scrapers;

use BVP\TokuyamaScraper\Scrapers\CommentScraper;
use PHPUnit\Framework\Attributes\DataProviderExternal;
use PHPUnit\Framework\TestCase;

/**
 * @author shimomo
 */
final class CommentScraperTest extends TestCase
{
    /**
     * @var \BVP\TokuyamaScraper\Scrapers\CommentScraper
     */
    protected CommentScraper $scraper;

    /**
     * @return void
     */
    protected function setUp(): void
    {
        $this->scraper = new CommentScraper();
    }

    /**
     * @param  array  $arguments
     * @param  array  $expected
     * @return void
     */
    #[DataProviderExternal(CommentScraperDataProvider::class, 'scrapeProvider')]
    public function testScrape(array $arguments, array $expected): void
    {
        $this->assertSame($expected, $this->scraper->scrape(...$arguments));
    }

    /**
     * @return void
     */
    public function testThrowsExceptionWhenKeyNotFound(): void
    {
        $this->expectException(\RuntimeException::class);
        $this->expectExceptionMessage(
            "BVP\TokuyamaScraper\Scrapers\CommentScraper::scrape() - " .
            "The specified key '.com-rname' is not found in the content of the URL: " .
            "'https://www.boatrace-tokuyama.jp/modules/yosou/syussou.php?day=20250102&race=1'."
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
            "Call to undefined method 'BVP\TokuyamaScraper\Scrapers\BaseScraper::ghost()'."
        );

        $this->scraper->ghost(1, '2025-01-02');
    }
}
