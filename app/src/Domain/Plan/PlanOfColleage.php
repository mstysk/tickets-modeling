<?php

declare(strict_types=1);

namespace App\Domain\Plan;

use App\Domain\Plan\ValueObjects\PlanName;
use App\Domain\Element\Element;
use RuntimeException;

class PlanOfColleage extends AbstractPlanFactory
{
    private static array $prices = [
        'weekdaysEarly' => 1500,
        'weekdaysLate' => 1300,
        'holydayEarly' => 1500,
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
        return Element::generateColleage();
    }

    protected static function getPlanName(): PlanName
    {
        return PlanName::COLLEAGE();
    }
}
