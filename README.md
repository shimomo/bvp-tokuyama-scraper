# BVP Tokuyama Scraper

[![tests](https://github.com/shimomo/bvp-tokuyama-scraper/actions/workflows/tests.yml/badge.svg)](https://github.com/shimomo/bvp-tokuyama-scraper/actions/workflows/tests.yml)
[![codecov](https://codecov.io/gh/shimomo/bvp-tokuyama-scraper/graph/badge.svg?token=hmn4OrclRE)](https://codecov.io/gh/shimomo/bvp-tokuyama-scraper)
[![php](https://poser.pugx.org/bvp/tokuyama-scraper/require/php)](https://packagist.org/packages/bvp/tokuyama-scraper)
[![stable](https://poser.pugx.org/bvp/tokuyama-scraper/v/stable)](https://packagist.org/packages/bvp/tokuyama-scraper)
[![unstable](https://poser.pugx.org/bvp/tokuyama-scraper/v/unstable)](https://packagist.org/packages/bvp/tokuyama-scraper#5.x-dev)
[![license](https://poser.pugx.org/bvp/tokuyama-scraper/license)](https://packagist.org/packages/bvp/tokuyama-scraper)

## Installation
```bash
composer require bvp/tokuyama-scraper
```

## Usage
```php
<?php

require __DIR__ . '/vendor/autoload.php';

use BVP\TokuyamaScraper\Scraper;

// ------------------------------
// 基本的な使い方
// ------------------------------

// scrapeComments($raceNumber, $raceDate = null)
// scrapeTimes($raceNumber, $raceDate = null)
//
// $raceNumber : レース番号 (1〜12)
// $raceDate   : レース開催日（省略時は当日）
//               - 文字列の場合: Carbon::parse() が解釈できる任意の形式（例: '2025-01-01', '2025/01/01', 'yesterday'）
//               - Carbonインスタンスも可

// 例: ボートレース徳山の公式サイトから2025年01月01日の1レースの選手コメントを取得
$comments = Scraper::scrapeComments(1, '2025-01-01');

// 取得結果を表示
print_r($comments);

/*
Array
(
    [boat_number_1_racer_name] => 末永祐輝
    [boat_number_1_racer_yesterday_comment_label] => 前日コメント
    [boat_number_1_racer_yesterday_comment] => 状態は良かったと思います。
    [boat_number_2_racer_name] => 金子順一
    [boat_number_2_racer_yesterday_comment_label] => 前日コメント
    [boat_number_2_racer_yesterday_comment] => 足は変わっていない。
    [boat_number_3_racer_name] => 石倉拓美
    [boat_number_3_racer_yesterday_comment_label] => 前日コメント
    [boat_number_3_racer_yesterday_comment] => 中堅くらいです。
    [boat_number_4_racer_name] => 花本剛
    [boat_number_4_racer_yesterday_comment_label] => 前日コメント
    [boat_number_4_racer_yesterday_comment] => 風が強くてもグリップが良かった。
    [boat_number_5_racer_name] => 加木郁
    [boat_number_5_racer_yesterday_comment_label] => 前日コメント
    [boat_number_5_racer_yesterday_comment] => 悪くないけど、いい感じはしない。
    [boat_number_6_racer_name] => 藤本佳史
    [boat_number_6_racer_yesterday_comment_label] => 前日コメント
    [boat_number_6_racer_yesterday_comment] => 足は普通くらい。
)
*/

// 例: ボートレース徳山の公式サイトから2025年01月01日の1レースのオリジナル展示タイムを取得
$times = Scraper::scrapeTimes(1, '2025-01-01');

// 取得結果を表示
print_r($times);

/*
Array
(
    [boat_number_1_racer_name] => 末永祐輝
    [boat_number_1_racer_exhibition_time] => 6.82
    [boat_number_1_racer_lap_time] => 36.61
    [boat_number_1_racer_turn_time] => 11.33
    [boat_number_2_racer_name] => 金子順一
    [boat_number_2_racer_exhibition_time] => 6.84
    [boat_number_2_racer_lap_time] => 37.35
    [boat_number_2_racer_turn_time] => 11.62
    [boat_number_3_racer_name] => 石倉拓美
    [boat_number_3_racer_exhibition_time] => 6.92
    [boat_number_3_racer_lap_time] => 37.78
    [boat_number_3_racer_turn_time] => 11.96
    [boat_number_4_racer_name] => 花本剛
    [boat_number_4_racer_exhibition_time] => 6.94
    [boat_number_4_racer_lap_time] => 37.39
    [boat_number_4_racer_turn_time] => 11.67
    [boat_number_5_racer_name] => 加木郁
    [boat_number_5_racer_exhibition_time] => 6.87
    [boat_number_5_racer_lap_time] => 37.41
    [boat_number_5_racer_turn_time] => 11.55
    [boat_number_6_racer_name] => 藤本佳史
    [boat_number_6_racer_exhibition_time] => 6.97
    [boat_number_6_racer_lap_time] => 37.6
    [boat_number_6_racer_turn_time] => 11.59
)
*/
```

## License
The BVP Tokuyama Scraper is open source software licensed under the [MIT license](LICENSE).
