<?php

namespace Kata;

use DateTimeImmutable;

class Meetup
{
    public function calculateDate(DateParser $dateParser): DateTimeImmutable
    {
        $dateString = date("Y/m/d", strtotime("{$dateParser->position()} {$dateParser->day()} of {$dateParser->month()} {$dateParser->year()}"));
        return DateTimeImmutable::createFromFormat('Y/m/d', $dateString);
    }
}

