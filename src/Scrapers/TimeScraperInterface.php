<?php

declare(strict_types=1);

namespace BVP\TokuyamaScraper\Scrapers;

use BVP\TokuyamaScraper\ScraperContractInterface;
use Carbon\CarbonInterface;

/**
 * @author shimomo
 */
interface TimeScraperInterface extends ScraperContractInterface
{
    /**
     * @param  string|int                           $raceNumber
     * @param  \Carbon\CarbonInterface|string|null  $raceDate
     * @return array
     */
    public function scrape(string|int $raceNumber, CarbonInterface|string|null $raceDate = null): array;
}
