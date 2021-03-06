<?php

declare(strict_types=1);

namespace App\Domain\Element\ValueObjects;

use MyCLabs\Enum\Enum;

/**
 * @method static Student COLLEAGE()
 * @method static Student JUNIORORHIGH()
 */
class Student extends Enum
{
    /** @var string */
    private const COLLEAGE = '学生（大・専）';

    /** @var string */
    private const JUNIORORHIGH = '中・高校生';
}
