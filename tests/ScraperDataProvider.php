<?php

declare(strict_types=1);

namespace BVP\TokuyamaScraper\Tests;

/**
 * @author shimomo
 */
final class ScraperDataProvider
{
    /**
     * @return array
     */
    public static function scrapeCommentsProvider(): array
    {
        return [
            [
                'arguments' => [1, '2025-01-01'],
                'expected' => [
                    'boat_number_1_racer_name' => '末永祐輝',
                    'boat_number_1_racer_yesterday_comment_label' => '前日コメント',
                    'boat_number_1_racer_yesterday_comment' => '状態は良かったと思います。',
                    'boat_number_2_racer_name' => '金子順一',
                    'boat_number_2_racer_yesterday_comment_label' => '前日コメント',
                    'boat_number_2_racer_yesterday_comment' => '足は変わっていない。',
                    'boat_number_3_racer_name' => '石倉拓美',
                    'boat_number_3_racer_yesterday_comment_label' => '前日コメント',
                    'boat_number_3_racer_yesterday_comment' => '中堅くらいです。',
                    'boat_number_4_racer_name' => '花本剛',
                    'boat_number_4_racer_yesterday_comment_label' => '前日コメント',
                    'boat_number_4_racer_yesterday_comment' => '風が強くてもグリップが良かった。',
                    'boat_number_5_racer_name' => '加木郁',
                    'boat_number_5_racer_yesterday_comment_label' => '前日コメント',
                    'boat_number_5_racer_yesterday_comment' => '悪くないけど、いい感じはしない。',
                    'boat_number_6_racer_name' => '藤本佳史',
                    'boat_number_6_racer_yesterday_comment_label' => '前日コメント',
                    'boat_number_6_racer_yesterday_comment' => '足は普通くらい。',
                ],
            ],
            [
                'arguments' => [6, '2025-01-01'],
                'expected' => [
                    'boat_number_1_racer_name' => '広次修',
                    'boat_number_1_racer_yesterday_comment_label' => '前日コメント',
                    'boat_number_1_racer_yesterday_comment' => '出足寄りで下がることはない。',
                    'boat_number_2_racer_name' => '笹木香吾',
                    'boat_number_2_racer_yesterday_comment_label' => '前日コメント',
                    'boat_number_2_racer_yesterday_comment' => '(前日コメ)乗りやすくて出足はいい。',
                    'boat_number_3_racer_name' => '東健介',
                    'boat_number_3_racer_yesterday_comment_label' => '前日コメント',
                    'boat_number_3_racer_yesterday_comment' => '出足、行き足系で悪くない。',
                    'boat_number_4_racer_name' => '小川広大',
                    'boat_number_4_racer_yesterday_comment_label' => '前日コメント',
                    'boat_number_4_racer_yesterday_comment' => '回って進んでいない。',
                    'boat_number_5_racer_name' => '藤森拓海',
                    'boat_number_5_racer_yesterday_comment_label' => '前日コメント',
                    'boat_number_5_racer_yesterday_comment' => '直線は負ける人はいないです。',
                    'boat_number_6_racer_name' => '藤井徹',
                    'boat_number_6_racer_yesterday_comment_label' => '前日コメント',
                    'boat_number_6_racer_yesterday_comment' => 'レース足が弱い。整備します。',
                ],
            ],
        ];
    }

    /**
     * @return array
     */
    public static function scrapeTimesProvider(): array
    {
        return [
            [
                'arguments' => [1, '2025-01-01'],
                'expected' => [
                    'boat_number_1_racer_name' => '末永祐輝',
                    'boat_number_1_racer_exhibition_time' => 6.82,
                    'boat_number_1_racer_lap_time' => 36.61,
                    'boat_number_1_racer_turn_time' => 11.33,
                    'boat_number_2_racer_name' => '金子順一',
                    'boat_number_2_racer_exhibition_time' => 6.84,
                    'boat_number_2_racer_lap_time' => 37.35,
                    'boat_number_2_racer_turn_time' => 11.62,
                    'boat_number_3_racer_name' => '石倉拓美',
                    'boat_number_3_racer_exhibition_time' => 6.92,
                    'boat_number_3_racer_lap_time' => 37.78,
                    'boat_number_3_racer_turn_time' => 11.96,
                    'boat_number_4_racer_name' => '花本剛',
                    'boat_number_4_racer_exhibition_time' => 6.94,
                    'boat_number_4_racer_lap_time' => 37.39,
                    'boat_number_4_racer_turn_time' => 11.67,
                    'boat_number_5_racer_name' => '加木郁',
                    'boat_number_5_racer_exhibition_time' => 6.87,
                    'boat_number_5_racer_lap_time' => 37.41,
                    'boat_number_5_racer_turn_time' => 11.55,
                    'boat_number_6_racer_name' => '藤本佳史',
                    'boat_number_6_racer_exhibition_time' => 6.97,
                    'boat_number_6_racer_lap_time' => 37.60,
                    'boat_number_6_racer_turn_time' => 11.59,
                ],
            ],
            [
                'arguments' => [6, '2025-01-01'],
                'expected' => [
                    'boat_number_1_racer_name' => '広次修',
                    'boat_number_1_racer_exhibition_time' => 6.93,
                    'boat_number_1_racer_lap_time' => 37.04,
                    'boat_number_1_racer_turn_time' => 11.41,
                    'boat_number_2_racer_name' => '笹木香吾',
                    'boat_number_2_racer_exhibition_time' => 6.95,
                    'boat_number_2_racer_lap_time' => 37.38,
                    'boat_number_2_racer_turn_time' => 11.67,
                    'boat_number_3_racer_name' => '東健介',
                    'boat_number_3_racer_exhibition_time' => 6.98,
                    'boat_number_3_racer_lap_time' => 37.56,
                    'boat_number_3_racer_turn_time' => 11.58,
                    'boat_number_4_racer_name' => '小川広大',
                    'boat_number_4_racer_exhibition_time' => 6.94,
                    'boat_number_4_racer_lap_time' => 37.71,
                    'boat_number_4_racer_turn_time' => 11.70,
                    'boat_number_5_racer_name' => '藤森拓海',
                    'boat_number_5_racer_exhibition_time' => 6.91,
                    'boat_number_5_racer_lap_time' => 38.70,
                    'boat_number_5_racer_turn_time' => 11.73,
                    'boat_number_6_racer_name' => '藤井徹',
                    'boat_number_6_racer_exhibition_time' => 6.95,
                    'boat_number_6_racer_lap_time' => 38.06,
                    'boat_number_6_racer_turn_time' => 11.98,
                ],
            ],
        ];
    }
}
