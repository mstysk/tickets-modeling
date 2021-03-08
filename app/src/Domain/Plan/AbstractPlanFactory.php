<?php

declare(strict_types=1);

namespace App\Domain\Plan;

use App\Domain\Plan\ValueObjects\PlanName;
use App\Domain\Element\Element;

abstract class AbstractPlanFactory
{
    abstract protected static function getPrice(string $key): int;

    abstract protected static function getElement(): Element;

    abstract protected static function getPlanName(): PlanName;

    public static function weekdaysEarly()
    {
        return new Plan(
            self::getPlanName(),
            self::getPrice(__FUNCTION__),
            false,
            false,
            false,
            self::getElement()
        );
    }

    public static function weekdaysLate()
    {
        return new Plan(
            self::getPlanName(),
            self::getPrice(__FUNCTION__),
            false,
            true,
            false,
            self::getElement()
        );
    }

    public static function holydayEarly()
    {
        return new Plan(
            self::getPlanName(),
            self::getPrice(__FUNCTION__),
            true,
            false,
            false,
            self::getElement()
        );
    }

    public static function holydayLate()
    {
        return new Plan(
            self::getPlanName(),
            self::getPrice(__FUNCTION__),
            true,
            true,
            false,
            self::getElement()
        );
    }

    public static function movieDay()
    {
        return new Plan(
            self::getPlanName(),
            self::getPrice(__FUNCTION__),
            false,
            false,
            true,
            self::getElement()
        );
    }
}
