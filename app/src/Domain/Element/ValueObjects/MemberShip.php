<?php

declare(strict_types=1);

namespace App\Domain\Element\ValueObjects;

use DateTimeInterface;

class MemberShip
{
    /** @var DateTimeInterface */
    private DateTimeInterface $expiredAt;

    public function __construct(DateTimeInterface $expiredAt)
    {
        $this->expiredAt = $expiredAt;
    }
}
