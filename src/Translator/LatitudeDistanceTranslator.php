<?php

namespace Chetkov\YaMapsParser\Translator;

/**
 * Class LatitudeDistanceTranslator
 * @package Chetkov\YaMapsParser\Translator
 */
final class LatitudeDistanceTranslator extends DistanceTranslator
{
    /**
     * Длина меридиана в одном градусе (ед. измерения - КМ)
     * @var array
     */
    private const KM_IN_ONE_DEGREE = [
        0 => 110.6,     15 => 110.7,    30 => 110.9,    45 => 111.1,    60 => 111.4,    75 => 111.6,
        1 => 110.6,     16 => 110.7,    31 => 110.9,    46 => 111.2,    61 => 111.4,    76 => 111.6,
        2 => 110.6,     17 => 110.7,    32 => 110.9,    47 => 111.2,    62 => 111.5,    77 => 111.6,
        3 => 110.6,     18 => 110.7,    33 => 110.9,    48 => 111.2,    63 => 111.5,    78 => 111.7,
        4 => 110.6,     19 => 110.7,    34 => 110.9,    49 => 111.2,    64 => 111.5,    79 => 111.7,
        5 => 110.6,     20 => 110.7,    35 => 111.0,    50 => 111.2,    65 => 111.5,    80 => 111.7,
        6 => 110.6,     21 => 110.7,    36 => 111.0,    51 => 111.3,    66 => 111.5,    81 => 111.7,
        7 => 110.6,     22 => 110.7,    37 => 111.0,    52 => 111.3,    67 => 111.5,    82 => 111.7,
        8 => 110.6,     23 => 110.8,    38 => 111.0,    53 => 111.3,    68 => 111.5,    83 => 111.7,
        9 => 110.6,     24 => 110.8,    39 => 111.0,    54 => 111.3,    69 => 111.6,    84 => 111.7,
        10 => 110.6,    25 => 110.8,    40 => 111.0,    55 => 111.3,    70 => 111.6,    85 => 111.7,
        11 => 110.6,    26 => 110.8,    41 => 111.1,    56 => 111.4,    71 => 111.6,    86 => 111.7,
        12 => 110.6,    27 => 110.8,    42 => 111.1,    57 => 111.4,    72 => 111.6,    87 => 111.7,
        13 => 110.6,    28 => 110.8,    43 => 111.1,    58 => 111.4,    73 => 111.6,    88 => 111.7,
        14 => 110.6,    29 => 110.8,    44 => 111.1,    59 => 111.4,    74 => 111.6,    89 => 111.7,
        90 => 111.7,
    ];

    /**
     * @param float $latitude
     * @return float|null
     */
    public function getKmInOneDegree(float $latitude): ?float
    {
        return self::KM_IN_ONE_DEGREE[(int)round(abs($latitude))] ?? null;
    }
}
