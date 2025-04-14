# BVP Tokuyama Scraper

[![Build Status](https://github.com/shimomo/bvp-tokuyama-scraper/workflows/Tests/badge.svg)](https://github.com/shimomo/bvp-tokuyama-scraper/actions?query=workflow%3Atests)
[![codecov](https://codecov.io/gh/shimomo/bvp-tokuyama-scraper/graph/badge.svg?token=hmn4OrclRE)](https://codecov.io/gh/shimomo/bvp-tokuyama-scraper)
[![PHP Version Require](https://poser.pugx.org/bvp/tokuyama-scraper/require/php)](https://packagist.org/packages/bvp/tokuyama-scraper)
[![Latest Stable Version](https://poser.pugx.org/bvp/tokuyama-scraper/v/stable)](https://packagist.org/packages/bvp/tokuyama-scraper)
[![Latest Unstable Version](https://poser.pugx.org/bvp/tokuyama-scraper/v/unstable)](https://packagist.org/packages/bvp/tokuyama-scraper)
[![License](https://poser.pugx.org/bvp/tokuyama-scraper/license)](https://packagist.org/packages/bvp/tokuyama-scraper)

## Installation
```bash
composer require bvp/tokuyama-scraper
```

## Usage
```php
<?php

require __DIR__ . '/vendor/autoload.php';

use BVP\TokuyamaScraper\Scraper;

print_r(Scraper::scrapeComments(12));
print_r(Scraper::scrapeComments(12, '2025-03-24'));

print_r(Scraper::scrapeTimes(12));
print_r(Scraper::scrapeTimes(12, '2025-03-24'));
```

## License
The BVP Tokuyama Scraper package is open source software licensed under the [MIT license](LICENSE).
