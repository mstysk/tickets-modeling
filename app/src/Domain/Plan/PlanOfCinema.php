<?php

declare(strict_types=1);

namespace App\Domain\Plan;

use App\Domain\Plan\ValueObjects\PlanName;
use App\Domain\Element\Element;
use RuntimeException;

class PlanOfCinema extends AbstractPlanFactory
{
    private static array $prices = [
        'weekdaysEarly' => 1000,
        'weekdaysLate' => 1000,
        'holydayEarly' => 1300,
        'holydayLate' => 1000,
        'movieDay' => 1000,
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
        return Element::generateCinema();
    }

    protected static function getPlanName(): PlanName
    {
        return PlanName::CINEMA();
    }
}
