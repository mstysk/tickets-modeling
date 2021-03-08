<?php

declare(strict_types=1);

namespace App\Domain\Plan;

use App\Domain\Plan\ValueObjects\PlanName;
use App\Domain\Element\Element;
use RuntimeException;

class PlanOfGeneral extends AbstractPlanFactory
{
    private static array $prices = [
        'weekdaysEarly' => 1800,
        'weekdaysLate' => 1300,
        'holydayEarly' => 1800,
        'holydayLate' => 1300,
        'movieDay' => 1100,
    ];

    protected static function getPrice(string $key): int
    {
        if (isset(self::$prices[$key])) {
            return self::$prices[$key];
        }
        throw new RuntimeException('no such prices');
    }

    protected static function getElement(): Element
    {
        return Element::generateGeneral();
    }

    protected static function getPlanName(): PlanName
    {
        return PlanName::GENERAL();
    }
}
