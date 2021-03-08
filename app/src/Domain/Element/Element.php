<?php

declare(strict_types=1);

namespace App\Domain\Element;

use DateTime;
use App\Domain\Element\ValueObjects\Student;
use App\Domain\Element\ValueObjects\MemberShip;
use App\Domain\Element\ValueObjects\AgeRange;
use App\Domain\Element\ValueObjects\Handicapped;

class Element
{
    /** @var ?AgeRange */
    private ?AgeRange $ageRange;

    /** @var ?MemberShip */
    private ?MemberShip $memberShip;

    /** @var ?Student */
    private ?Student $student;
    
    /** @var ?Handicapped */
    private ?Handicapped $handicapped;

    public function __construct(
        AgeRange $ageRange = null,
        MemberShip $memberShip = null,
        Student $student = null,
        Handicapped $handicapped = null
    ){
        $this->ageRange = $ageRange;
        $this->memberShip = $memberShip;
        $this->student = $student;
        $this->handicapped = $handicapped;
    }

    public static function generateCinema(): self
    {
        return new self(
            null,
            new MemberShip(new DateTime())
        );
    }

    public static function generateCinemaSenior(): self
    {
        return new self(
            AgeRange::SENIOR(),
            new MemberShip(new DateTime())
        );
    }

    public static function generateGeneral(): self
    {
        return new self();
    }
    public static function generateSenior(): self
    {
        return new self(
            AgeRange::SENIOR(),
        );
    }

    public static function generateColleage(): self
    {
        return new self(
            null,
            null,
            Student::COLLEAGE()
        );
    }

    public static function generateJuniorOrHigh(): self
    {
        return new self(
            null,
            null,
            Student::JUNIORORHIGH()
        );
    }

    public static function generateToddleOrElementary(): self
    {
        return new self(
            AgeRange::TODDLERORELEMENTARY()
        );
    }

    public static function generageHandicappedChildren(): self
    {
        return new self(
            null,
            null,
            null,
            Handicapped::CHILDREN()
        );
    }

    public static function generageHandicappedGrownup(): self
    {
        return new self(
            null,
            null,
            null,
            Handicapped::GROWNUP()
        );
    }
}
