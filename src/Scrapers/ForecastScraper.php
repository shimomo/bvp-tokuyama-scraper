<?php

declare(strict_types=1);

namespace BVP\TokuyamaScraper\Scrapers;

use Carbon\CarbonInterface;

/**
 * @author shimomo
 */
class ForecastScraper extends BaseScraper
{
    /**
     * @param  string|int                           $raceNumber
     * @param  \Carbon\CarbonInterface|string|null  $date
     * @return never
     *
     * @throws \BadMethodCallException
     */
    public function scrape(string|int $raceNumber, CarbonInterface|string|null $date = null): never
    {
        throw new \BadMethodCallException(
            __METHOD__ . "() - The 'scrape' feature is currently not implemented."
        );
    }
}
