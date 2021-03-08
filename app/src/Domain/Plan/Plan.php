<?php

declare(strict_types=1);

namespace App\Domain\Plan;

use App\Domain\Element\Element;
use App\Domain\Plan\ValueObjects\PlanName;

class Plan
{
    /** @var PlanName */
    private PlanName $planName;
    
    /** @var int */
    private int $price;
    
    /** @var bool */
    private bool $holiday;

    /** @var bool */
    private bool $late;

    /** @var bool */
    private bool $movieDay;

    /** @var Element */
    private Element $element;

    public function __construct(
        PlanName $planName,
        int $price,
        bool $holyday,
        bool $late,
        bool $movieDay,
        Element $element
    )
    {
        $this->planName = $planName;
        $this->price = $price;
        $this->holiday = $holyday;
        $this->late = $late;
        $this->movieDay = $movieDay;
        $this->element = $element;
    }

    public static function generateCinemaWeekdaysEarly()
    {
        return new self(
            PlanName::CINEMA(),
            1000,
            false,
            false,
            false,
            Element::generateCinema()
        );
    }
}
