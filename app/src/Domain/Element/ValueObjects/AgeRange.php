<?php

declare(strict_types=1);

namespace App\Domain\Element\ValueObjects;

use MyCLabs\Enum\Enum;

/**
 * @psalm-immutable
 * @method static AgeRAnge SENIOR()
 * @method static AgeRange TODDLERORELEMENTARY()
 */
final class AgeRange extends Enum
{
    /** @var string  */
    private const SENIOR = 'シニア';
    
    /** @var string */
    private const TODDLERORELEMENTARY = '幼児（3才以上）・小学生';
}
