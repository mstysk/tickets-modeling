<?php

declare(strict_types=1);

namespace App\Domain\Element\ValueObjects;

use MyCLabs\Enum\Enum;

/**
 * @method static Handicapped CHILDREN()
 * @method static Handicapped GROWNUP()
 */
class Handicapped extends Enum
{
    /** @var string */
    private const CHILDREN = "children";

    /** @var string */
    private const GROWNUP = "grownup";
}
