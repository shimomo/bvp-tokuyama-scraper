<?php

declare(strict_types=1);

namespace BVP\TokuyamaScraper;

/**
 * @author shimomo
 */
interface ScraperInterface extends ScraperContractInterface
{
    /**
     * @param  \BVP\TokuyamaScraper\ScraperCoreInterface
     * @return \BVP\TokuyamaScraper\ScraperInterface
     */
    public static function getInstance(?ScraperCoreInterface $scraperCore = null): ScraperInterface;

    /**
     * @param  \BVP\TokuyamaScraper\ScraperCoreInterface
     * @return \BVP\TokuyamaScraper\ScraperInterface
     */
    public static function createInstance(?ScraperCoreInterface $scraperCore = null): ScraperInterface;

    /**
     * @return void
     */
    public static function resetInstance(): void;
}
