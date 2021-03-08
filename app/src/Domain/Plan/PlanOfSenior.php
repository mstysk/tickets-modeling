<?php

declare(strict_types=1);

namespace App\Domain\Plan;

use App\Domain\Plan\ValueObjects\PlanName;
use App\Domain\Element\Element;
use RuntimeException;

class PlanOfCinema extends AbstractPlanFactory
{
    private static array $prices = [
        'weekdaysEarly' => 1100,
        'weekdaysLate' => 1100,
        'holydayEarly' => 1100,
        'holydayLate' => 1100,
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
        return Element::generateSenior();
    }

    protected static function getPlanName(): PlanName
    {
        return PlanName::Senior();
    }
}
