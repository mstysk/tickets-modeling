<?php

declare(strict_types=1);

namespace App\Domain\Plan\ValueObjects;

use MyCLabs\Enum\Enum;

/**
 * @method static PlanName CINEMA()
 * @method static PlanName CINEMASENIOR()
 * @method static PlanName GENERAL()
 * @method static PlanName SENIOR()
 * @method static PlanName COLLEAGE()
 * @method static PlanName JUNIORORHIGH()
 * @method static PlanName TODDLERORELEMENTARY()
 * @method static PlanName HANDICAPPEDOFCHILDREN()
 * @method static PlanName HANDICAPPEDOFGROWNUP()
 */
final class PlanName extends Enum
{
    /** @var string */
    private const CINEMA = 'シネマシティズン';

    /** @var string */
    private const CINEMASENIOR = 'シネマシティズン（60才以上）';

    /** @var string */
    private const GENERAL = '一般';
    
    /** @var string */
    private const SENIOR = 'シニア（70才以上）';

    /** @var string */
    private const COLLEAGE = '学生（大・専）';

    /** @var string */
    private const JUNIORORHIGH = '中・高校生';
    
    /** @var string */
    private const TODDLERORELEMENTARY = '幼児（3才以上）・小学生';
    
    /** @var string */
    private const HANDICAPPEDOFCHILDREN = '障がい者（学生以上）';

    /** @var string */
    private const HANDICAPPEDOFGROWNUP = '障がい者（高校以下）';
}
